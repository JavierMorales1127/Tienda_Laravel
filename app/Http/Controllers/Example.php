<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Example;
use App\Ejemplo;

use Illuminate\Http\Request;

class Example extends Controller
{
    //




    public function inicio(){

        $query=Ejemplo::all();

        $data=[
            'records' => $query

        ];

    
       

        return view('default',$data);

    }


    public function findId(){
        $query=Ejemplo::find(6);
        

            print_r($query->nombre." - ".$query->id);
            //print_r($query);
            echo "<br><br>";

        
    }

    public function findNombre(){

        $name = "Javier Morales";

        //$query=ejemplo::where('nombre',$name)->get();//Get retorna varios registros
        $query=Ejemplo::where('nombre',$name)->first();//First retorna un registro
       // print_r($query);

       print_r($query->nombre." - ".$query->id);

    }




    public function insert(){

        $obj=new Ejemplo();

        $obj->nombre = "Natanael Cano Juarez";

        $obj->save();//método para ionsertar registros

    }


    public function update(){
        $obj=Ejemplo::find(12);
        $obj->nombre = "Jose Francisco Ramirez Alacala 893"; 
        $obj->save();//
    }


    public function delete(){
        $obj=Ejemplo::find(10);
        $obj->delete();
    }

}
