<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\User;
use App\Feedback;
use Session;


class FeedbackController extends Controller
{
    //

    function addFeedback(Request $req){
    	$feedback = new Feedback;
    	$feedback->user_id =$req->session()->get('user')['id'];
    	$feedback->text = $req->text;
        $feedback->reply = "No Answer" ;
    	$feedback->save();
    	return redirect('/');
    }

    function showFeedbacks(){
    	$feedbacks = DB::table('feedbacks')
    	->join('users' , 'feedbacks.user_id' ,'=' ,'users.id')
    	->select('feedbacks.id' , 'users.email' , 'feedbacks.text')
    	->get();
    	return view('feedbacks' , ['feedbacks'=>$feedbacks]);

    }


    function answer(Request $req , $id){
        $comment_id = Feedback::where('id' , $id)
        ->select('id')->first()->id;
        $reply = $req->reply;

        DB::update('update feedbacks set reply = ? where id = ?',[$reply ,$comment_id]);
        return redirect('/showFeedbacks');
    }

    function getAdminAnswer(){
        $userId = Session::get('user')['id'];
        $answers = Feedback::where('user_id' , $userId)
        ->select('text' , 'reply')->get();
        return view('answers' , ['answers'=>$answers]);
    }
    
}
