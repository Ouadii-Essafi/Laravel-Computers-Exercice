<?php

namespace App\Http\Controllers;
use App\Models\Computer;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function Home(){
        $message = '';
        return view('computers.home' , compact('message'));
    }

    public function Create_Computer(){
        $message = '';
        return view('computers.create' , compact('message'));
    }

    public function about(){
        return view('computers.about');
    }

    public function contact(){
        return view('computers.contact');
    }

    public function modifier(string $id){
        $message = '';
        $computer = Computer::find($id);
        return view('computers.update' , compact(['message' , 'computer']));
    }
}
