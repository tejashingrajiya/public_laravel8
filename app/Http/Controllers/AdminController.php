<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_names = Admin::all();
		//echo($admin_names);die;
        return view('admin.list', compact('admin_names'));
	}	
		 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {	//echo("hi");die;
        return view('admin.create');
    }
	
	 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'country_name' => 'required',
            'name' => 'required',
        ]);
    
        Admin::create($data);
    
        return redirect()->route('admin.index')
                        ->with('success','admin created successfully.');
    }
	
	 /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.edit',compact('admin'));
    }
	/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        $data=$request->validate([
            'name' => 'required',
            'country_name' => 'required',
        ]);
    
        $admin->update($data);
    
        return redirect()->route('admin.index')
                        ->with('success','admin updated successfully');
    }
	 /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
    
        return redirect()->route('admin.index')
                        ->with('success','admin deleted successfully');
    }
	
}
