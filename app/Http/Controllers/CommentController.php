<?php
namespace App\Http\Controllers;

use App\Comments;
use App\Http\Controllers\Controller;
use http\Client\Request;
use Illuminate\Support\Facades\Log;


class CommentController extends Controller
{
    public function store(Request $request)
    {  log::debug('gdd 16.1 store comment');
        //on_post, from_user, body
        $input['from_user'] = $request->user()->id;
        $input['on_post'] = $request->input('on_post');
        $input['body'] = $request->input('body');
        $slug = $request->input('slug');
        Comments::create($input);
        return redirect($slug)->with('message', 'Comment published');
    }
}

