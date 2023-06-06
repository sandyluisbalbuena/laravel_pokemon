<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Thread;
use App\Models\User;
use GuzzleHttp\Client;
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

    public function index(){
        $user = Auth::user();
            // $threads = Thread::with('user')->orderBy('created_at', 'desc')->get()->take(5);
            // $discussions = Category::with('threads.user')
            // ->get();

            // foreach ($discussions as $discussion) {
            //     $category = $discussion->category;
            // }


        // $client = new Client();

        // $url = 'https://noteb.com/api/webservice.php';
        // $data = [
        //     'apikey' => '112233aabbcc',
        //     'method' => 'list_models',
        //     'param' => [
        //         'model_name' => 'Apple',
        //     ],
        // ];

        // $response = $client->post($url, [
        //     'form_params' => $data,
        // ]);

        // $responseData = $response->getBody()->getContents();

        // dd($responseData);







        return view('pages.pokeforum')->with('user', $user);
        // return view('pages.pokeforum', compact('discussions','threads'))->with('user', $user);
    }

    public function thread($threadSlug){

        $user = Auth::user();

        $thread = Thread::with('user','messages.user','messages.replies.user')
        ->where('slug', $threadSlug)
        ->get();

        return view('pages.thread',compact('thread'))->with('user', $user);
    }


    public function threadComment(Request $request, $threadSlug){

        $thread = Thread::where('slug', $threadSlug)
        ->get();

        $rules = [
            'comment' => 'required',
        ];  
    
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 200);
        }

        $message = Message::create([
            'content' => $request->input('comment'),
            'user_id' => Auth::user()->id,
            'thread_id' => $thread[0]->id,
        ]);
       
        return response()->json(['success' => true, 'message' => 'Thread created successfully'], 200);
    }

    public function postCommentReplies(Request $request){

        // dd($request);

        $rules = [
            'comment' => 'required',
        ];  
    
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 200);
        }

        $message = Message::create([
            'content' => $request->input('comment'),
            'user_id' => Auth::user()->id,
            'parent_id' => $request->input('messageId'),
        ]);
       
        return response()->json(['success' => true, 'message' => 'Thread created successfully'], 200);
    }

    public function getRepliesUpdate($threadSlug){

        $thread = Thread::with('user','messages.user','messages.replies.user')
        ->where('slug', $threadSlug)
        ->get();

        return $thread->toJson();
    }

    public function getMyThreads(){

        $myThread = User::with('threads')
        ->where('id', Auth::user()->id,)
        ->get();

        return $myThread->toJson();
    }

    public function getCategories(){

        $categories = Category::get();

        return $categories->toJson();
    }

    public function getForumLatest(){

        $discussions = Category::with('threads.user','threads.messages')
        ->get();

        foreach ($discussions as $discussion) {
            $category = $discussion->category;
        }

        return $discussions->toJson();
    }

    public function getForumLatestUpdate(){
        $latestdiscussions = Thread::with('user','messages')
        ->where('shown' , 0)
        ->get();

        return $latestdiscussions->toJson();
    }


    public function getTrendingTopics(){

        $trendingThreads = Thread::withCount('messages')
        ->orderBy('messages_count', 'desc')
        ->get()->take(15);

        return $trendingThreads->toJson();
    }

    public function createThread(Request $request){

        $rules = [
            'category' => 'required',
            'title' => ['required', 'unique:threads'],
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


    public function deleteThread($threadId){
        $thread = Thread::findOrFail($threadId);

        // Delete the thread and its related messages
        $thread->messages()->delete();
        $thread->delete();
    
        // Optionally, you can return a response or redirect
        return response()->json(['success' => true, 'message' => 'Thread and related messages deleted successfully'], 200);
    }

   
}
