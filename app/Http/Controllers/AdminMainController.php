<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/18
 * Time: 9:54 AM
 */

namespace App\Http\Controllers;


class AdminMainController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function get() {
        return view('admin.dashboard');
    }

}