<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // for http request
use App\Models\Record;

class HomeController extends Controller
{
    //
    public function app ()

    {
        return view('layouts.app'
    );
    }

     public function index ()

    {
       
        $response = Http::get(route('api.index'));// this is the problem
       

        $records = $response ->json(); 

        return view('test.show', ['records' => $records]);

    }

    public function show (Request $request)

    {
        $recordId = $request -> input('record_id');
        $response = Http::get(route('api.show', ['id' => $recordId]));
        $record = $response->json();
        


        return view('test.editForm', ['record' => $record]);
    }

    public function update (Request $request)

    {
        
       
        $response = Http::post(route('api.update'), $request->all());
        $record = $response->json();
        
       return redirect()->route('index');
    }

    public function delete (Request $request)

    {
       
        
        $recordId = $request -> input('record_id');
        $response = Http::delete(route('api.delete',['id' => $recordId]));
        $record = $response->json();
        $message = json_encode($record['message']); 
        
       return redirect()->route('index')->with('status', $message);
    }

}
