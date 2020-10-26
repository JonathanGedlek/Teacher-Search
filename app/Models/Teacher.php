<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable =["name", "email", "phone", "title"];

    public function getPathAttribute () {
        return $this-> path();
    }

    public function path (){
        return '/teachers/' . $this -> id;
    }
}
