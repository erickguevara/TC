<?php

namespace App\Http\Controllers;

use App\Models\Change;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
   
    public function index()
    {
        $changes = change::select("*")
                        ->orderBy("created_at")
                        ->get();
  
        return view('admin.changes.index',compact('changes'));
    }
    public function listadelete()
    {
        
         $changes = change::onlyTrashed()->get();
        return view('admin.changes.delete',compact('changes'));
    }

    
    public function create()
    {
        return view('admin.changes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tc_venta' => 'required',
            'tc_compra' => 'required'
        ]);
        $change = Change::create($request->all());
        return redirect()->route('admin.change.edit',$change)->with('info','El TC se agrego con exito');
    }


    public function show(Change $change)
    {
        return view('admin.changes.show',compact('change'));
    }

    public function edit(Change $change)
    {

        return view('admin.changes.edit',compact('change'));
    }

    
    public function update(Request $request, Change $change)
    {
        $request->validate([
            'tc_venta' => 'required',
            'tc_compra' => 'required'
        ]);
        $change->update($request->all());
        return redirect()->route('admin.change.edit',$change)->with('info','El TC se actulizo con exito');
        
    }

   
    public function destroy(Change $change)
    {
       $change->delete();
        return redirect()->route('admin.change')->with('info','El TC se borro con exito');
    }
}
