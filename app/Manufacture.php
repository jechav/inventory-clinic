<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacture extends Model {


    use SoftDeletes;
    protected $table = 'manufactures';
    protected $guarded = [];

    public function products(){
        return $this->BelongsTo('App\Product');
    }
}
