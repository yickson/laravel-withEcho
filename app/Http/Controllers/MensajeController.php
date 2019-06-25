<?php

namespace App\Http\Controllers;

use App\Events\MessageWasCreated;
use App\Mensaje;
use Illuminate\Http\Request;
use Validator;

class MensajeController extends Controller
{
    public function index()
    {
        $mensajes = Mensaje::all();
        return view('mensajes.index', compact('mensajes'));
    }

    public function create()
    {
        return view('mensajes.create');
    }

    public function store(Request $request)
    {
        $validar = Validator::make($request->all(), [
            'title' => 'required',
            'subject' => 'required'
        ]);

        if($validar->fails()) {
            return $validar->errors();
        } else {
            $mensaje = Mensaje::create($request->all());
            event(new MessageWasCreated($mensaje));

            return redirect()->route('mensajes.crear')->with('info', 'Mensaje recibido');
        }
    }
}
