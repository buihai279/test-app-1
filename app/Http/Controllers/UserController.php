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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= DB::table('users')->paginate(5);
        return view('user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modify()
    {
        $user=User::find(Auth::id());
        return view('user.modify',['user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user=User::find(Auth::id());

        if ($request['change-info']=='submit') {

            $validator = Validator::make($request->all(), [
                'name' => 'required|max:100|min:3',
            ]);
            if ($validator->fails()) {
                return back()
                        ->withErrors($validator)
                        ->withInput();
            }
            $file = $request->file('avatar');
            if ($file!=null) {
                $fileName=date("Y-m-d",time()).'-'.$file->getClientOriginalName();
                $path = 'uploads';
                $file->move($path, $fileName);   

                $user->avatar=$fileName;
            }
            if ($user->name!=$request->name) {
                $user->name=$request->name;
            }
            $user->save();

            return redirect()->back();
        }



        if ($request['change-pass']=='submit') {

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
                $user->password=bcrypt($request->newpassword);
                $user->save();
                return redirect()->back()->with('status-success','Password changed');
            }else
                return redirect()->back()->with('status-error','Password not valiable');


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
