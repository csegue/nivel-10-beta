<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCatalogo;
use Illuminate\Support\Facades\Auth;


class CatalogoController extends Controller
{
    /************************************************************************************************************************ */
    public function home(){                                
 
    //$catalogos= Catalogo::all();                              
    return view('catalogos.home');
    }
    
    /************************************************************************************************************************ */
    public function index(){                             
 
    $catalogos= Catalogo::all();                                
    //return $cursos;     
    return view('catalogos.index3', compact('catalogos'));
    }

    /************************************************************************************************************************ */
    public function show(Catalogo $catalogo){                    
        //return $catalogo;                                    
        return view('catalogos.show', compact('catalogo'));       
    }

    /************************************************************************************************************************ */
    public function create(){                               
        //return "página para crear catalogos";               
        return view('catalogos.create');                       
    }

    /************************************************************************************************************************ */
    public function store(StoreCatalogo $request){     
        $catalogo= Catalogo::create($request->all());                 
        return redirect()->route('catalogos.index', $catalogo);

    }

    /************************************************************************************************************************ */
    public function edit(Catalogo $catalogo){                         
        //$cat= Catalogo::find($catalogo);  return $cat;
        //return $catalogo;                                      
        return view('catalogos.edit', compact('catalogo'));
    }

    /************************************************************************************************************************ */
    public function update(request $request, Catalogo $catalogo){
        //return "Hola";
        //return $catalogo;
        $catalogo->update($request->all());
        return redirect()->route('catalogos.index', $catalogo);
    }   

    /************************************************************************************************************************ */
    public function destroy(Catalogo $catalogo){
        $catalogo->delete();   
        return redirect()->route('catalogos.index');
   }

/************************************************************************************************************************ */
    public function index2(){                                
 
        $catalogos= Catalogo::all();                               
        //return $cursos;     
        return view('catalogos.index2', compact('catalogos'));
    }

    
}
