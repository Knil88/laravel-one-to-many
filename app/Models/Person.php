<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'mail'
    ];
   public function personDetail(){
    return $this ->hasone(PersonDetail::class);
   }
}
