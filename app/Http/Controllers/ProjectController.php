<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Industry;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function projects(){
        $projects =Project::with('industry','projectSections')->get();

        return view('backend.pages.projects',compact('projects'));
    }

    public function create(){

        return view('backend.pages.project.create');
    }

    public function industries(){
        $industries=Industry::all();
        return response()->json(['industries' => $industries]);
    }

public function  SingleImgUpload($request, $path)
{
    if ($request->hasfile('thumbnail')) {
        $name = Str::slug(config('app.name'), '-')  . "-" . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path($path), $name);
    } else
        $name = "";
    return $name;
}
public function store(Request $request){
    $thumbnail=$this->SingleImgUpload($request,"img/projects");
       Project::create([
        'title' => $request->title,
        'description' => $request->content,
        'thumbnail' =>$thumbnail,
        'industry_id' =>$request->industry_id,
       ]);
    }
}
