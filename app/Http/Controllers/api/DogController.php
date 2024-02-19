<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dog;
use GuzzleHttp\Promise\Create;

class DogController extends Controller
{
    /**
     * Retrieve a paginated list of dogs ordered by their creation date.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index()
    {
        return Dog::orderBy('created_at', 'desc')->paginate(10);
    }

    /**
     * Create a new dog using the provided request data and return a JSON response with a success message.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        Dog::create($request->all());

        return response()->json([
            'message' => 'Dog created successfully'
        ], 201);
    }

    /**
     * Retrieve the dog with the specified ID.
     *
     * @param  int  $id
     * @return \App\Models\Dog
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function show(int $id)
    {
        return Dog::findOrFail($id);
    }

    /**
     * Update the dog with the specified ID using the provided request data and return a JSON response with a success message.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function update(Request $request, int $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->update($request->all());

        return response()->json([
            'message' => 'Dog updated successfully'
        ], 200);
    }

    /**
     * Delete the dog with the specified ID.
     *
     * @param  int  $id
     * @return void
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function destroy(int $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();
        return response()->json([
            'message' => 'Dog deleted successfully'
        ], 200);
        
    }
}
