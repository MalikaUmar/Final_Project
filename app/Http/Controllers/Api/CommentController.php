<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * we get here with GET, so typically we don't need the Request object
     */
    public function commentsForRecipe($recipe_id)
    {
        $comments = Comment::where('recipe_id', $recipe_id)
            ->with([
                'user'
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        return $comments;
    }

    /**
     * we get here with POST so typically we will need the Request object
     */
    public function storeForRecipe(Request $request, $recipe_id)
    {
        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->recipe_id = $recipe_id;
        $comment->rating = $request->input('rating');
        $comment->comment = $request->input('comment');
        $comment->save();

        return [
            'status' => 'success',
            'comment' => $comment
        ];
    }
}
