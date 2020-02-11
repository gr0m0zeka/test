<?php

namespace App\Http\Controllers;

use App\Combination;
use App\Network;
use App\Adspend;
use Illuminate\Http\Request;

class AdspendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $networks = Network::all();
        $new_networks = [];
        foreach ($networks as $network)
            $new_networks[$network->id] = $network;

        $networks = $new_networks;

        $combinations = Combination::all();
        $new_combinations = [];
        foreach ($combinations as $combination){
            if($networks[$combination->network_id]['type'])
                $new_combinations[] = $combination;
        }

        $combinations = $new_combinations;
        return view('adspend.create', ['combinations' => $combinations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $combination_id = $request->get('combination_id');
        $date = $request->get('date');
        $amount_of_expenses = $request->get('amount_of_expenses');
        foreach ($amount_of_expenses as $interval => $amount){
            Adspend::create([
                'combination_id' => $combination_id,
                'date' => $date,
                '15_minute_interval' => $interval,
                'amount_of_expenses' => $amount,
            ]);
        }

        return response()->redirectTo('/adspends');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
