<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('with')){
            $params = explode(",",$request->get('with'));

            try{
                $users = User::with($params)->get();
                return response()->json([
                    'status' => 'success',
                    'data'  => $users
                ],200);

            }catch(\Exception $e){
                return response()->json([
                    'status' => 'error',
                    'data'  => 'model relation is not exist.'
                ],500);
            }
        }

        $users = User::all();

        return response()->json([
            'status' => 'success',
            'data'  => $users
        ],200);
        
    }

    public function view(Request $request, string $user)
    {
        $users = User::where('id', $user)->with('phone')->first();
            
        if($users){
            return response()->json([
                'status' => 'success',
                'data'  => $users
            ],200);

        }else{
            return response()->json([
                'status' => 'fail',
                'data'  => 'user not found.'
            ],404);
        }
        
    }
}
