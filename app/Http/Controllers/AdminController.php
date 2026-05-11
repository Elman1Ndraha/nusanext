<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    /**
     * Menampilkan dashboard admin
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        // Data untuk dashboard, bisa ditambahkan nanti
        $data = [
            'total_users' => \App\Models\User::count(), // Contoh: jumlah user
            'admin_users' => \App\Models\User::where('role', 'admin')->count(), // Jumlah admin
        ];

        return view('admin.dashboard', compact('data')); // Return view admin dashboard
    }
}
