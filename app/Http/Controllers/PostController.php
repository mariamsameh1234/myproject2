<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index() {
        $posts = [
            [
                "id" => 1,
                "title" => "post 1",
                "body" => "this is post 1",
                "create_by" => "Ahmed"
            ],
            [
                "id" => 2,
                "title" => "post 2",
                "body" => "this is post 2",
                "create_by" => "Mariam"
            ],
            [
                "id" => 3,
                "title" => "post 3",
                "body" => "this is post 3",
                "create_by" => "Nada"
            ]
        ];
    
        return view('posts.index', ["posts" => $posts]);
    }

    public function show($id): View
    {
        $post = [
            "id" => $id,
            "title" => "post " . $id,
            "body" => "this is post " . $id,
            "create_by" => "Ahmed"
        ];
        return view('posts.view', ["post" => $post]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    function store(Request $request): string {
        $data = $request->all();
        return "Done";
    }
    
    function update($id, Request $request): string {
        $data = $request->all();
        dd($data);
        return "Update Done";
    }

    public function edit($id): View
    {
        $post = [
            "id" => $id,
            "title" => "post " . $id,
            "body" => "this is post " . $id,
            "create_by" => "Ahmed"
        ];
        return view('posts.edit', ["post" => $post]);
    }

    function delete($id) : string {
       
        return "Delete done";
    }

   
}
