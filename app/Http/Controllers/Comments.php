<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class Comments extends Controller
{


    public function create(Request $request){

        $request->validate([
            'name' => 'required|alpha_num',
            'message' => 'required',
        ]);

        $data = $request->all();
        $comment = new Comment;
        $comment->name = htmlspecialchars($data['name']);
        $comment->text = htmlspecialchars($data['message']);
        $comment->created_at = date('Y-m-d H:i');
        $comment->save();

        return redirect()->route('home');
    }
}
