<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/18
 * Time: 9:51 AM
 */

namespace App\Http\Controllers;


class PostController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function get() {
        return view('admin.posts');
    }

    public function getNew() {
        return view('admin.newPost');
    }
}