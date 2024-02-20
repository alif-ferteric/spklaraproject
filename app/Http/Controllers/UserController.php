<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'dashboard.user.index',
            [
                'user' => User::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'dashboard.user.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nip'  => 'required',
            'email'  => 'required',
            'password'  => 'required',
            'is_admin'  => 'required'

        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('dashboard/user')->with('success', 'New user has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view(
            'dashboard.user.edit',
            [
                'user' => $user
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'nip'  => 'required',
            'email'  => 'required',
            'is_admin'  => 'required',
            'password'  => 'max:255'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)->update($validatedData);
        return redirect('dashboard/user')->with('success', ' user has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        Nilai::where('kecamatan_id', '=', $user->id)->delete();
        return redirect('dashboard/user')->with('success', 'User has been deleted!');
    }
}


// ini sebelumnya post controller
// <?php

// namespace App\Http\Controllers;

// use App\Models\Category;
// use App\Models\User;
// use Illuminate\Http\Request;
// use App\Models\Post;

// class PostController extends Controller
// {
//     public function index()
//     {
//         $title = '';
//         if (request('category')) {
//             // $category = Category::firstWhere('slug', request('category'));
//             // $title = ' in ' . $category->name;
//         }
//         if (request('author')) {
//             $author = User::firstWhere('username', request('author'));
//             $title = ' by ' . $author->name;
//         }
//         return
//             view('post', [
//                 "title" => "All Posts" . $title,
//                 "active" => 'blog',
//                 "posts" => Post::latest()->filter(request(['search', 'category', 'author']))
//                     ->paginate(7)->withQueryString()
//             ]);
//     }
//     public function show(Post $post)
//     {
//         return view(
//             'posts',
//             [
//                 "title" => "single post",
//                 "active" => 'blog',
//                 "post" => $post
//             ]
//         );
//     }
// }


// <?php

// namespace App\Http\Controllers;

// use App\Models\Post;
// use App\Models\Category;
// use Illuminate\Http\Request;
// use \Cviebrock\EloquentSluggable\Services\SlugService;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Storage;

// class DashboardPostController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         return view(
//             'dashboard.posts.index',
//             [
//                 'posts' => Post::where('user_id', auth()->user()->id)->get()
//             ]
//         );
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         return view('dashboard.posts.create', [
//             // 'categories' => Category::all()
//         ]);
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         // return $request->file('image')->store('post-images');
//         $validatedData = $request->validate([
//             'title' => 'required|max:255',
//             'slug'  => 'required|unique:posts',
//             'category_id' => 'required',
//             'image' => 'image|file|max:1024',
//             'body' => 'required'
//         ]);

//         if ($request->file('image')) {
//             $validatedData['image'] = $request->file('image')->store('post-images');
//         }
//         $validatedData['user_id'] = auth()->user()->id;
//         $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

//         Post::create($validatedData);
//         return redirect('dashboard/posts')->with('success', 'New post has been added!');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Post $post)
//     {
//         return view('dashboard.posts.show', [
//             'post' => $post
//         ]);
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Post $post)
//     {
//         return view('dashboard.posts.edit', [
//             'post' => $post,
//             // 'categories' => Category::all()
//         ]);
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Post $post)
//     {
//         $rules = [
//             'title' => 'required|max:255',
//             'category_id' => 'required',
//             'image' => 'image|file|max:1024',
//             'body' => 'required'
//         ];


//         if ($request->slug != $post->slug) {
//             $rules['slug'] = 'required|unique:posts';
//         }
//         $validatedData = $request->validate($rules);
//         if ($request->file('image')) {
//             if ($request->oldImage) {
//                 Storage::delete($request->oldImage);
//             }
//             $validatedData['image'] = $request->file('image')->store('post-images');
//         }
//         $validatedData['user_id'] = auth()->user()->id;
//         $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

//         Post::where('id', $post->id)->update($validatedData);
//         return redirect('dashboard/posts')->with('success', 'Post has been updated!');
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Post $post)
//     {
//         if ($post->image) {
//             Storage::delete($post->image);
//         }
//         Post::destroy($post->id);
//         return redirect('dashboard/posts')->with('success', 'Post has been deleted!');
//     }
//     public function checkSlug(Request $request)
//     {
//         $slug = SlugService::createSlug(Post::class, 'slug',  $request->title);
//         return response()->json(['slug' => $slug]);
//     }
// }
