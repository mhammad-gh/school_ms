<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Nationalitie extends Model
{

   protected $fillable=['Name'];

    //بتعوض عن fillable مشان ماحط كل الاعمدة يدوي بحط هي بس
     //protected $guarded =[];
}
