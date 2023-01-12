<?php

namespace App\Http\Controllers;

use App\Models\ListLink;
use Illuminate\Http\Request;

class listController extends Controller
{
    public function listagem(Request $request)
    {
        $ListLink = ListLink::all();

        return response()->json($ListLink);
    }

    public function adicionar(Request $request)
    {
        $newLink = new ListLink();
        $newLink->nome = $request->name;
        $newLink->email = $request->email;
        $newLink->save();

        return response()->json('success');
    }

    public function editar(ListLink $link, Request $request)
    {
        return response()->json($link);
    }

    public function atualizar(ListLink $link, Request $request)
    {
        $link->nome = $request->name;
        $link->email = $request->email;
        $link->save();

        return response()->json('success');
    }

    public function deletar(ListLink $link, Request $request)
    {
        $link->delete();

        return response()->json('success');
    }






}
