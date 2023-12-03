<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ContactMessages;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactMessagesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the contactMessages can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list allcontactmessages');
    }

    /**
     * Determine whether the contactMessages can view the model.
     */
    public function view(User $user, ContactMessages $model): bool
    {
        return $user->hasPermissionTo('view allcontactmessages');
    }

    /**
     * Determine whether the contactMessages can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create allcontactmessages');
    }

    /**
     * Determine whether the contactMessages can update the model.
     */
    public function update(User $user, ContactMessages $model): bool
    {
        return $user->hasPermissionTo('update allcontactmessages');
    }

    /**
     * Determine whether the contactMessages can delete the model.
     */
    public function delete(User $user, ContactMessages $model): bool
    {
        return $user->hasPermissionTo('delete allcontactmessages');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete allcontactmessages');
    }

    /**
     * Determine whether the contactMessages can restore the model.
     */
    public function restore(User $user, ContactMessages $model): bool
    {
        return false;
    }

    /**
     * Determine whether the contactMessages can permanently delete the model.
     */
    public function forceDelete(User $user, ContactMessages $model): bool
    {
        return false;
    }
}
