<?php

namespace App\Http\Controllers;

use App\Models\link;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Database\Query\Builder;

class LinksController extends Controller
{
    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $url = $request->input('url');

        $link = link::firstOrCreate(['url' => $url]);

//        $link = link::where('url',$url)->first();
//        if(!$link){
//            $link = link::create(['url' => $url]);
//        }

        return view('links.success', compact('link'));
    }

    public function show($id)
    {
        $link = link::findOrFail($id);
        //dd($link);
        return redirect($link->url,301);
    }
}
