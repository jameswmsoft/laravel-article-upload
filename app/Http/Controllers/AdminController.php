<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/14/2018
 * Time: 2:04 PM
 */

namespace App\Http\Controllers;


use App\Account;
use App\Category;
use App\Content;
//use Illuminate\Contracts\Validation\Validator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Mockery\Tests\React_ReadableStreamInterface;

//use Illuminate\Validation\Validator;

class AdminController extends Controller
{
    public function adminLogin(){
        return view('Admin.signup');
    }

    public function postadminLogin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        if (Auth::attempt(['username'=>$username,'password'=>$password,'role'=>'admin'])){
            return redirect('/admin/news');
        }
        else{
            return redirect('/admin')->with('status','try');
        }
    }

    public function index(){
        $datas = Content::all();
        //foreach ($datas as $data)
            //$data->content = substr($data->content,0,570)."...";
        return view('Admin.contentList', ['datas' => $datas]);
    }

    public function contentEdit($id){
        $categories = Category::all();
        $data = Content::find($id);
        return view('Admin.contentEdit', ['data' => $data, 'categories' => $categories]);
    }

    public function contentAdd(){
        $datas = Category::all();
        return view('Admin.contentAdd', ['datas' => $datas]);
    }

    public function postContentAdd(Request $request){

        $file = $request->file('file');

        $content = new Content();

        $content->title = $request->title;
        $content->image = $request->img_src;
        $content->content = $request->article;
        $content->category = $request->category;

        if ($file != null){
            $extension = $request->file('file')->getClientOriginalExtension(); // getting excel extension
            $dir = 'download/';
            //$filename = $extension;
            $filename = $content->image;
            $request->file('file')->move($dir, $filename);

        }else{
            $extension = "";
        }

        $content->extension = $extension;
        $content->save();


        return 'success';
        //return redirect('/admin/news');

    }

    public function postContentUpdate(Request $request){

        $file = $request->file('file');

        $id = $request->id;

        $content = Content::where('id',$id)->first();

        $content->title = $request->title;
        $content->image = $request->img_src;
        $content->content = $request->article;
        $content->category = $request->category;

        if ($file != null){
            $extension = $request->file('file')->getClientOriginalExtension(); // getting excel extension
            $dir = 'download/';
            //$filename = $extension;
            $filename = $content->image;
            $request->file('file')->move($dir, $filename);

        }else{
            $ext = explode(".",$request->img_src);
            $extension = $ext[count($ext)-1];
        }
        $content->extension = $extension;
        $content->save();
        return 'success';
        //return redirect('/admin/news');
    }




    public function contentDelete(Request $request){
        $id = $request->id;

        Content::find($id)->delete();

        return 'success';
    }


    public function users(){

        $users = User::where('role','user')->get();
        return view('Admin.users',['users'=>$users]);

    }

    public function usersEdit(Request $request){
        $email = $request->email;

//        echo $request->address;exit();

        User::where('email', $email)->update(['fullname'=>$request->fullname, 'address'=>$request->address, 'username'=>$request->username, 'role'=>$request->role]);

        return "success";
    }

    public function usersDelete(Request $request){

        $email = $request->email;
        User::where('email', $email)->delete();
        return 'success';
    }


    public function category(){

        $datas = Category::all();
        return view('Admin.category',['datas'=>$datas]);
    }

    public function categoryEdit(Request $request){
        $id = $request->id;
        $category = $request->category;
//        echo $id;exit();

        Category::where('id', $id)->update(['category' => $category]);

        return "success";
    }

    public function categoryAdd(Request $request){

        $category = new Category();

        $category->category = $request->category;
        $category->save();

        return "success";
    }

    public function categoryDelete(Request $request){
        $category = $request->category;

        Category::where('category',$category)->delete();
        return "success";
    }


    public function profile(){

        $data = User::where('role', 'admin')->first();
        //$salt = substr($data->username, 0, 2);
        $data->password ="";
        //$data->password =  $crypt->decrypt($data->password);
        //$data->password = password_verify($data->password,'aaa');
        //$data->password = password_hash($data->password,PASSWORD_DEFAULT);

        return view('Admin.profile', ['data'=>$data]);
    }

    public function profileSave(Request $request){
        $id = $request->input('id');

        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $address = $request->input('address');
        $username = $request->input('username');
        $password = bcrypt($request->input('password'));

        Account::where('id',$id)->update(['fullname'=>$fullname,'email'=>$email,'address'=>$address,'username'=>$username,'password'=>$password]);
        return redirect('/admin/news');
    }
}