<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Throwable;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
       return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {




        try {
            $rules = [
                'name' => ['required', 'string', 'max:191'],

                'email' => ['required', 'email', 'unique:users'],
                'password' => ['required', 'confirmed', 'string'],
            ];


            $validatedData = Validator::make($request->all(), $rules)->validate();

            $user = new User();

           $user->fill($validatedData);

           $user->save();




           return redirect()->route('login');

        } catch (Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()->with([
                'status' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }

    public function createLogin(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    public function postLogin(Request $request): RedirectResponse
    {
        try {
            $rules = [
                'email' => ['required', 'email'],
                'password' => ['required', 'string']
            ];

            $validatedData = Validator::make($request->all(), $rules)->validate();



            $user = User::where('email', $validatedData['email'])->first();



            if (auth()->attempt($validatedData)) {
                return redirect()->route('user-dashboard');
            }

            return back()->with([
                'status' => 'success',
                'message' => "Wrong Credentials",
            ]);

        } catch (Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()->with([
                'status' => 'success',
                'message' => $exception->getMessage()
            ]);
        }
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
