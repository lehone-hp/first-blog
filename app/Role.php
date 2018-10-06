<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
     * Get the user that own this blog post.
     */
    public function users() {
        return $this->hasMany('App\User');
    }
}
