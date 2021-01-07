<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    public function index(){
        $tbl_Publicacion = \DB::table('publicacion')
                                    ->join('producto', 'producto.idProducto', '=', 'publicacion.idProducto')
                                    ->join('comprador', 'comprador.idUsuario', '=', 'publicacion.idUsuarioAlta')
                                    ->select('publicacion.idPublicacion     AS idPublicacion'
                                            , 'producto.descProducto 	    AS tituloProducto'
                                            , 'publicacion.presupuesto 	    AS presupuesto'
                                            , 'comprador.cveComprador 	    AS cveComprador'
                                            // , 'producto.cveProducto 		AS tituloCortoProducto'
                                            , 'producto.descripcion		    AS descripcion'
                                            // , 'publicacion.fechaAlta        AS fechaAlta'
                                            )
                                    ->get();
        // return $tbl_Publicacion;
        return view('publicacion.publicacion', compact('tbl_Publicacion'));
    }
}
