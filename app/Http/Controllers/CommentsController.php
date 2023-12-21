<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    // Store comment
    public function store(Request $request, Post $post) {
        $formFields = $request->validate([
            'content' => 'required|min:3'
        ]);

        $formFields['post_id'] = $post->id;
        $formFields['user_id'] = Auth::user()->id;
        $formFields['approved'] = true;

        Comment::create($formFields);

        return redirect()->route('posts.single', $post->slug)
            ->with('info', 'Comment has been created successfully');
    }

    // Edit comment
    public function edit(Comment $comment) {
        return view('comments.edit', ['comment' => $comment]);
    }

    // Update comment
    public function update(Request $request, Comment $comment) {
        $comment->update(['content' => $request->comment]);
        return back()->with('info', 'Comment has been updated successfully');
    }

    // Approve comment
    public function approve(Comment $comment) {
        $comment->update(['approved' => true]);
        return back()->with('info', 'Comment has been approved successfully');
    }

    // Delete comment
    public function destroy(Comment $comment) {
        $comment->delete();
        return back()->with('info', 'Comment has been deleted successfully');
    }
}
