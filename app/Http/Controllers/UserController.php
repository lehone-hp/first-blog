<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/18
 * Time: 9:51 AM
 */

namespace App\Http\Controllers;


class UserController extends Controller {

    public function get() {
        return view('admin.user');
    }

    public function getNew() {
        return view('admin.newUser');
    }
}