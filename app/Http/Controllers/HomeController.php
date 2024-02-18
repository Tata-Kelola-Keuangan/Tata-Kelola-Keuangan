<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Perencanaan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function admin(): View
    {
        $totalUsers = User::count();
        $totalPegawais = Pegawai::count();
        $totalPerencanaan = Perencanaan::count();
        // $totalPelaksanaan = Pelaksanaan::count();

        return view('admin.dashboard', compact('totalUsers', 'totalPegawais', 'totalPerencanaan'));
    }

    public function index()
    {
        return view('home');
    }
}
