<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

use App\Http\Requests;

class SweetHomeController extends Controller
{
    public function index(){
        $houses = House::all();
        return view('house.index', compact('houses'));
    }

    public function show($id){
        $house = House::find($id);
        return view('house.show', compact('house'));
    }

    public function create()
    {
        return view('house.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'details' => 'required'
        ]);

        House::create($request->all());
        return redirect()->route('house.index')
            ->with('success','House created successfully');
    }

    public function edit($id)
    {
        $house = House::find($id);
        return view('house.edit',compact('house'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'details' => 'required'
        ]);

        House::find($id)->update($request->all());
        return redirect()->route('house.index')
            ->with('success','House updated successfully');
    }
    public function destroy($id)
    {
        House::find($id)->delete();
        return redirect()->route('house.index')
            ->with('success','House deleted successfully');
    }
}
