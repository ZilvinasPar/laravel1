<?php

namespace App\Http\Controllers;

use App\Course;
use App\File;
use App\Group;
use App\StudentGroup;
use App\Theme;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students['students'] = User::find(Auth::user()->id);


        return view('home', $students);
    }

    public function themes($id){

        $themes['themes'] = Group::find($id);



        return view('themes', $themes);
    }

    public function contactView(){

        return view('contact');
    }

    public function downloading($file_name = null)
    {
        $path = storage_path().'/'.'app'.'/public'.'/upload/'.$file_name;
        if (file_exists($path)) {
            return Response::download($path);
        }else{

            return redirect()->back();
        }

    }
}
