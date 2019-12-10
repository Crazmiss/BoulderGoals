<?php

namespace App\Http\Controllers;

use App\Boulder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoulderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Eager load in the boulderGrade for every boulder
        $boulders = Auth::user()->boulders()->with(['boulderGrade'])->get();

        $boulders = $boulders->map(function (Boulder $boulder) {
            return $this->transformBoulder($boulder);
        });

        return response()->json($boulders);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $data = [
            'user_id' => Auth::id()
        ];

        $boulder = Boulder::create(array_merge($data, $request->input()));
        $boulder->save();

        return response()->json($boulder);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $boulders = Auth::user()->boulders()->with(['boulderGrade'])->get();
        $boulder = $boulders->find($id);
        $formattedBoulder = $this->transformBoulder($boulder);
        return response()->json($formattedBoulder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function transformBoulder(Boulder $boulder)
    {
        return [
            'id' => $boulder->id,
            'boulder_grade' => $boulder->boulderGrade,
            'completed_at' => $boulder->completed_at,
            'tries' => $boulder->tries,
            'notes' => $boulder->notes,
        ];
    }
}
