<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => ['required', 'string', 'max:150','regex:/^[\pL\s\-]+$/u'],
            'email' => ['required', 'string', 'email', 'max:150', 'unique:users'],
            'password' => ['required','min:8','confirmed'],
        ]);

        //simpan data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //buat token untuk user
        $token = $user->createToken($user->id.'-AppToken', [
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
        $register = User::find($id);

        if ($register) {
            return new UserResource(true, 'Data Register Ditemukan', $register);
        } else {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 422);
        }
        return new UserResource(true, 'Data Register', $register);
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
