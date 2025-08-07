<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'id' => 1,
                'username' => 'andi_tkj',
                'nama' => 'Andi Pratama',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Futsal',
                'foto' => 'https://i.pinimg.com/736x/ff/85/85/ff85851ab789b4b5a2528731d903c525.jpg',
                'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
            ],
            [
                'id' => 2,
                'username' => 'bella_code',
                'nama' => 'Bella Arumsari',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Ngoding',
                'foto' => 'https://i.pinimg.com/1200x/16/fd/eb/16fdeb437d2dd01df0908eb50427f06d.jpg',
                'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
            ],
            [
                'id' => 3,
                'username' => 'cika_dance',
                'nama' => 'Cika Ramadhani',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Menari',
                'foto' => 'https://i.pinimg.com/1200x/c1/c6/43/c1c643e082eadefa1a23a1657673641a.jpg',
                'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
            ],
            [
                'id' => 4,
                'username' => 'dani_design',
                'nama' => 'Dani Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Desain Grafis',
                'foto' => 'https://i.pinimg.com/736x/08/04/12/080412a588a7091610d7fad3565fa4a5.jpg',
                'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
            ]
        ];

        return view('students.index', compact('students'));
    }
    public function show($id)
    {
        $students = [
            [
                'id' => 1,
                'username' => 'andi_tkj',
                'nama' => 'Andi Pratama',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Futsal',
                'foto' => 'https://i.pinimg.com/736x/ff/85/85/ff85851ab789b4b5a2528731d903c525.jpg',
                'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
            ],
            [
                'id' => 2,
                'username' => 'bella_code',
                'nama' => 'Bella Arumsari',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Ngoding',
                'foto' => 'https://i.pinimg.com/1200x/16/fd/eb/16fdeb437d2dd01df0908eb50427f06d.jpg',
                'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
            ],
            [
                'id' => 3,
                'username' => 'cika_dance',
                'nama' => 'Cika Ramadhani',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Menari',
                'foto' => 'https://i.pinimg.com/1200x/c1/c6/43/c1c643e082eadefa1a23a1657673641a.jpg',
                'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
            ],
            [
                'id' => 4,
                'username' => 'dani_design',
                'nama' => 'Dani Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Desain Grafis',
                'foto' => 'https://i.pinimg.com/736x/08/04/12/080412a588a7091610d7fad3565fa4a5.jpg',
                'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
            ]
        ];

        // Cari siswa berdasarkan id
        $student = collect($students)->firstWhere('id', $id);

        if (!$student) {
            abort(404);
        }

        return view('students.show', compact('student'));
    }
}