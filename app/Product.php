<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {


    use SoftDeletes;
    protected $table = 'products';
    protected $guarded = [];

    public function manufacture(){
        return $this->hasOne('App\Manufacture');
    }

    public function location(){
        return $this->hasOne('App\Location');
    }

    public function Brand(){
        return $this->hasOne('App\Brand');
    }

    public function accessories(){
        return $this->belongsToMany('App\Accessory', 'product_accessory', 'product_id', 'accessory_id');
    }

}
