<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductAccessory extends Model {


    use SoftDeletes;
    protected $table = 'product_accesory';
    protected $guarded = [];

}
