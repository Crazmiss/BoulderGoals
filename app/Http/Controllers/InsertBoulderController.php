<?php

namespace App\Http\Controllers;

use App\Boulder;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsertBoulderController extends Controller
{

    /**
     * Create a new user instance after a valid registration.
     *
     * @param Request $request
     * @return Renderable|RedirectResponse
     */
    public function insert(Request $request)
    {

        $data = [
            'user_id' => Auth::id()
        ];

        if ($request->input("completed") === true) {
            $data["completed_at"] = now();
        }

        $boulder = Boulder::create(array_merge($data, $request->input()));
        $boulder->save();

        return redirect()->action('HomeController@index');
    }
}
