<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/13/2018
 * Time: 3:33 PM
 */

namespace App\Http\Controllers;



use App\Account;
use App\Comment;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SputtaController extends Controller
{

    public function index(){
        $datas = Content::all();
//        foreach ($datas as $data)
//            $data->description = substr($data->content,0,70)."...";

        return view('index',['datas'=>$datas]);
    }

    public function detail($id){

        $data = Content::find($id);
        $comments = Comment::where('articleId',$id)->get();

        //echo $data;exit();
        return view('detail', ['data' => $data, 'comments'=>$comments]);
    }

    public function getSignup(){
        return view('signup');
    }

    public function postSignup(Request $request){

        $account = new Account();


        $account->fullname = $request->input('fullname');
        $account->email = $request->input('email');
        $account->address = $request->input('address');
        $account->city = $request->input('city');
        $account->username = $request->input('username');
        $account->password = bcrypt($request->input('password'));

        $account->save();

        return redirect('/index');

    }

    public function login(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');


        if (Auth::attempt(['username' => $username, 'password' => $password])) {

            return redirect('/index')->with('status','Success Welcome');
//                echo json_encode(Auth::User()->id);

        } else {
            return redirect('/index')->with('status','incorrect');
        }
    }


    public function logout(){
        Auth::logout();
        return redirect('/index');
    }


    public function commentSave(Request $request){

        $comment = new Comment();

        $comment->title = $request->input('title');
        $comment->content = $request->input('content');
        $comment->articleId = $request->input('articleId');
        $comment->userFullname = Auth::User()->fullname;

        $comment->save();

        return redirect('/index/detail'.'/'.$comment->articleId);


    }


}