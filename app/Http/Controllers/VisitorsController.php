<?php

namespace Visitors\Http\Controllers;

use Illuminate\Http\Request;
use Visitors\Visitors;

class VisitorsController extends Controller
{
    //Obtiene todos los registros
    public function getAll(){
        $visitors = Visitors::all();
        return $visitors;
    }
    
    //Agrega un registro nuevo
    public function add(Request $request){
        $visitor = Visitors::create($request->all());
        return $visitor;
    }

    //Obtiene registro por id
    public function get($id){
        $visitor = Visitors::find($id);
        return $visitor;
    }

    //Edita el registro
    public function edit($id, Request $request){
        $visitor = $this->get($id);
        $visitor->fill($request->all())->save();
        return $visitor;
    }

    //Elimina un registro
    public function delete($id){
        $visitor = $this->get($id); 
        $visitor->delete();
        return $visitor;
    }
}
