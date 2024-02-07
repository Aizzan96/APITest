<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class APIController extends Controller
{
    public function index()
    {
        
        $records = Record::all();
        return response()->json($records);
    }
        
    public function show($recordId)
    {
        $record = Record::find($recordId);
        return response()->json($record);
    }

    public function update(Request $request)
    {
        $recordId = $request -> input('record_id');
        $record = Record::find($recordId);
        $record->update($request->all());
        return response()->json($record);
    }

    public function delete($id)
    {
        
        Record::destroy($id);
        return response()->json(['message' => 'Record deleted successfully']);
    }

}
