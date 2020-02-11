<?php

namespace App\Http\Controllers;

use App\Network;
use App\Combination;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class CombinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $combinations = Combination::all();
        $networks = Network::all();
        $new_networks = [];
        foreach ($networks as $network)
            $new_networks[$network->id] = $network;

        $networks = $new_networks;
        return view('combination.index',['combinations' => $combinations, 'networks' => $networks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $networks = Network::all();
        return view('combination.create', ['networks' => $networks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $code = $request->get('code');
        $network_id = $request->get('network_id');
        Combination::create([
            'name' => $name,
            'code' => $code,
            'network_id' => intval($network_id),
        ]);

        return response()->redirectTo('/combinations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Combination $combination)
    {
        $networks = Network::all();
        return view('combination.update',['combination' => $combination, 'networks' => $networks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Combination $combination)
    {
        $name = $request->get('name');
        $code = $request->get('code');
        $network_id = $request->get('network_id');
        $combination->update(
            [
                'name' => $name,
                'code' => $code,
                'network_id' => intval($network_id),
            ]
        );

        return response()->redirectTo('/combinations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
