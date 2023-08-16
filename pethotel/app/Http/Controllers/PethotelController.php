<?php

namespace App\Http\Controllers;

use App\Models\Pethotel;
use Illuminate\Http\Request;

class PethotelController extends Controller
{
    public function index()
    {
        $pethotels = Pethotel::orderBy('id','desc')->paginate(10);
        return view('indexPH', compact('pethotels'));
    }

    public function create()
    {
        return view('createPH');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phones' => 'required',
            'email' => 'required',
            'coordsGPS' => 'required',
            'siteURL' => 'required',
            'rating' => 'required',
            'dog' => 'required',
            'cat' => 'required',
            'price' => 'required',
            'freeDates' => 'required',
            'feeding' => 'required',
            'walks' => 'required',
            'bathing' => 'required',
            'nailCutting' => 'required',
            'transportation' => 'required'
        ]);
        
        Pethotel::create($request->post());
 
        return redirect()->route('pethotels.index')->with('success','Pethotel has been created successfully.');
    }

    public function show(Pethotel $pethotel)
    {
        return view('showPH',compact('pethotel'));
    }

    public function edit(Pethotel $pethotel)
    {
        return view('editPH',compact('pethotel'));
    }

    public function update(Request $request, Pethotel $pethotel)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phones' => 'required',
            'email' => 'required',
            'coordsGPS' => 'required',
            'siteURL' => 'required',
            'rating' => 'required',
            'dog' => 'required',
            'cat' => 'required',
            'price' => 'required',
            'freeDates' => 'required',
            'feeding' => 'required',
            'walks' => 'required',
            'bathing' => 'required',
            'nailCutting' => 'required',
            'transportation' => 'required'
        ]);
        
        $pethotel->fill($request->post())->save();
 
        return redirect()->route('pethotels.index')->with('success','Pethotel Has Been updated successfully');
    }

    public function destroyPH(Pethotel $pethotel)
    {
        $pethotel->delete();
        return redirect()->route('pethotels.index')->with('success','Pethotel has been deleted successfully');
    }
}
