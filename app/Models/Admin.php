<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guard = 'admin';
    protected $table = 'admins';

    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password'
    ];

    public  function  getAdmin($id){ 
        return Admin::where('id', 'LIKE', $id)->get(); 
    }
    
}
