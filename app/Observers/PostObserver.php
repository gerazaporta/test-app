<?php

namespace App\Observers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostObserver
{
    /**
     * Handle the post "creating" event.
     *
     * @param  Post  $post
     * @return void
     */
    public function creating(Post $post)
    {
        /** @var User $authUser */
        $authUser = Auth::user();
        $post->user_id = $authUser->getAuthIdentifier();
    }
}
