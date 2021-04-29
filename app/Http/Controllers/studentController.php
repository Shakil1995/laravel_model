<?php

namespace App\Http\Controllers;
use App\Models\studentsModel;
use app\Models\exmMarkModel;

use Illuminate\Http\Request;

class studentController extends Controller
{

function allSelect(){
    $result=studentsModel::pluck('name');
    return $result;
}

function count(){
    $result=studentsModel::count();
    return $result;
}

function nameData(){
    $result=studentsModel::where('name','mika',)->first();
    return $result;
}
function insertData(){
    $result=studentsModel::insert(['name'=>'redu','class'=>'4','roll'=>'1200']);
    return $result;
}
}
