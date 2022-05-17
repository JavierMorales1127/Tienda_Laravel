<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Example;
use App\ejemplo;

use Illuminate\Http\Request;

class Example extends Controller
{
    //




    public function inicio(){

        $query=ejemplo::all();

        $data=[
            'records' => $query

        ];

    
       

        return view('default',$data);

    }


    public function findId(){
        $query=ejemplo::find(4);
        

            print_r($query->nombre." - ".$query->id);
            //print_r($query);
            echo "<br><br>";

        
    }

    public function findNombre(){

        $name = "Javier Alejandro";

        //$query=ejemplo::where('nombre',$name)->get();//Get retorna varios registros
        $query=ejemplo::where('nombre',$name)->first();//First retorna un registro
       // print_r($query);

       print_r($query->nombre." - ".$query->id);

    }




    public function insert(){

        $obj=new ejemplo();

        $obj->nombre = "Natanael Cano";

        $obj->save();//método para ionsertar registros

    }


    public function update(){
        $obj=ejemplo::find(3);
        $obj->nombre = "Jose Francisco Ramirez Alacala"; 
        $obj->save();//
    }


    public function delete(){
        $obj=ejemplo::find(11);
        $obj->delete();
    }

}
