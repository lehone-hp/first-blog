<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    /**
     * Get the user that own this blog post.
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
