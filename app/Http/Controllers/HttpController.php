<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    function SimpleGetHttpRequest(){
      $response=  Http::get("http://www.apishooter.com/getSimpleString");

      return $response->body();
    }

    function SimplePostHttpRequest(){
  $response=  Http::post("http://www.apishooter.com/postSimpleString",['text'=>"Shakil"]);
     return $response->body();
      }


    function jsonGetHttpRequest(){
        $response=  Http::get("http://www.apishooter.com/getPersonList");
           return $response->json();
            }
}
