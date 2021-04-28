<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentsModel extends Model
{
    // use HasFactory;
    protected $table='students';
    protected $primaryKey='id';
    protected $incrementing='true';
    protected $keyType='int';
    protected $timeStamps="false";
}
