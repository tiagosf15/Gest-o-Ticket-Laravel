<?php

namespace App\Http\Controllers;

use App\Models\tikets;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TiketsController extends Controller
{
    public function tiket()
    {
        $tikets = DB::table('tikets')->get();
       
        return  view('admin.tiket.home' , compact('tikets') );
    }

    public function cadastrar(Request $request)
    {
        return  view('admin.tiket.cadastrar');
    }


    public function inserir(Request $request){
        DB::table('tikets')->insert([
            'tick_tema' => "$request->tick_tema",
            'tick_codigoredmine' => "$request->tick_codigoredmine",
            'tick_descricao' => "$request->tick_descricao",
            'usu_codigo' =>1
        ]);
        return redirect()->route('tiket');
    }

    public function pesquisar(Request $request)
    {
        $tikets = new tikets;
        if ($request->tick_tema) {
            //dd($request->tick_tema);
            $tikets=$tikets->where('tick_tema', 'LIKE', "%$request->tick_tema%");

        }
        if ($request->tick_codigo) {

            $tikets=$tikets->where('tick_codigo', 'LIKE', "%$request->tick_codigo%");
        }
        if ($request->tick_codigoredmine) {
            $tikets=$tikets->where('tick_codigoredmine', 'LIKE', "%$request->tick_codigoredmine%");
        }
        if ($request->tick_descricao) {
            $tikets=$tikets->where('tick_descricao', 'LIKE', "%$request->tick_descricao%");
        }
        if ($request->tick_datainicio && $request->tick_datafim) {
            $tikets=$tikets->whereBetween('created_at', ["$request->tick_datainicio", "$request->tick_datafim"]);
        }
        
        $tikets = $tikets->get();


        /*  $tikets = DB::table('tikets')
        ->where('tick_tema', 'LIKE', "%$request->tick_tema%")
        ->where('tick_codigo', 'LIKE', "%$request->tick_codigo%")
        ->where('tick_codigoredmine', 'LIKE', "%$request->tick_codigoredmine%")
        ->where('tick_descricao', 'LIKE', "%$request->tick_descricao%")

        ->whereBetween('created_at', ["$request->tick_datainicio","$request->tick_datafim"])
        ->get(); */


        return view('admin.tiket.home', compact('tikets'));
    }

    public function mostrar($id){
        $tikets = new tikets;
        if ($id) {
            //dd($request->tick_tema);
            $tikets=$tikets->where('id', '=', "$id");
           
        }
        $tikets = $tikets->get();

        return  view('admin.tiket.mostrar' ,  compact('tikets'));
    }

    public function deletar(request $request){
        
       DB::table('tikets')->where('id', '=', $request->id)->delete();
        return redirect()->route('tiket');
    }

    public function editar($id){
        $tikets = new tikets;
        if ($id) {
            //dd($request->tick_tema);
            $tikets=$tikets->where('id', '=', "$id");
           
        }
        $tikets = $tikets->get();

        return  view('admin.tiket.editar' ,  compact('tikets'));
    }

    public function update(Request $request){
        $affected = DB::table('tikets')
              ->where('id', $request->id)
              ->update(['tick_tema' => "$request->tick_tema", 'tick_codigoredmine' => $request->tick_codigoredmine, 'tick_descricao' => $request->tick_descricao]);
              return redirect()->route('tiket');
    }
}
