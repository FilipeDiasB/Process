<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Company;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function cadastrar()
    {
        $companies   = Company::all();
        $departments = Department::all();

        return view('derpartments.create', compact('companies', 'departments'));
    }

    public function store(DepartmentRequest $request)
    {
        $department = Department::find($request->company)->first();

        if (!empty($request->department) && is_array($request->department)) {
            $department->companies()->syncWithoutDetaching($request->department);
        } else {
           $department = Department::create($request->validated());
           $department->companies()->attach($request->company);
        }

        return redirect()->back()->with('success', 'Setor cadastrado com sucesso!');
    }
}
