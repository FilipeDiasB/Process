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
        $user = User::create($request->validated());

        $file = $request->file;

        if ($request->hasFile('file') && $file->isValid()) {
            $name = $file->hashName();

            $uploadPath = $request->file->storeAs('users', $name);

            if (!$uploadPath) {
                return redirect()->back();
            }
        }

        $user->update(['file' => $uploadPath]);

        return redirect()->back()->with('success', 'Usuário criado com sucesso');
    }

    public function listagem()
    {
        $users = User::query()
                     ->where('user_permission_id', '=', 3)
                     ->orderBy('created_at')
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

        return response()->json((view('users.show', compact('user')))->render());
    }

    public function download(User $user)
    {
        return response()->download(storage_path("app/{$user->file}"));
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
