<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{


    /* ........................................................................................................... */
    public function index(Request $request){
        $request->session()->put(['Pedro', 'Administrador']);       //via Request
        session(['Curso'=>'Laravel']);                              //función global session
        return $request->session()->all();
    }

    public function xflash(Request $request){
        $request->session()->flash('Entrada01', 'Perfecto01');     //Guarda las últimas variables de sesion
        return $request->session()->all();
    }

    public function xreflash(Request $request){
        $request->session()->reflash('Entrada01', 'Perfecto01');     //Guarda más variables de sesion
        return $request->session()->all();
    }

    public function xkeep(Request $request){
        $request->session()->keep('assad', 'Perfecto01');             //Guarda informacion y no la borra
        return $request->session()->all();
    }


    /* ........................................................................................................... */




    public function getSessionData(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name'); 
        }else{
            echo "No data in the session, dios mio";
        }
    }

    public function storeSessionData(Request $request){
        $request->session()->put('name', 'Carlos');
        echo "Data has been added to the session";

    }

    public function deleteSessionData(Request $request){
        $request->session()->forget('name');
        echo "Data has been removed from the session";
    }

    public function deleteSessionAll(Request $request){
       // $request->session()->flush();                             //Borra todas las sessions
    }
}
