<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
        return response() -> json([
            'data' => User::get(),
            'message' => 'success'
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        try{
            return response() -> json([User::findOrFail($id)]);
        } catch (\Exception $e) {
            return response() -> json([
                'data' => [],
                'message' => $e -> getMessage()
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
