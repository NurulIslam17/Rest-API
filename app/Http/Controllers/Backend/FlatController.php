<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlatRequest;
use App\Services\FlatService;
use Illuminate\Http\Request;

class FlatController extends Controller
{

    protected $flatService;

    public function __construct(FlatService $flatService)
    {
        $this->flatService = $flatService;
    }

    public function index()
    {
        $flat =  $this->flatService->getAllFlat();
        return response()->json(['data'=>$flat],200);
    }

    public function store(FlatRequest $request)
    {
        $flat =  $this->flatService->save($request);
        return response()->json(['data'=>$flat],200);
    }


    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
