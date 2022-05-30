<?php

namespace App\Http\Controllers;

use App\Models\HasilVoting;
use App\Http\Requests\StoreHasilVotingRequest;
use App\Http\Requests\UpdateHasilVotingRequest;

class HasilVotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreHasilVotingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHasilVotingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HasilVoting  $hasilVoting
     * @return \Illuminate\Http\Response
     */
    public function show(HasilVoting $hasilVoting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasilVoting  $hasilVoting
     * @return \Illuminate\Http\Response
     */
    public function edit(HasilVoting $hasilVoting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHasilVotingRequest  $request
     * @param  \App\Models\HasilVoting  $hasilVoting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHasilVotingRequest $request, HasilVoting $hasilVoting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasilVoting  $hasilVoting
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasilVoting $hasilVoting)
    {
        //
    }
}
