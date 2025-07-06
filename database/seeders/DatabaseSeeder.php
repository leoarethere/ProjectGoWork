<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Faker\Factory as Faker;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Pastikan Anda memanggil model User

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Inisialisasi Faker untuk data format Indonesia
        $faker = Faker::create('id_ID');

        // --- Data Pengguna ---
        // User::create([
        //     'name' => 'Admin GoWork',
        //     'username' => 'admin_gowork', // Harus unik
        //     'slug' => 'admin-gowork', // Slug untuk URL
        //     'usia' => 30,
        //     'alamat' => $faker->address,
        //     'no_telepon' => $faker->phoneNumber,
        //     'email' => 'admin@gowork.test',
        //     'password' => bcrypt('password'), // Password terenkripsi
        //     'role_pengguna' => 1, // 1 = Admin
        //     'status_akun' => true,
        //     'foto' => 'https://i.pravatar.cc/150?u=admin@gowork.test',
        // ]);

        // Ganti blok User::create() untuk admin
        User::updateOrCreate(
            ['username' => 'admin_gowork'], // Cari user dengan username ini
            [ // Jika tidak ada, buat dengan data ini. Jika ada, update dengan data ini.
                'name' => 'Admin GoWork',
                'slug' => 'admin-gowork',
                'usia' => 30,
                'alamat' => $faker->address,
                'no_telepon' => $faker->phoneNumber,
                'email' => 'admin@gowork.test',
                'password' => bcrypt('password'),
                'role_pengguna' => '1',
                'status_akun' => true,
                'foto' => 'https://i.pravatar.cc/150?u=admin@gowork.test',
            ]
        );

        User::create([
            'name' => 'PT Mencari Cinta Sejati',
            'username' => 'pt_mencaricintasejati',
            'slug' => 'pt-mencari-cinta-sejati', // Slug untuk URL
            'usia' => null, // Usia bisa dikosongkan untuk perusahaan
            'alamat' => $faker->address,
            'no_telepon' => $faker->phoneNumber,
            'email' => 'hrd@mencaricintasejati.com',
            'password' => bcrypt('password'), // Password terenkripsi
            'role_pengguna' => 2, // 2 = Perusahaan
            'status_akun' => true,
            'foto' => 'https://placehold.co/400x400/9747FF/FFFFFF?text=TM', // Placeholder logo
        ]);

        User::create([
            'name' => 'PT Maju Mundur',
            'username' => 'pt_majumundur',
            'slug' => 'pt-maju-mundur', // Slug untuk URL
            'usia' => null, // Usia bisa dikosongkan untuk perusahaan
            'alamat' => $faker->address,
            'no_telepon' => $faker->phoneNumber,
            'email' => 'hrd@majumundur.com',
            'password' => bcrypt('password'), // Password terenkripsi
            'role_pengguna' => 2, // 2 = Perusahaan
            'status_akun' => true,
            'foto' => 'https://placehold.co/400x400/9747FF/FFFFFF?text=TM', // Placeholder logo
        ]);
        
        User::create([
            'name' => 'Citra Lestari',
            'username' => 'citra_lestari', // Harus unik
            'slug' => 'citra-lestari', // Slug untuk URL
            'usia' => 22,
            'alamat' => $faker->address,
            'no_telepon' => $faker->phoneNumber,
            'email' => 'citra.lestari@example.com',
            'password' => bcrypt('password'), // Password terenkripsi
            'role_pengguna' => 3, // 3 = Pencari Kerja
            'status_akun' => true,
            'foto' => 'https://i.pravatar.cc/150?u=citra.lestari@example.com',
        ]);

        // --- Data Kategori ---
        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);
        Category::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan'
        ]);

        $category = Category::where('slug', 'programming')->first();
        $imageUrl = "https://source.unsplash.com/600x400/?{$category->name}";
        
        // --- Data Artikel ---
        Post::create([
            'category_id' => 1, // Teknologi
            'user_id' => 1, // Admin GoWork
            // 'author' => 'Admin GoWork',
            'title' => 'Perkembangan Teknologi Terkini',
            'slug' => 'perkembangan-teknologi-terkini',
            'status' => 'published',
            'visibility' => 'public',
            'language' => 'id',
            'excerpt' => 'Artikel ini membahas perkembangan teknologi terkini yang mempengaruhi kehidupan sehari-hari.',
            'body' => 'Teknologi terus berkembang dengan pesat. Dalam artikel ini, kita akan membahas beberapa perkembangan teknologi terkini yang sangat mempengaruhi kehidupan sehari-hari. Dari kecerdasan buatan hingga Internet of Things, teknologi telah mengubah cara kita berinteraksi, bekerja, dan hidup. Mari kita eksplorasi lebih dalam tentang bagaimana teknologi ini memengaruhi berbagai aspek kehidupan kita.',
            'image' => $imageUrl,
            'published_at' => now(),
        ]);
        Post::create([
            'category_id' => 2, // Programming
            'user_id' => 1, // Admin GoWork
            // 'author' => 'Admin GoWork',
            'title' => 'Panduan Pemrograman untuk Pemula',
            'slug' => 'panduan-pemrograman-untuk-pemula',
            'status' => 'published',
            'visibility' => 'public',
            'language' => 'id',
            'excerpt' => 'Artikel ini memberikan panduan dasar pemrograman untuk pemula.',
            'body' => 'Pemrograman adalah keterampilan yang sangat berharga di era digital ini. Dalam artikel ini, kita akan membahas dasar-dasar pemrograman, termasuk bahasa pemrograman yang populer, konsep dasar seperti variabel, kontrol alur, dan fungsi. Dengan pemahaman yang baik tentang dasar-dasar ini, Anda akan siap untuk memulai perjalanan Anda dalam dunia pemrograman.',
            'image' => $imageUrl,
            'published_at' => now(),
        ]);
        Post::create([
            'category_id' => 3, // Kesehatan
            'user_id' => 1, // Admin GoWork
            // 'author' => 'Admin GoWork',
            'title' => 'Tips Menjaga Kesehatan Mental',
            'slug' => 'tips-menjaga-kesehatan-mental',
            'status' => 'published',
            'visibility' => 'public',
            'language' => 'id',
            'excerpt' => 'Artikel ini memberikan tips untuk menjaga kesehatan mental di tengah kesibukan sehari-hari.',
            'body' => 'Kesehatan mental sama pentingnya dengan kesehatan fisik. Dalam artikel ini, kita akan membahas beberapa tips untuk menjaga kesehatan mental, seperti pentingnya istirahat yang cukup, berolahraga secara teratur, dan menjaga hubungan sosial yang sehat. Dengan menjaga kesehatan mental, kita dapat meningkatkan kualitas hidup dan produktivitas kita.',
            'image' => $imageUrl,
            'published_at' => now(),
        ]);
        Post::create([
            'category_id' => 4, // Pendidikan
            'user_id' => 2, // PT Mencari Cinta Sejati
            // 'author' => 'HRD Mencari Cinta Sejati',
            'title' => 'Pentingnya Pendidikan di Era Digital',
            'slug' => 'pentingnya-pendidikan-di-era-digital',
            'status' => 'published',
            'visibility' => 'public',
            'language' => 'id',
            'excerpt' => 'Artikel ini membahas pentingnya pendidikan di era digital dan bagaimana teknologi dapat meningkatkan proses pembelajaran.',
            'body' => 'Pendidikan adalah fondasi utama dalam membangun masyarakat yang maju. Di era digital ini, teknologi telah membawa perubahan besar dalam cara kita belajar dan mengajar. Dalam artikel ini, kita akan membahas pentingnya pendidikan di era digital, termasuk penggunaan teknologi dalam pembelajaran, akses ke sumber daya pendidikan online, dan bagaimana teknologi dapat meningkatkan pengalaman belajar.',
            'image' => $imageUrl,
            'published_at' => now(),
        ]);

        Post::factory(50)->create();
        
    }
}
