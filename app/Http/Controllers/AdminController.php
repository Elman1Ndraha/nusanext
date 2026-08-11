<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    /**
     * Menampilkan dashboard admin.
     */
    public function dashboard()
    {
        $data = [
            'total_users' => $this->getUserCount(),
            'admin_users' => $this->getAdminCount(),
        ];

        return view('admin.dashboard', compact('data'));
    }

    protected function getUserCount(): int
    {
        try {
            return (int) \App\Models\User::count();
        } catch (\Throwable $e) {
            return 0;
        }
    }

    protected function getAdminCount(): int
    {
        try {
            return (int) \App\Models\User::where('role', 'admin')->count();
        } catch (\Throwable $e) {
            return 0;
        }
    }
}
