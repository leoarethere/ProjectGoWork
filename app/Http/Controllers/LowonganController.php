// app/Http/Controllers/Perusahaan/LowonganController.php
namespace App\Http\Controllers\Perusahaan;

use App\Http\Controllers\Controller;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LowonganController extends Controller
{
    // Menampilkan semua lowongan milik perusahaan yang sedang login [cite: 344]
    public function index()
    {
        $perusahaan = Auth::user()->perusahaan;
        $lowongans = $perusahaan->lowongans()->latest()->get();
        return view('perusahaan.lowongan.index', compact('lowongans'));
    }

    // Menampilkan form untuk membuat lowongan baru
    public function create()
    {
        return view('perusahaan.lowongan.create');
    }

    // Menyimpan lowongan baru ke database [cite: 341]
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'tipe_pekerjaan' => 'required|string',
            'gaji' => 'nullable|numeric',
        ]);

        Auth::user()->perusahaan->lowongans()->create($request->all());

        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit lowongan
    public function edit(Lowongan $lowongan)
    {
        // Pastikan perusahaan hanya bisa mengedit lowongannya sendiri
        abort_if($lowongan->perusahaan_id !== Auth::user()->perusahaan->id, 403);
        
        return view('perusahaan.lowongan.edit', compact('lowongan'));
    }

    // Memperbarui lowongan di database [cite: 343]
    public function update(Request $request, Lowongan $lowongan)
    {
        abort_if($lowongan->perusahaan_id !== Auth::user()->perusahaan->id, 403);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string|max:255',
            'tipe_pekerjaan' => 'required|string',
            'gaji' => 'nullable|numeric',
        ]);

        $lowongan->update($request->all());

        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil diperbarui.');
    }

    // Menghapus lowongan dari database [cite: 342]
    public function destroy(Lowongan $lowongan)
    {
        abort_if($lowongan->perusahaan_id !== Auth::user()->perusahaan->id, 403);
        
        $lowongan->delete();
        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil dihapus.');
    }
}