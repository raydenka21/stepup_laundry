<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function navbar() : View
    {
        return view('layout.menu-navbar');
        //
    }
    public function footer() : View
    {
        return view('layout.menu-footer');
        //
    }
    public function share() : View
    {
        return view('layout.menu-share');
        //
    }
    public function colors() : View
    {
        return view('layout.menu-colors');
        //
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
