<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function select()
    {
        return view('branch.select');
    }

    public function setBranch(Request $request)
    {
        $request->validate([
            'branch' => 'required',
        ]);

        // Simpan cabang ke dalam session
        session(['branch' => $request->branch]);

        return redirect()->route('dashboard');
    }
}
