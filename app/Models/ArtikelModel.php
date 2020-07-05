<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{
    public static function get_all(){
        $asks = DB::table('articles')->get();
        return $asks;
    }
    public static function save($data){
        $sluglower = strtolower($data['judul']);
        $slug = str_replace(' ', '-', $sluglower);

        //ini karena tidak ada auth jadi saya pakai dummy id
        $user_id = 1;

        $new_article = DB::table('articles')->insert([
            'judul' => $data['judul'],
            'isi' => $data['isi'],
            'slug' => $slug,
            'tag' => $data['tag'],
            'user_id' => $user_id,
        ]);
        return $new_article;
    }
    public static function get_by_id($id){
        $article = DB::table('articles')->where('id', $id)->first();
        return $article;
    }
    public static function update($id, $request){
        $sluglower = strtolower($request['judul']);
        $slug = str_replace(' ', '-', $sluglower);
        $item = DB::table('articles')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi'],
                        'slug' => $slug,
                        'tag' => $request['tag'],
                    ]);
        return $item;
    }
    public static function destroy($id){
        $deleted = DB::table('articles')
                    ->where('id', $id)
                    ->delete();
        return $deleted;
    }
}