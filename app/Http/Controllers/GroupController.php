<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    function list(){
        $csoport = Group::csoporLista();
        return view('group',[
            'csoportok' => $csoport
        ]);
    }

    function show($id){

        return view('nezet',[
            'csoporttag' => Group::csoporLista()[$id],
        ]);
    }
}
