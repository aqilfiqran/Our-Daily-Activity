<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreConstroller extends Controller
{
    public function work(Request $data)
    {
        return rediret()->route('work');
    }
    public function fashion(Request $data)
    {
        return rediret()->route('fashion');
    }
    public function money(Request $data)
    {
        return rediret()->route('money');
    }
    public function health(Request $data)
    {
        return rediret()->route('health');
    }
}
