<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeCatagory extends Model
{
   protected $primaryKey = 'Emp_catagory_id';


   
    protected $fillable = [
        'name', 'Description', 
    ];



}
