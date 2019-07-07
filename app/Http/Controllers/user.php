<?php

namespace App\Http\Controllers;

use App\categorys;
use App\moca;
use App\movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class user extends Controller
{
    public function home()
    {
    	$categorys = categorys::select('*')->get();
        $data = [];
        foreach ($categorys as $value) {
            $movies = DB::table('movie_categorys')->where('category_code', $value->code)->pluck('movie_code');
            $details = DB::table('movies')->whereIn('movie_code', $movies)->limit(10)->get();
            $data[$value->code] = $details;
        }
    	return view('users/home', compact('categorys', 'data'));
    }

    public function watch(Request $request, $name)
    {
    	$film = movie::select('*')->where('alias', $name)->first();
        $categorys = moca::select('category_code')->where('movie_code', $film->movie_code)->get();
        $detailscate = categorys::select('*')->whereIn('code', $categorys)->get();
        return view('users/movie', compact('film', 'detailscate'));
    }

    public function cate(Request $request, $category)
    {
    	$infocate = categorys::select('*')->where('alias', $category)->first();
        $movies = moca::select('movie_code')->where('category_code', $infocate->code)->get();
        $datas = collect();
        movie::select('*')
                ->whereIn('movie_code', $movies)
                ->chunk(5, function($chunkk) use ($datas){
                	$datas->push($chunkk);
                	// array_push($datas, $chunk);
                	// echo gettype($datas);
                	// echo json_encode($a);
        });
        // echo json_encode($datas);
        // return $datas;
        return view('users/category', compact('datas', 'infocate'));
    }

    public function search(Request $request)
    {
        $key = $request->find;
        $datas = collect();
        movie::select('*')->distinct()
            ->where('name', 'like', '%' .$key .'%')
            ->orWhere('alias', 'like', '%' .$key .'%')
            ->chunk(5, function($chunk) use ($datas){
                $datas->push($chunk);
            });
        return view('users/find', compact('datas'));
    }
}
