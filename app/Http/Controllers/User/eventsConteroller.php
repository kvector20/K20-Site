<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventsConteroller extends Controller
{
	public function events()
	{
		return view('user.events.index');
	}

    public function career5()
    {
    	return view('user.events.career');
    }
}
