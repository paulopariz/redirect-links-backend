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
        $newLink->linkone = $request->linkone;
        $newLink->linktwo = $request->linktwo;
        $newLink->linkthree = $request->linkthree;
        $newLink->linktdefault = $request->linktdefault;
        $newLink->maxclick = $request->maxclick;
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
        $link->linkone = $request->linkone;
        $link->linktwo = $request->linktwo;
        $link->linkthree = $request->linkthree;
        $link->linktdefault = $request->linktdefault;
        $link->maxclick = $request->maxclick;
        $link->save();

        return response()->json('success');
    }

    public function deletar(ListLink $link, Request $request)
    {
        $link->delete();

        return response()->json('success');
    }






}
