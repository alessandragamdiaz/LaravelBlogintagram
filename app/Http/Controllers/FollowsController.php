<?php


namespace App\Http\Controllers;

use  App\Models\User;

use Illuminate\Http\Request;

class FollowsController extends Controller
{

public function __construct()
{
$this->middleware('auth');/**  accesibilidad  para usuarios que estan registrados  only  */

}

    public function store(User $user)
    {


          return auth()->user()->following()->toggle($user->profile);
    }
}
