<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ServiceControllerform_service;
use App\Models\services;

class servicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::all();
        return view('services.liste', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.ajout');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service'=>'required',
            'image'=>'required',
           
            
        ]);
        $services = new Specialites();
        $services->type_service= $request->type_service;
        $services ->decription = $request->decription;
        

        $services ->save();
    
        return redirect()->route('services .index')->with('status', 'service  a été ajouté avec succes.');
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('services .details',[

            'services ' => Services ::find($id)

        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services  = Services ::find($id);
        return view('services .modifier', compact('services '));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services  = Services ::find($id);

        $specialites->update([
            'type_service'=>$request->type_service,
            'description'=>$request->description,
           
           
        ]);
    
        return redirect()->route('services.index')->with('status', 'services a été modifié avec succes.');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services =  Services::find($id);
        $services->delete();
        return redirect()->route('services.index')->with('status', 'services a été supprimé avec succes.');

    }
}
