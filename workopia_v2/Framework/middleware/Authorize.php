<?php

namespace Framework\Middleware;

use Framework\Session;

class Authorize
{
  //check if the user is loged in
  public function isAuthenticated()
  {
    return Session::has('user');
  }

  // handle the user request
  public function handle($role)
  {
    if ($role === 'guest' && $this->isAuthenticated()) {
      return redirect('/');
    } elseif ($role === 'auth' && !$this->isAuthenticated()) {
      return redirect('/auth/login');
    }
  }
}
