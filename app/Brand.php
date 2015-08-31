<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model {


    use SoftDeletes;
    protected $table = 'brands';
    protected $guarded = [];

    public function products(){
        return $this->BelongsTo('App\Product');
    }
}
