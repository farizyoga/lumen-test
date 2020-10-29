<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SecureController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function profile(Request $request)
	{
        $user = User::where('token', $request)->get();
        if ($user) {
              $res['success'] = true;
              $res['message'] = $user;
        
              return response($res);
        }else{
          $res['success'] = false;
          $res['message'] = 'Cannot find user!';
        
          return response($res);
        }
	}
}