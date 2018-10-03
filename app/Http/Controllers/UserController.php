<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/18
 * Time: 9:51 AM
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {

    /*
    public function __construct() {
        $this->middleware('auth');
    }
    */

    public function get() {
        $users = User::all();
        return view('admin.user', ['users' => $users]);
    }

    /**
     * Returns the view containing the form to create a new user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getNew() {
        return view('admin.newUser');
    }

    public function createUser(Request $request) {
        $data = $request->all();

        echo "<pre>";

        // validate the submitted form data
        $validate = Validator::make($data, [
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|max:50',
            'last_name' => 'required|string|max:50',
            'username' => 'required|string|max:50|min:4',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validate->fails()) {
            return redirect('/admin/user/new')
                ->withErrors($validate)
                ->withInput();
        } else {
            $newUser = new User;
            $newUser->first_name = $data['first_name'];
            $newUser->middle_name = $data['middle_name'];
            $newUser->last_name = $data['last_name'];
            $newUser->username = $data['username'];
            $newUser->email = $data['email'];
            $newUser->password = Hash::make($data['password']);
            $newUser->save();

            // redirect to contact form with success message
            $success = 'User: ' .$data['username']. ', has been successfully created!';

            $request->session()->flash('success', $success);
            return redirect('/admin/user/new');
        }
    }
}