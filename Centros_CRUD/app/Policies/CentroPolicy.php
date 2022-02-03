<?php

namespace App\Policies;

use App\Models\Centro;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CentroPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function before(User $user)
    {
        if($user->user_role === 'admin'){
            return true;
        }
    }
    public function viewAny(User $user)
    {
        if($user->user_role === 'admin'){
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Centro $centro)
    {
        if($user->id === $centro->user_id){
            return true;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if($user->user_role !== 'viewer') {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function edit(User $user, Centro $centro)
    {
        if($user->id === $centro->user_id){
            return true;
        }
    }
    public function update(User $user, Centro $centro)
    {
        if($user->id === $centro->user_id){
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Centro $centro)
    {
        if($user->id == $centro->user_id){
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Centro $centro)
    {
        if($user->user_role === 'admin'){
            return true;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Centro  $centro
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Centro $centro)
    {
        if($user->user_role === 'admin'){
            return true;
        }
    }
}
