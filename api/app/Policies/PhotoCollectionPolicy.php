<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PhotoCollection;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotoCollectionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the photoCollection can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list photocollections');
    }

    /**
     * Determine whether the photoCollection can view the model.
     */
    public function view(User $user, PhotoCollection $model): bool
    {
        return $user->hasPermissionTo('view photocollections');
    }

    /**
     * Determine whether the photoCollection can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create photocollections');
    }

    /**
     * Determine whether the photoCollection can update the model.
     */
    public function update(User $user, PhotoCollection $model): bool
    {
        return $user->hasPermissionTo('update photocollections');
    }

    /**
     * Determine whether the photoCollection can delete the model.
     */
    public function delete(User $user, PhotoCollection $model): bool
    {
        return $user->hasPermissionTo('delete photocollections');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete photocollections');
    }

    /**
     * Determine whether the photoCollection can restore the model.
     */
    public function restore(User $user, PhotoCollection $model): bool
    {
        return false;
    }

    /**
     * Determine whether the photoCollection can permanently delete the model.
     */
    public function forceDelete(User $user, PhotoCollection $model): bool
    {
        return false;
    }
}
