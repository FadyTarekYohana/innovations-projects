<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    

  use HasFactory;

  public function __construct(){
        
}

 public  function  getall(){ 
    return Category::all(); 
  }
   
}