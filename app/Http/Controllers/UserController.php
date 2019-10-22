<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function create(){
        $provincers= ['an'=>'An Giang','sg'=>'Sài Gòn'];
        return view('admin.index',['provine'=>$provincers]);
    }
    public function store( Request $request){
        $name = $request -> post('name');
        $age = $request -> post('age');
        $provine = $request -> post('provine');
        $user = new UserModel;
        $user ->user_name = $name;
        $user ->user_age = $age;
        $user ->user_province = $provine;
        $user ->save();
        
    }
    public function index(){
        $view = DB::table('user')->select('*');
        $view = $view->get();
        return view('/admin/viewdata', compact('view'));
    }
    public function edit($user_id){
        $view_user = UserModel::findOrFail($user_id);
        return view('/admin/data_update', ['view_user'=>$view_user]);
    }
    public function update( Request $request, $user_id){
        $new_user = UserModel::find($user_id);
        $new_user->user_name = $request-> post('name');
        $new_user->user_age = $request-> post('age');
        $new_user->user_province = $request-> post('provine');
        $new_user->save();
        return redirect()->action('UserController@index');
    }
    public function destroy($user_id){
        $del_user = UserModel::find($user_id);
        $del_user->delete();
        return redirect()->action('UserController@index')->with('success','Dữ liệu xóa thành công.');
    }
}
