<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exmMarkModel extends Model
{
    public $table='exma_mark';
    public $primaryKey='id';
    public $incrementing='true';
    public $keyType='int';
    public $timeStamps="false";
}
