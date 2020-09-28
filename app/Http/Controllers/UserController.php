<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        //$users = User::all();
        $users = User::with(['roles'])->get();
        return response()->json(
            [
                'status' => 'success',
                'users' => $users->toArray()
            ], 200);
    }
    
    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return response()->json(
            [
                'status' => 'success',
                'user' => $user->toArray()
            ], 200);
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);

        if(!$user) {
            return response()->json([
                'status' => 'fail',
                'data' => 'no_user_found'
            ], 404);
        }

        if($request->user_name) {
            $user->name = $request->user_name;
        }

        if($request->user_email) {
            $user->email = $request->user_email;
        }
        
        if($request->user_pass) {
            $user->password = bcrypt($request->user_pass);
        }
        
        if($request->user_role) {
            $user->role = $request->user_role;
        }

        //Updating user.
        $user->save();

        return response()->json([
            'status' => (bool) $user,
            'data' => $user,
        ], 200);
    }

    public function delete(Request $request) {
        if(!$request->id) {
            return response()->json([
                'status' => 'fail',
                'data' => 'invalid_user_id'
            ]);
        }

        $user = User::find($request->id);
        if(!$user) {
            return response()->json([
                'status' => 'fail',
                'data' => 'no_user_found'
            ]);
        } else {
            $user->delete();
            return response()->json([
                'status' => 'success',
                'data' => 'User Deleted Successfully!'
            ]);
        }
    }
}
