<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SecureController extends Controller
{
	public function profile(Request $request)
	{
		$user = Auth::user();
		
		return response()->json([
			'status' => 'success',
			'data'  => $user
		],200);
	}
}