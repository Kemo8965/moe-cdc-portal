<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        //$request->user()->fill($request->validated());

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'nullable|email',
            'exam_number' => 'nullable|int|min:8|confirmed',
        ]);

    //      Validator::extend('nullable_email', function ($attribute, $value, $parameters, $validator) {
    //     return is_null($value) || empty($value) || filter_var($value, FILTER_VALIDATE_EMAIL);
    //     });

    //     $customMessages = [
    //         'email.nullable_email' => 'The email field must be a valid email address or empty.'
    //         // add more custom messages as needed
    //     ];

    // $validator = Validator::make($request->all(), $rules, $customMessages);

    // if ($validator->fails()) {
    //     return redirect()->back()->withErrors($validator)->withInput();
    // }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
