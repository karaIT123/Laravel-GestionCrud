<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Models\post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        //$posts = post::published()->get();
        //$posts = post::published()->get();
        //$posts->load('category');

        #Session::put('key.a',1);
        #Session::put('key.c',[1,2]);
        #dd(Session::all());

        $posts = post::with('category')->published()->get();
        return view ('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $post = new post();
        $category = DB::table('categories')->pluck('name','id');
        return view('posts.create',compact('post','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePostRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreatePostRequest $request)
    {
        $post = post::create($request->all());
        $post->tags()->sync($request->get('tags'));
        return redirect(route('news.edit',$post));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = post::published()->where('id', $id)->firstOrFail();
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $post = post::findOrFail($id);
        $category = DB::table('categories')->pluck('name','id');
        #dd($post->tags->pluck('name','id'));
        return view('posts.edit', compact('post','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(EditPostRequest $request, $id)
    {
        #dd($request->all());
        #dd($request->get('online'));
        $online = $request->get('online');
        #dd($online);
        $post = post::findOrFail($id);
        if($online == null)
        {   #die('null');
            $post->online = 0;
            #dd($post->online);
        }
        #die('not null');
        $post->tags()->sync($request->get('tags'));

       /*$this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        $this->validate($request, post::$rules);*/

        $post->update($request->all());
        /*Session::flash('success',"L'article a été modifier avec success");
        return redirect(route('news.edit',$id))->with('success','L\'article a été modifier avec success');*/
        return redirect(route('news.edit',$id));

        /*$validator = Validator::make($request->all(), [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        if($validator->fails()){
            return redirect(route('news.edit',$id))->withErrors($validator->errors());
        }
        else{
            $post->update($request->all());
            return redirect(route('news.edit',$id));
        }*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
