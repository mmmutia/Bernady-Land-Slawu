<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = User::all();

        return new UserResource(true, 'Data Login', $login);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $this->validate($request, [
            'email' => ['required', 'string','email'],
            'password' => ['required','min:6'],
        ]);

        //cek user
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response([
                'massage' => 'Bad Credentials'
            ], 401);
        }

        //buat token untuk user
        $token = $user->createToken($user->id . '-AppToken', [
            'create',
            'read',
            'update',
            'delete',
        ])->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $login = User::find($id);

        if ($login) {
            return new UserResource(true, 'Data Login Ditemukan', $login);
        } else {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 422);
        }
        return new UserResource(true, 'Data Login', $login);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
