<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function post_comment(Request $request)
    {
        $validated = $request->validate([
            'name' => "required|string|max:255",
            'comment' => "required|string",
            'blog_number' => "required|numeric",
        ]);

        Comment::create($validated);

        return redirect()->route('render.blog', ['blognum' => $request->input('blog_number')]);
    }


    public function render_blog($blognum) {

        $BLOGNUMBER = (int)$blognum;
        $records = Comment::where('blog_Number', $BLOGNUMBER)->get();

        $comments = $records->toArray();

        if($BLOGNUMBER == 1){
            return view('fitness-tips', compact('comments'));
        }
        elseif($BLOGNUMBER == 2){
            return view('nutrition-wellness', compact('comments'));
        }
        else
        {
            return view('effective-workouts', compact('comments'));
        }

    }
}

