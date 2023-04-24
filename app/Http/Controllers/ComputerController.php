<?php

namespace App\Http\Controllers;
use App\Models\Computer;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::latest()->get();
        $message = '';
        return view('computers.home' , compact(['computers' , 'message']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function delete(string $id)
    {
        $computer = Computer::find($id);
        $computer->delete();
        return redirect()->route('computers.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required',
            'origin' => 'required',
            'price' => 'required'
        ]);

        $computer = new Computer();
        $computer->name = $request->name;
        $computer->origin = $request->origin;
        $computer->price = $request->price;
        $computer->save();
        $message = 'Computer added succesfuly';
        return view('computers.create' , compact('message'));   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $computer = Computer::find($id);
        $message = '';
        return view('computers.showComputer' , compact(['computer' , 'message']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       //
    }

    public function updateComputer(Request $request, string $id)
    {
        $computer = Computer::find($id);
        $computer->name = $request->name;
        $computer->origin = $request->origin;
        $computer->price = $request->price;
        $computer->save();
        $message = 'Computer updated succesfuly';
        return view('computers.showComputer' , compact(['message' , 'computer']));  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
