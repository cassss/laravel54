<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //个人设置页面
    public function setting(){

        return view('user.setting') ;
    }
    //个人设置行为
    public function settingStore(){
        return ;
    }

    //个人中心页面
    public function show(User $user){
        //这个人的信息内包含粉丝.关注.文章数
        $user = User::withCount(['stars','fans','posts'])->find($user->id);
        //文章列表，取前十条
        $post = $user->posts()->orderBy('created_at','desc')->take(10)->get();
        //这个人关注的用户包括关注用户的粉丝.关注.文章数
        $stars = $user->stars;
        $susers = User::whereIn('id',$stars->pluck('star_id'))->withCount(['stars','fans','posts'])->get();
        //关注这个人的用户，包括关注用户的粉丝.关注.文章数
        $fans = $user->fans;
        $fusers = User::whereIn('id',$fans->pluck('fan_id'))->withCount(['stars','fans','posts'])->get();
        return view('user/show',compact('user','post','susers','fusers'));
    }
    //关注用户
    public function fan(){

    }
    //取消关注用户
    public function unfan(){

    }
}
