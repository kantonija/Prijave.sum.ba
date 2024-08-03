<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function assignRole(Request $request, $userId)
{
    $user = User::find($userId);
    $role = Role::where('name', $request->role)->first();

    if ($user && $role) {
        $user->assignRole($role->name);
        return response()->json(['message' => 'Role assigned successfully.']);
    }

    return response()->json(['message' => 'User or role not found.'], 404);
}


    public function checkUserRole($userId, $roleName)
    {
        $user = User::find($userId);

        if ($user && $user->hasRole($roleName)) {
            return response()->json(['message' => true]);
        }

        return response()->json(['message' => false], 404);
    }


}


