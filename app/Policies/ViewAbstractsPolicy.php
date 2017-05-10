<?php

namespace App\Policies;

use App\User;
use App\Submission;
use Illuminate\Auth\Access\HandlesAuthorization;

class ViewAbstractsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the submission.
     *
     * @param  \App\User  $user
     * @param  \App\Submission  $submission
     * @return mixed
     */
    public function view(User $user, Submission $submission)
    {
        return $submission->user_id == $user->is_admin;
    }

    /**
     * Determine whether the user can create submissions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the submission.
     *
     * @param  \App\User  $user
     * @param  \App\Submission  $submission
     * @return mixed
     */
    public function update(User $user, Submission $submission)
    {
        //
    }

    /**
     * Determine whether the user can delete the submission.
     *
     * @param  \App\User  $user
     * @param  \App\Submission  $submission
     * @return mixed
     */
    public function delete(User $user, Submission $submission)
    {
        //
    }
}
