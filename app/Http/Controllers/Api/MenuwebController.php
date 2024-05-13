<?php

namespace App\Http\Controllers\Api;

use App\Models\Menuweb;
use Illuminate\Http\Request;
use App\Http\Requests\MenuwebRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\MenuwebResource;

class MenuwebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $menuwebs = Menuweb::paginate();

        return MenuwebResource::collection($menuwebs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuwebRequest $request): Menuweb
    {
        return Menuweb::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Menuweb $menuweb): Menuweb
    {
        return $menuweb;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuwebRequest $request, Menuweb $menuweb): Menuweb
    {
        $menuweb->update($request->validated());

        return $menuweb;
    }

    public function destroy(Menuweb $menuweb): Response
    {
        $menuweb->delete();

        return response()->noContent();
    }
}
