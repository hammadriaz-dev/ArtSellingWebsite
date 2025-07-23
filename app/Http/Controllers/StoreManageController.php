<?php

namespace App\Http\Controllers;

use App\Models\store_manage;
use App\Http\Requests\Storestore_manageRequest;
use App\Http\Requests\Updatestore_manageRequest;
use App\Models\task;
use App\Models\Tag;
use App\Models\User;
use Livewire\Attributes\Validate;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StoreManageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    
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
    public function store(Storestore_manageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(store_manage $store_manage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */

}
