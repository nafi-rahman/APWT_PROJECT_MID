<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;
use App\Models\Meetings;

class UserController extends Controller
{
    public function home(){
        return view('pages.user.homeUser');
    }
    public function profile(){
        $user_id = session()->get('user');
        $user = Accounts::where('id', $user_id)->first();

        return view('pages.user.profile')->with('user', $user);
    }
    public function profileEdit(Request $request){
        $user = Accounts::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('homeUser');
    }
    public function meetingList(){
        $meets = Meetings::where('user_id', session()->get('user'))->get();
        return view('pages.user.meetingList')->with('meets', $meets);
    }
    public function meeting(){
        $user = new Meetings();
        $user->user_id = session()->get('user');
        $user->save();
        return view('pages.user.meet');
    }
}
