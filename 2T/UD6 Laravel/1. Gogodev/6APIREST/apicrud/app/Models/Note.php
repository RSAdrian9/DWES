<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $guarded = []; // si está vacío quiere decir que todos son cumplimentables, ya que este es el opuesto
    protected $hidden =['created_at', 'updated_at']; // ocultamos estos campos
}
