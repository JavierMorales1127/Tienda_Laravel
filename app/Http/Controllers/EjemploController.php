<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Import del modelo
use App\Ejemplo;

//Import del controlador
use App\Http\Controllers\EjemploController;



class EjemploController extends Controller
{
    public function inicio(){
      $consulta =  Ejemplo::all();

      $data = [
          'registro'=>$consulta
      ];

        return view('inicio',$data);

    }

    function find(){
        $registroId = Ejemplo::find(10);
        

        print_r($registroId->id);

        return view('inicio');
    }

    function findbyName(){

        //get() regresa un arreglo de objetos
        //$registro = Ejemplo::where('nombre','Javier Alejandro')->get();

        //first() va a devolver solo un bojeto
        $registro = Ejemplo::where('nombre','Javier Morales')->first();
        //Depende de si queremos obtener un registro o varios registros.
        
        print_r($registro->nombre);

        //return view('inicio');
    }

    function registrar(){

        $obj = new Ejemplo();
        //Se crea un nuevo objeto de la base de datos

        $obj -> nombre = 'kilian embape';

        $obj->save();
        //save() sirve para guardar la informacion en las base de datos

        
    }

    function actualiza(){

        //buscar registro
        $obj = Ejemplo::find(5);

        //Actualizar registro
        $obj -> nombre = 'Javier Morales';

        $obj->save();

        
    }

    function borrar(){
        //buscar registro
        $obj = Ejemplo::find(4);

        $obj->delete();

        
    }
}


