<?php

namespace glado\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginCtrl extends Controller
{
  public function login(Request $request) {

      $user = Sentinel::forceAuthenticate($request->all());

      if(Sentinel::getUser()->roles()->first()->slug == 'admin'){
        return redirect('/system/manage/bookings');
      } elseif (Sentinel::getUser()->roles()->first()->slug == 'departmental') {
        return redirect('/client/mybookings');
      } else {
        return redirect('/');
      }

    }
    
    public function logout() {
      Sentinel::logout();

      return redirect('/');
    }
}
