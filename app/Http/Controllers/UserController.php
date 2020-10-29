<?php
namespace App\Http\Controllers;

use App\User;
use App\Phone;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    public function showAllUsers()
    {
        // dd("test");
        return response()->json(User::all());
    }

    public function showOneUser($id)
    {
        //dd($id);
        return response()->json(User::find($id));
    }

    public function showRelationUser($phone)
    {
        //dd($id);
        return response()->json(User::find($id));
    }

}
