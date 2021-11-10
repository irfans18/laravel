<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortLink extends Controller
{
   public function goto($link){
      if($link == "github")
      return redirect('https://github.com/irfans18');
   }
}
