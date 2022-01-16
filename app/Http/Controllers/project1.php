<?php

namespace App\Http\Controllers;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class project1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all=project::all();
     
        return view('post.createPage',[
            'all'=>$all
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create_project_page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
       
        $name = $request->file('image')->getClientOriginalName();
        
        $request->file('image')->move('images',$name);
        $project = new project();
        $project->image = $name;
        $project->title= $request->input('title');
        $project->description= $request->input('description');
        $project->link= $request->input('link');
        $project->user_id = auth()->user()->id;
        $project->save();

       
        return redirect('/admin_bord');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find = project::find($id);
       
        return view('post.editPage',[
            'find' => $find
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images',$name);
        $post = project::find($id);
        
        $post->image = $name;
        $post->title= $request->input('title');
        $post->description= $request->input('description');
        $post->link= $request->input('link');
        $post->user_id = auth()->user()->id;

        $post->update();
        return redirect('/admin_bord');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = project::find($id);
        $post->delete();
        return redirect('/admin_bord');
    }
}
