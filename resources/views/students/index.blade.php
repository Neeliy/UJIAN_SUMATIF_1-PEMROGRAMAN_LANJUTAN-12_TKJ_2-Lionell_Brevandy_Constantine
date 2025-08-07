<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .card-siswa {
            border: 1.5px solid #e5e7eb;
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 4px 16px #e0e0e0;
            transition: box-shadow 0.2s, border 0.2s;
            width: 100%;
            max-width: 320px;
            margin-left: auto;
            margin-right: auto;
        }

        .card-siswa:hover {
            border-color: #2563eb;
            box-shadow: 0 8px 24px #c7d2fe;
        }

        .foto-siswa {
            border-radius: 50%;
            border: 2px solid #e5e7eb;
            background: #f3f4f6;
            width: 90px;
            height: 90px;
            object-fit: cover;
            margin-bottom: 12px;
        }

        .badge {
            display: inline-block;
            background: #dbeafe;
            color: #2563eb;
            font-size: 0.85rem;
            font-weight: 500;
            border-radius: 8px;
            padding: 2px 10px;
            margin-right: 6px;
            margin-bottom: 6px;
        }

        .btn-profile {
            display: block;
            width: 100%;
            background: #f3f4f6;
            color: #2563eb;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 0;
            text-align: center;
            margin-top: 18px;
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
            border: none;
        }

        .btn-profile:hover {
            background: #2563eb;
            color: #fff;
        }
    </style>
</head>

<body class="bg-gray-100">
    <h1 class="text-3xl font-bold mt-10 mb-10 text-center text-gray-800">Daftar Siswa</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 px-4 pb-16">
        @foreach($students as $student)
            <div class="card-siswa flex flex-col items-center p-8">
                <img src="{{ $student['foto'] }}" alt="foto" class="foto-siswa">
                <div class="font-bold text-lg text-gray-800 mb-1">{{ $student['nama'] }}</div>
                <div class="text-gray-500 text-sm mb-2">{{ '@' . $student['username'] }}</div>
                <div class="flex flex-wrap justify-center mb-2">
                    <span class="badge">{{ $student['kelas'] }}</span>
                    <span class="badge">{{ $student['hobi'] }}</span>
                </div>
                <div class="text-gray-700 text-sm text-center mb-2">{{ $student['deskripsi'] }}</div>
                <a href="{{ url('/students/' . $student['id']) }}" class="btn-profile">Lihat Profil</a>
            </div>
        @endforeach
    </div>
</body>

</html>