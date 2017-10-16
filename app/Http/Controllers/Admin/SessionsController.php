<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SessionsController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:admin',[
      'only' => ['create','store']
    ]);
  }

  public function create()
  {
    return view('admin.sessions.create');
  }

  public function store(Request $request)
  {
    $admins = $this->validate($request,[
      'username'=>'required|max:255',
      'password'=>'required'
    ]);
    if(Auth('admin')->attempt($admins)){
      // session()->flash('success','欢迎登录'.config('app.name').'后台管理系统');
      return redirect('admin')->with('success','欢迎登录'.config('app.name').'后台管理系统');
    }else{
      return back()->with('danger','很抱歉，您的账号和密码不匹配');
    }
  }

  public function destroy()
  {
    Auth('admin')->logout();
    return redirect('admin/login')->with('success','您已成功退出');
  }
}
