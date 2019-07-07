<?php

namespace App\Http\Controllers;

use App\find_user;
use App\User;
use App\categorys;
use App\moca;
use App\movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class admin extends Controller
{
    public function home(){
        $categorys = categorys::select('*')->get();
        $data = [];
        foreach ($categorys as $value) {
            $movies = DB::table('movie_categorys')->where('category_code', $value->code)->pluck('movie_code');
            $details = DB::table('movies')->whereIn('movie_code', $movies)->get();
            $data[$value->code] = $details;
        } 
        // return json_encode($data);
    	return view('admin/home', compact('categorys', 'data'));
    }

    public function getlogin(){
        
        return view('admin/login');
    }

    public function postlogin(Request $request){

        if (Auth::attempt(['account'=>$request->acc, 'password'=>$request->pass])){
            return redirect()->route('homepage');
        }

        return back()->withInput();
    }

    public function add(){
        // $str = $this->utf8tourl('Lập trình PHP - Cắt bỏ dấu trong chuỗi có dấu, 8.8 out of 10 based on 5 ratings');
        // return $str;
        return view('admin/add_movie');
    }

    public function upload(Request $request){
        
        // $hash = Hash::make($request->code);
        $hash = md5($request->code);
        $errors = [];

        $find_move = movie::where('movie_code', $hash)->exists();
        if (!$find_move && $request->hasFile('img') && $request->hasFile('video') && $request->has('category')){

            $imgname = $hash .'.' .pathinfo($request->img->getClientOriginalName(), PATHINFO_EXTENSION);
            $movie = new movie();
            $movie->movie_code = $hash;
            $movie->image = $imgname;
            $movie->name = $request->name;
            $movie->describe = $request->description;
            $movie->alias = $this->utf8tourl($request->name);
            $movie->save();

            $img = $request->img->storeAs('/public/imgs', $imgname);
            $movie = $request->video->storeAs('/public/movies', $hash .'.' .pathinfo($request->video->getClientOriginalName(), PATHINFO_EXTENSION));

            foreach ($request->category as $key => $value) {
                $moca = new moca();
                $moca->movie_code = $hash;
                $moca->category_code = $value;
                $moca->save();
            }
            return redirect()->back()->with('message', 'UPLOAD SUCCESSFULLY');
        }
        return back()->with('message','UPLOAD FAILED');
    }

    public function category(Request $request, $category){

        $infocate = categorys::select('*')->where('alias', $category)->first();
        $movies = moca::select('movie_code')->where('category_code', $infocate->code)->get();
        $details = movie::select('*')->whereIn('movie_code', $movies)->get();
        return view('admin/category', compact('details', 'infocate'));
    }

    public function watch(Request $request, $name){
        $film = movie::select('*')->where('alias', $name)->first();
        $categorys = moca::select('category_code')->where('movie_code', $film->movie_code)->get();
        $detailscate = categorys::select('*')->whereIn('code', $categorys)->get();
        return view('admin/movie', compact('film', 'detailscate'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginpage');
    }

    function utf8convert($str) {
        if(!$str) return false;
        $utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($utf8 as $ascii=>$uni) 
            $str = preg_replace("/($uni)/i",$ascii,$str);
        return $str;
    }

    function utf8tourl($text){
        $text = strtolower($this->utf8convert($text));
        $text = str_replace( "ß", "ss", $text);
        $text = str_replace( "%", "", $text);
        $text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
        $text = str_replace(array('%20', ' '), '-', $text);
        $text = str_replace("----","-",$text);
        $text = str_replace("---","-",$text);
        $text = str_replace("--","-",$text);
        return $text;
    }
}
