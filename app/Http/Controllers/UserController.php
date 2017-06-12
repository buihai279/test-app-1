<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Validator;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest() || Auth::user()->level != 1) {
            return redirect()->route('home')->with('status-error', 'You can not access');
        }
        $users = DB::table('users')->paginate(5);

        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modify()
    {
        $user = User::find(Auth::id());

        return view('user.modify', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::id());

        if ($request['change-info'] == 'submit') {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:100',
                'avatar' => 'image | max:10240',
            ]);
            if ($validator->fails()) {
                return back()
                        ->withErrors($validator)
                        ->withInput();
            }
            $file = $request->file('avatar');
            if ($file != null) {
                $fileName = date('Y-m-d', time()).'-'.$file->getClientOriginalName();
                $path = 'uploads';
                $file->move($path, $fileName);
                unlink('uploads/'.$user->avatar);
                $user->avatar = $fileName;
            }
            if ($user->name != $request->name) {
                $user->name = $request->name;
            }
            $user->save();

            return redirect()->back()->with('status-success', 'User profile updated');
        }

        if ($request['change-pass'] == 'submit') {
            $validator = Validator::make($request->all(), [
                'password' => 'required|max:100|min:3',
                'newpassword' => 'required|max:100|min:6|confirmed',
            ]);

            if ($validator->fails()) {
                return back()
                        ->withErrors($validator)
                        ->withInput();
            }
            if (Hash::check($request->password, Auth::user()->password)) {
                $user->password = bcrypt($request->newpassword);
                $user->save();

                return redirect()->back()->with('status-success', 'Password changed');
            } else {
                return redirect()->back()->with('status-error', 'Password not valiable');
            }
        }
    }
}
