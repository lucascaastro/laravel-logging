<?php

namespace App\Http\Controllers;

use App\Models\Logging;
use App\Http\Requests\StoreLoggingRequest;
use App\Http\Requests\UpdateLoggingRequest;

class LoggingController extends Controller
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
     * @param  \App\Http\Requests\StoreLoggingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoggingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logging  $logging
     * @return \Illuminate\Http\Response
     */
    public function show($num1, $num2)
    {
        $sub = $num1 + $num2;

        logger()->debug('Sub feita', ['num1' => $num1, 'num2' => $num2, 'sub' => $num1 - $num2]);
        return $sub;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logging  $logging
     * @return \Illuminate\Http\Response
     */
    public function edit(Logging $logging)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoggingRequest  $request
     * @param  \App\Models\Logging  $logging
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoggingRequest $request, Logging $logging)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logging  $logging
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logging $logging)
    {
        //
    }
}