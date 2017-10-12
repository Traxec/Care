<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SessionsController extends Controller
{

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
    if(Auth::guard('admin')->attempt($admins)){
      session()->flash('success','欢迎登录'.config('app.name').'后台管理系统');
      return redirect()->route('admin.index',[Auth::admin()]);
    }else{
      session()->flash('error','很抱歉，您的账号和密码不匹配');
      return redirect()->route('admin.login');
    }
  }
}
