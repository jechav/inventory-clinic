<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accessory extends Model {


    use SoftDeletes;
    protected $table = 'accessories';
    protected $guarded = [];

    public function products(){
        return $this->belongsToMany('App\Product', 'product_accessory', 'accessory_id', 'product_id');
    }

}
