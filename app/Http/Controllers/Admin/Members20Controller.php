<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Members20;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Members20Controller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->can('membersfirst20.view')) {
            $members = Members20::all();
            return view('admin.memberfirst20.index', compact('members'));
        }
        abort(404);
    }
}
