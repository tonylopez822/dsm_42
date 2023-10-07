<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    

    protected $table= "noodle_product";

    protected $primaryKey= "id";

    public $timestaps= true;
    
    protected $fillable = [
        'name','description','price','stock'
    ]; 

    protected $hidden = ['created_at','update_at'];


}
