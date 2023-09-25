<?php

namespace App\Http\Controllers;

use App\Models\Comment1;
use App\Models\Comment2;
use App\Models\Comment3;
use finfo;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment1(Request $request)
    {
        $data = new Comment1();
        $data->comment1 = $request->comment1;
        $data->save();

        // Retrieve the newly created comment data
        $newComment = Comment1::find($data->id); // Replace with the actual column name used for primary key

        return response()->json([
            'message' => 'Comment Added. <i class="fa fa-check-circle-o" aria-hidden="true"></i>',
            'comment' => $newComment->comment1, // Replace with the actual column name
        ]);
    }

    public function comment2(Request $request)
    {
        $data = new Comment2();
        $data->comment2 = $request->comment2;
        $data->save();

        // Retrieve the newly created comment data
        $newComment = Comment2::find($data->id); // Replace with the actual column name used for primary key

        return response()->json([
            'message' => 'Comment Added. <i class="fa fa-check-circle-o" aria-hidden="true"></i>',
            'comment' => $newComment->comment2, // Replace with the actual column name
        ]);
    }
    public function comment3(Request $request)
    {
        $data = new Comment3();
        $data->comment3 = $request->comment3;
        $data->save();

        // Retrieve the newly created comment data
        $newComment = Comment3::find($data->id); // Replace with the actual column name used for primary key

        return response()->json([
            'message' => 'Comment Added. <i class="fa fa-check-circle-o" aria-hidden="true"></i>',
            'comment' => $newComment->comment3, // Replace with the actual column name
        ]);
    }



    public function editComment1($id)
    {
        $data = Comment1::find($id);
        return view('edit1', compact('data'));
    }
    public function updateComment1($id, Request $request)
    {
        $data = Comment1::find($id);

        $data->comment1 = $request->input('comment1'); // Use input() method to get the comment1 value from the request.
        $data->save();

        return redirect('/dashboard'); // Use redirect() to navigate to the dashboard route.
    }
    public function deleteComment1($id)
    {
        $data = Comment1::find($id);
        $data->delete();

        return redirect()->back();
    }



    public function editComment2($id)
    {
        $data = Comment2::find($id);
        return view('edit2', compact('data'));
    }
    public function updateComment2($id, Request $request)
    {
        $data = Comment2::find($id);

        $data->comment2 = $request->input('comment2'); // Use input() method to get the comment2 value from the request.
        $data->save();

        return redirect('/dashboard'); // Use redirect() to navigate to the dashboard route.
    }
    public function deleteComment2($id)
    {
        $data = Comment2::find($id);
        $data->delete();

        return redirect()->back();
    }



    public function editComment3($id)
    {
        $data = Comment3::find($id);
        return view('edit3', compact('data'));
    }
    public function updateComment3($id, Request $request)
    {
        $data = Comment3::find($id);

        $data->comment3 = $request->input('comment3'); // Use input() method to get the comment3 value from the request.
        $data->save();

        return redirect('/dashboard'); // Use redirect() to navigate to the dashboard route.
    }
    public function deleteComment3($id)
    {
        $data = Comment3::find($id);
        $data->delete();

        return redirect()->back();
    }
}
