<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all = Post::all();
        return response()->json($all);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PostStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $all = $request->all();
        /** @var Post $new */
        $new = Post::create($all);
        $new->save();

        return response()->json($new);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /** @var Post $record */
        $record = Post::find($id);
        if (empty($record)) {
            return response()->json("Record not found", 404);
        }
        return response()->json($record);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PostUpdateRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        /** @var User $authUser */
        $authUser = Auth::user();
        /** @var Post $record */
        $record = $authUser->posts()->find($id);
        if (empty($record)) {
            return response()->json("Record can't be found in your own posts", 404);
        }
        $all = $request->all();
        $record->update($all);

        return response()->json($record);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var User $authUser */
        $authUser = Auth::user();
        /** @var Post $record */
        $record = $authUser->posts()->find($id);
        if (empty($record)) {
            return response()->json("Record can't be found in your own posts", 404);
        }

        $record->delete();
        return response()->json($record);
    }
}
