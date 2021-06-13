<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'tb_cat_genero';
    protected $primaryKey = 'id_sn_genero';
    public $incrementing = false;
    protected $keyType = 'string';
}
