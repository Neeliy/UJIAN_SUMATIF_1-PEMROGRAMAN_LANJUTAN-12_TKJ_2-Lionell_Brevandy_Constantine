<!-- filepath: d:\laragon\www\UJIAN_SUMATIF_1-PEMOGRAMAN-LANJUTAN-12TKJ2-LIONELL-BREVANDY-CONSTANTINE\resources\views\students\show.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Detail Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .profile-avatar {
            border-radius: 50%;
            border: 6px solid #3b3b3b;
            background: #23272a;
            width: 180px;
            height: 180px;
            object-fit: cover;
            margin-bottom: 12px;
        }

        .badge {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            font-size: 0.85rem;
            font-weight: 500;
            border-radius: 8px;
            padding: 2px 10px;
            margin-right: 8px;
            margin-bottom: 6px;
        }

        .status {
            background: #22c55e;
            color: #fff;
            font-size: 0.85rem;
            font-weight: 600;
            border-radius: 12px;
            padding: 4px 16px;
            margin-bottom: 12px;
            display: inline-block;
        }

        .detail-label {
            color: #a1a1aa;
            font-size: 0.95rem;
        }

        .detail-value {
            color: #fff;
            font-size: 1rem;
            font-weight: 500;
        }

        .btn-profile {
            display: inline-block;
            background: #f3f4f6;
            color: #2563eb;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 24px;
            text-align: center;
            margin-top: 18px;
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
            border: none;
        }

        .btn-profile:not(:hover) {s
            background: #e5e7eb;
            color: #2563eb;
        }

        .btn-profile:hover {
            background: #2563eb;
            color: #fff;
        }

        .card-border {
            border-radius: 20px;
            box-shadow: 0 4px 24px #23232333;
        }
    </style>
</head>

<body class="bg-[#18181b] min-h-screen">
    <div class="max-w-5xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-8 text-white">Profile</h1>
        <div class="card-border bg-[#23272a] rounded-2xl shadow-lg p-10 flex flex-col md:flex-row gap-10">
            <!-- Profile Card -->
            <div class="flex flex-col items-center md:w-1/3">
                <img src="{{ $student['foto'] }}" alt="foto" class="profile-avatar">
                <div class="font-bold text-2xl text-white mb-1">{{ $student['nama'] }}</div>
                <div class="status">Siswa Aktif</div>
                <div class="text-gray-400 text-sm mb-2">{{'@' . $student['username'] }}</div>
                <div class="mb-2">
                    <span class="badge">{{ $student['kelas'] }}</span>
                    <span class="badge">{{ $student['hobi'] }}</span>
                </div>
                <div class="text-gray-300 text-md text-center mb-4">{{ $student['deskripsi'] }}</div>
                <a href="{{ url('/students') }}" class="btn-profile">← Back</a>
            </div>
            <div class="flex-1 flex flex-col justify-center">
                <h2 class="text-xl font-semibold text-white mb-6">Bio & other details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-10 mb-6">
                    <div>
                        <div class="detail-label">Role</div>
                        <div class="detail-value">Siswa</div>
                    </div>
                    <div>
                        <div class="detail-label">Level</div>
                        <div class="detail-value">Intermediate</div>
                    </div>
                    <div>
                        <div class="detail-label">Kelas</div>
                        <div class="detail-value">{{ $student['kelas'] }}</div>
                    </div>
                    <div>
                        <div class="detail-label">Hobi</div>
                        <div class="detail-value">{{ $student['hobi'] }}</div>
                    </div>
                    <div>
                        <div class="detail-label">Kota/Region</div>
                        <div class="detail-value">Indonesia</div>
                    </div>
                    <div>
                        <div class="detail-label">Status</div>
                        <div class="detail-value"><span class="status">Available</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>