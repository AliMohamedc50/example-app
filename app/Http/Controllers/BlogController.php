<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class BlogController extends Controller
{
    public function index() {
        $blogs = DB::table('blogs')->get();

        return view('blogs.index',compact('blogs'));
    }
    public function create() {
        return view('blogs.create');
    }
    public function store(Request $request) {
        DB::table('blogs')->insert([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('blogs.index');
    }
    public function edit($id) {
        $blog = DB::table('blogs')->where('id',$id)->first();
        return view('blogs.edit', compact('blog'));
    }
    public function update(Request $request, $id) {
        DB::table('blogs')->where('id',$id)->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('blogs.index');
    }
    public function delete($id) {
        DB::table('blogs')->where('id',$id)->delete();
        return redirect()->route('blogs.index');
    }
}
