<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Phone_number;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
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
        // $users = User::orderBy('id', 'DESC')
        //         ->paginate(10);
        return view('contacts-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_user');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required',
            'dob' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'user_type' => 'required',
            'user_status' => 'required',
        ]);

        $insert['email'] = $request->get('email');
        $insert['password'] = Hash::make($request->get('password'));
        $insert['user_type'] = $request->get('user_type');
        $insert['user_status'] = $request->get('user_status');
        $insert['first_name'] = $request->get('fname');
        $insert['last_name'] = $request->get('lname');
        $insert['middle_name'] = $request->get('mname');
        $insert['dob'] = date('Y-m-d', strtotime($request->get('dob')));
        $insert['gender'] = $request->get('gender');
        $insert['race'] = $request->get('race');

        if ($request->file('avatar')) {
            $insert['avatar'] = User::saveAvatar($request->file('avatar'));
        }


        if (!empty($request->get('rel_status'))) {
            $insert['rel_status'] = $request->get('rel_status');
        }

        if (!empty($request->get('admission_date'))) {
            $insert['created_at'] = $request->get('admission_date');
        }

        $user = User::create($insert);

        if(!empty($request->num)){
            for ($i = 0; $i < count($request->num); $i++) {
                if (!empty($request->num[$i])) {
                    $user->phones()->create(['number' => $request->num[$i], 'type' => $request->num_type[$i]]);
                }
            }
        }
        $user->syncRoles([strtolower($request->user_type)]);
        return Redirect::to('contacts-list')->with('success', 'Great! User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user_info'] = User::where('id', $id)->first();
        return view('edit_user', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'dob' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'user_type' => 'required',
            'user_status' => 'required',
        ]);
        if ($request->file('avatar')) {
            $insert['avatar'] = User::saveAvatar($request->file('avatar'));
        }

        $insert['email'] = $request->get('email');
        if (!empty($request->get('password'))) {
            $insert['password'] = Hash::make($request->get('password'));
        }
        $insert['user_type'] = $request->get('user_type');
        $insert['user_status'] = $request->get('user_status');
        $insert['first_name'] = $request->get('fname');
        $insert['last_name'] = $request->get('lname');
        $insert['middle_name'] = $request->get('mname');
        $insert['dob'] = date('Y-m-d', strtotime($request->get('dob')));
        $insert['gender'] = $request->get('gender');
        $insert['race'] = $request->get('race');

        if (!empty($request->get('rel_status'))) {
            $insert['rel_status'] = $request->get('rel_status');
        }
        if (!empty($request->get('admission_date'))) {
            $insert['created_at'] = $request->get('admission_date');
        }

        unset($insert['_token']);
        //dd($request->file());
        $user = User::where('id', $id)->get();
        $user = $user[0];
        $user->update($insert);
        $user->syncRoles([strtolower($request->user_type)]);

        return Redirect::to('users')->with('success', 'Great! User ' . $insert['first_name'] . ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $phs = Phone_number::where('user_id',$user->id)->get();
        foreach($phs as $p){
            $p->delete();
        }
        $user->delete();
        // User::where('id',$id)->delete();
        return Redirect::to('users')->with('success', 'User deleted successfully');
    }
}
