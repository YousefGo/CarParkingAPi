<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

use App\Http\Requests\PasswordUpdateRequest;
/**
 * @group Auth
 */
class PasswordUpdateController extends Controller
{
    //
    public function __invoke(PasswordUpdateRequest $request)
    {
          $user = auth()->user();
          $user['password']=Hash::make($request->input('password'));
          $user->update($request->validated());
 
        return response()->json([
            'message' => 'Your password has been updated.',
        ], Response::HTTP_ACCEPTED);
    }
}
