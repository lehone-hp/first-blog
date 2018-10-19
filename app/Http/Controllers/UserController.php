<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/18
 * Time: 9:51 AM
 */

namespace App\Http\Controllers;


use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {

    /*
    public function __construct() {
        $this->middleware('auth');
    }
    */

    public function get() {
        $users = User::where('voided', false)->get();
        $authUser = Auth::user();
        return view('admin.user', ['users' => $users, 'authUser' => $authUser]);
    }

    /**
     * Returns the view containing the form to create a new user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getNew() {
        // get logged in user
        $user = Auth::user();

        // Check if the current user is a Member and whether he wrote the post
        if ($user->role->role == 'Member') {
            \Illuminate\Support\Facades\Request::session()->flash('error', 'Sorry! you do not have permission to create a new user');
            return redirect('/admin/user');
        }

        $roles = Role::orderBy('role', 'desc')->get();
        return view('admin.newUser', ['roles' => $roles]);
    }

    /**
     * Create a new User
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createUser(Request $request) {
        $data = $request->all();

        // validate the submitted form data
        $validate = Validator::make($data, [
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|max:50',
            'last_name' => 'required|string|max:50',
            'username' => 'required|string|max:50|min:4',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required',
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
            $newUser->role_id = $data['role'];
            $newUser->voided = false;
            $newUser->password = Hash::make($data['password']);
            $newUser->save();

            // redirect to contact form with success message
            $success = 'User: ' . $data['username'] . ', has been successfully created!';

            $request->session()->flash('success', $success);
            return redirect('/admin/user/new');
        }
    }

    /**
     * Void an existing User
     */
    public function voidUser($id) {
        $user = User::find($id);

        // get logged in user
        $loggedUser = Auth::user();

        // Check if the current logged in user is an admin
        if ($loggedUser->role->role == 'Member') {
            \Illuminate\Support\Facades\Request::session()->flash('error', 'Sorry! you do not have permission to delete this user');
            return redirect('/admin/user');
        }

        $user->voided = true;
        $user->password = "";
        $user->update();

        // redirect to contact form with success message
        $success = 'Post successfully deleted!';

        \Illuminate\Support\Facades\Request::session()->flash('success', $success);
        return redirect('/admin/user');

    }

    /**
     * Render form to edit user's profile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($id) {
        $user = User::find($id);

        // get logged in user
        $loggedUser = Auth::user();

        // Check if the current logged in user is the same as that of the account to be edited
        if ($loggedUser->id != $user->id) {
            \Illuminate\Support\Facades\Request::session()->flash('error', 'Sorry! you do not have permission to edit this account');
            return redirect('/admin/user');
        }

        return view('admin.editProfile', ['user' => $user]);
    }

    public function addUserTest() {
        $roles = Role::orderBy('role', 'desc')->get();
        return view('admin.newUser', ['roles' => $roles]);
    }
}
