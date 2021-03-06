<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beer;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $beers = Beer::all();


       return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validateInput($request);

        $data = $request->all();

        $beerNew = new Beer();

        $beerNew->fill($data);

        $beerNew->save();

        $beer = Beer::orderBy('id', 'desc')->first();

        return redirect()->route('beers.show', $beer);


    }



    /**
     * Display the specified resource.
     *
     * @param  int  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {

        return view('beers.edit', compact('beer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $this->validateInput($request);
        $data = $request->all();
        $beer->update($data);

        return redirect()->route('beers.show', $beer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int Beer $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();

        return redirect()->route('beers.index');
    }

    protected function validateInput(Request $request){

        $request->validate([
            'brand' => 'required|max:255',
            'beer_typology' => 'required|max:255',
            'nationality' => 'required|max:255',
            'liters' => 'required|numeric|between:0,99.99',
            'price' => 'required|numeric|between:0,99.99',
            'image' => 'required|max:2065'
            ]);

    }
}
