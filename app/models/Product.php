<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product  extends Model{
    protected $table = "products";
    public $timestamps = false;

//    public function category(){
//        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
//    }
}
?>