<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Http\Resources\UsersCollection;

class UsersController extends Controller
{
    //
    public function store(Request $request)
    {
        $user=new Users();
        // $user->userid = $request->get('userid');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->surname = $request->get('surname');
        $user->password = $request->get('password');
        $user->usertype = $request->get('usertype');
        $user->pakage = $request->get('pakage');
        $user->thecharacter = $request->get('thecharacter');
        $user->subject = $request->get('subject');
        $user->save();
        return response()->json($user);
    }
    public function index()
    {
        $users=Users::all();
        return $users;
    }
    public function update($id, Request $request)
    {
        $users = Users::find($id);
        $users->update($request->all());
        return response()->json('successfully updated');
    }

    public function delete($id)
    {
        $users = Users::find($id);
        $users->delete();
        return response()->json('succesefully deleted');
    }
}
