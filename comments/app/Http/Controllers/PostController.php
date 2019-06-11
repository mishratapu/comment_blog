<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Censer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;
use Mail;
use Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use URL; 
class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
        public function index()
    {
        $posts = Post::all();

        return view('censors.index', compact('posts'));
    }
    public function create()
    {
        return view('censors.post');
    }

    public function store(Request $request)
    {

      $this->validate($request, [
      'select_file'  => 'required|image|mimes:jpg,png,gif|max:2048'
     ]);

     $image = $request->file('select_file');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);
     // return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);


        $post =  new Post;
        $post->title = $request->get('title');
        $post->body = $new_name;
        
        $post->save();

        return redirect('posts');
    }
    public function posts()
    {
        $data=DB::table('posts')->get();
        return view('censors.index',['posts'=>$data]);
    }
    public function show($id)
    {
    $post = Post::find($id);

    return view('censors.show', compact('post'));
    }
}
