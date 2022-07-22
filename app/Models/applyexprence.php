<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applyexprence extends Model
{
    use HasFactory;

    protected $table="applyexprences";

       public function applyinform()
        {
             return $this->hasOne('App/Models/applyinform');
        }
}
