<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/18
 * Time: 9:51 AM
 */

namespace App\Http\Controllers;


class CommentController extends Controller {

    public function get() {
        return view('admin.comment');
    }
}