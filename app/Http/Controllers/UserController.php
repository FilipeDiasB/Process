<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create($request->all());

        $file     = $request->file('file');

        if ($request->hasFile('file') && $file->isValid()) {
            $name      = $file->hashName();

            $upload = $request->file->storeAs('users', $name);

            if (!$upload) {
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload do documento')
                    ->withInput();
            }
        }

        return redirect()->back()->with('success', 'Usuário criado com sucesso');
    }

    public function listagem()
    {
        $users = User::query()
                     ->where('user_permission_id', '=', 3)
                     ->paginate(6);

        return view('users.listing-table', compact('users'));
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user = User::where('id', $id)->first();

        return view('users.show', compact('user'));
    }

    public function download($id)
    {
        $path = User::find($id, 'file')->get();
        return response()->download(storage_path('users/' . $path));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
