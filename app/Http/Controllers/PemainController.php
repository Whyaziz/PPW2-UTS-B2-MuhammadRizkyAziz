<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class PemainController extends Controller
{
    public function index()
    {
        $pemain = Pemain::all(); // Mengambil semua data pemain dari tabel pemain
        return view('pemain.index', compact('pemain')); // Menampilkan data pemain ke view
    }
}
