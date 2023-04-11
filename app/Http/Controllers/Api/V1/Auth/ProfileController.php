<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    //
    public function show(Request $request)
    {
        return response()->json($request->user()->only('name', 'email'));
    }
 
    public function update(ProfileUpdateRequest $request )
    {
        $user = auth()->user();
        $user->update($request->validated());
        return response()->json($user, Response::HTTP_ACCEPTED);
    }
}
