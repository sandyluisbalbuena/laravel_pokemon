<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PokeforumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index(){
        $user = Auth::user();
        $threads = Thread::with('user')->orderBy('created_at', 'desc')->get()->take(5);
        $discussions = Category::with('threads.user')
        ->get();

        foreach ($discussions as $discussion) {
            $category = $discussion->category;
        }

        return view('pages.pokeforum', compact('discussions','threads'))->with('user', $user);
    }

    public function getForumLatest(){

        $discussions = Category::with('threads.user','threads.messages')
        ->get();

        foreach ($discussions as $discussion) {
            $category = $discussion->category;
        }


        return $discussions->toJson();
    }

    public function getTrendingTopics(){

        $trendingThreads = Thread::withCount('messages')
        ->orderBy('messages_count', 'desc')
        ->get()->take(10);



        return $trendingThreads->toJson();
    }

    public function createThread(Request $request){

        $rules = [
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
        ];  

    
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 200);
        }

        $thread = Thread::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'category_id' => $request->input('category'),
            'content' => $request->input('content'),
            'user_id' => Auth::user()->id,
        ]);
       
        return response()->json(['success' => true, 'message' => 'Thread created successfully'], 200);
    }


    public function thread($threadSlug){

        $user = Auth::user();


        $discussions = Category::with('threads.user')->get();

        foreach ($discussions as $discussion) {
            $category = $discussion->category;
        }

        return view('pages.pokeforum', compact('discussions'))->with('user', $user);
    }
}
