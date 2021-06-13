<template>

<div id="app">
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card">
                    <div class="card-header">Registro</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-row mb-3">
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="name" >Nombres</label>
                                    <input id="name" type="text" class="form-control" name="name" value="" required autofocus  v-model="nombre" >
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="apellidoP" >Apellido Paterno</label>
                                    <input id="apellidoP" type="text" class="form-control" name="apellidoP" value="" required autofocus v-model="apellidoP" >
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="apellidoM" >Apellido Materno</label>
                                    <input id="apellidoM" type="text" class="form-control" name="apellidoM" value="" required autofocus v-model="apellidoM" >
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="genero">Género</label>
                                    <select class="form-control" id="genero" name="genero" v-model="genero" >
                                        <option v-for="opcion in opciones" v-bind:value="opcion.value">
                                            {{ opcion.text }}
                                        </option>
                                    </select>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="edad">Edad:</label>
                                    <input type="number" class="form-control" id="edad" name="edad" min="12" max="99" value="" v-model="edad"  >
                                    
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="name">Estado Civil</label>
                                    <select class="form-control" id="estadoC" name="estadoC" v-model="estadoC" >
                                        <option v-for="alternativa in alternativas" v-bind:value="alternativa.value">
                                            {{ alternativa.text }}
                                        </option>
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="email">Correo</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required v-model="email">
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="password" >Contraseña</label>
                                    <input id="password" type="password" class="form-control" name="password" required v-model="contra">
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="password-confirm" >Confirmar Contraseña</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required v-model="contra2">
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <label for="name">Nivel de interes</label>
                                    <select class="form-control" id="nivel" name="nivel" @change="loadCombo" v-model="selected_nivel" >
                                        <option v-for="option in options" v-bind:value="option.value">
                                            {{ option.text }}
                                        </option>
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" class="btn btn-primary" @click="createRegistro()">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</template>

<script>

    export default {
        
        data(){
            return{
                nombre:"",
                apellidoP:"",
                apellidoM:"",
                genero:"",
                edad:"",
                estadoC:"",
                email:"",
                contra:"",
                contra2:"",
                nivel:"",
                genero: '0',
                opciones: [
                    { text: 'Seleccione una opción', value: '0' },
                    { text: 'Masculino', value: '1' },
                    { text: 'Femenino', value: '2' }
                ],
                estado: '0',
                alternativas: [
                    { text: 'Seleccione una opción', value: '0' },
                    { text: 'Soltero', value: '1' },
                    { text: 'Casado', value: '2' }
                ],
                nivel: '0',
                options: [
                    { text: 'Seleccione una opción', value: '0' },
                    { text: 'Preparatoria', value: '1' },
                    { text: 'Licenciatura', value: '2' },
                    { text: 'Postgrado', value: '3' }
                ],
                selected_nivel: '',
                curso: '0',
                lista:[
                    {
                        opcion: "Preparatoria",
                        valor: []
                    },
                    {
                        opcion: "Licenciaturas",
                        valor: [
                            { text: 'Lic. En Derecho', value: '1' },
                            { text: 'Lic. En Finanzas', value: '2' }
                        ]
                    },
                    {
                        opcion: "Maestrias",
                        valor: [
                            { text: 'Mtria. Admon De Negocios', value: '1' },
                            { text: 'Mtria. Dirección De Proyectos', value: '2' }
                        ]
                    }
                ]
            }
        },
        methods:{
            loadCombo: function(){
                console.log(this.selected_nivel);
            },
            createRegistro: function(){

                $.ajax({

                    method:'post',
                    url:'http://localhost:8200/registro/',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    data: {
                        nombre: this.nombre,
                        apellidoP: this.apellidoP,
                        apellidoM: this.apellidoM,
                        genero: this.genero,
                        edad: this.edad,
                        estadoC: this.estadoC,
                        email: this.email,
                        contra: this.contra,
                        contra_confirmation: this.contra2,
                        nivel: this.nivel,
                    },
                    beforeSend: function(){

                    },
                    success: function(res){
                        swal('Te has registrado', 'Tu cuenta ha sido creada', 'success');
                        // location.reload('login');
                    },
                    error: function(error){

                        let errores = error.responseJSON.errors;
                        let mensaje = 'Error en el servidor';

                        if(errores.hasOwnProperty('nombre')){
                            mensaje = errores.nombre[0];
                        }else if(errores.hasOwnProperty('apellidoP')){
                            mensaje = errores.apellidoP[0];
                        }else if(errores.hasOwnProperty('apellidoM')){
                            mensaje = errores.apellidoM[0];
                        }else if(errores.hasOwnProperty('email')){
                            mensaje = errores.email[0];
                        }else if(errores.hasOwnProperty('contra')){
                            mensaje = errores.contra[0];
                        }else{
                            mensaje = "Mensaje Inesperado";
                        }

                        swal('Error', mensaje, 'error');
                        // console.log(Object.values(error));
                    },
                    complete: function(){
                        
                    }



                })
                


            }



        },
        mounted() {
            console.log('Component mounted2.')
        }

    }
</script>
