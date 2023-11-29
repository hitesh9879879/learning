<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Reseller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function create(Request $request)
    {

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'contact' => 'required',
        //     'address' => 'required',
        //     'gender' => 'required',
        //     'overview' => 'required',
        //     'role_type' => 'required',
        // ]);

        $role = $request->input('role_type');

        if ($role == 1) {
            $lastId = Reseller::create([
                'address' => $request->input('address'),
                'gender' => $request->input('gender'),
            ]);
            $roleType = Reseller::class;
        } else {
            $lastId = Supplier::create([
                'address' => $request->input('address'),
                'gender' => $request->input('gender'),
            ]);
            $roleType = Supplier::class;
        }

        $users = Data::create([
            'user_name' => $request->input('name'),
        ]);

        return redirect()->back()->with(['success' => 'User Data Saved..']);

    }

    public function show()
    {
        $user = Data::get();

        return view('view', compact('user'));
    }

    public function view($user)
    {
        $dataview = Data::find($user);

        return view('show', ['dataview' => $dataview]);
    }
}
