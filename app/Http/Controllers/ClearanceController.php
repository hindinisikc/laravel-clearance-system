<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use App\Models\ClearanceRequest;


class ClearanceController extends Controller
{
    public function create()
    {
        $departments = Department::all();
        $employees = User::where('is_supervisor', false)->get();
        $supervisors = User::where('is_supervisor', true)->get();

        return view('clearance-form', compact('departments', 'employees', 'supervisors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'user_id' => 'required|exists:users,id',
            'supervisor_id' => 'required|exists:users,id',
        ]);

        ClearanceRequest::create([
            'user_id' => $request->user_id,
            'supervisor_id' => $request->supervisor_id,
            'department_id' => $request->department_id,
            'date_submitted' => now(),
        ]);

        return redirect('/')->with('success', 'Clearance request submitted successfully!');
    }
}
