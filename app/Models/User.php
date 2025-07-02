// app/Models/User.php
namespace App\Models;

use App\Models\Lamaran;
use App\Models\Perusahaan;
use App\Models\PencariKerja;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // ... (fillable, hidden, casts arrays)

    public function perusahaan()
    {
        return $this->hasOne(Perusahaan::class);
    }

    public function pencariKerja()
    {
        return $this->hasOne(PencariKerja::class);
    }

    public function lamarans()
    {
        return $this->hasMany(Lamaran::class);
    }

    public function lowonganDilamar()
    {
        return $this->belongsToMany(Lowongan::class, 'lamarans');
    }
}