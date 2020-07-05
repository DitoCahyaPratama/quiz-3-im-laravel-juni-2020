<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
        $articles = ArtikelModel::get_all();
        return view('articles.index', compact('articles'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $saveArticle = ArtikelModel::save($data);
        if($saveArticle){
            return redirect('/artikel');
        }
    }

    public function show($id){
        $article = ArtikelModel::get_by_id($id);
        $tag = explode(" ",$article->tag);
        // dd($tag);
        return view('articles.detail', compact('article'), ["tags" => $tag]);
    }

    public function edit($id){
        $article = ArtikelModel::get_by_id($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id){
        $article = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id){
        $article = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
