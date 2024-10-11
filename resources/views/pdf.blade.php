<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* Mengubah ke 2 kolom untuk tata letak horizontal */
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            /* Menggunakan flex untuk tata letak horizontal */
            padding: 15px;
            transition: transform 0.2s;
            align-items: center;
            /* Memusatkan item secara vertikal */
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card img {
            width: 80px;
            /* Ukuran gambar */
            height: 80px;
            /* Ukuran gambar */
            border-radius: 50%;
            /* Membuat gambar menjadi bulat */
            margin-right: 15px;
            /* Ruang di sebelah kanan gambar */
        }

        .card h3 {
            margin: 0 0 10px 0;
        }

        .card p {
            margin: 2px 0;
            /* Ruang vertikal antara paragraf */
        }

        @media print {
            body {
                margin: 0;
            }

            .container {
                grid-template-columns: repeat(1, 1fr);
                /* Set ke 1 kolom saat mencetak */
            }
        }
    </style>
</head>

<body>

    <h1>Data Mahasiswa</h1>

    <div class="container">
        @foreach ($mahasiswas as $mahasiswa)
            <div class="card">
                <img src="{{ $mahasiswa->foto_mhs ? asset('uploads/' . $mahasiswa->foto_mhs) : asset('assets/noimage.jpg') }}"
                    alt="Foto Mahasiswa">
                <div>
                    <h3>{{ $mahasiswa->nama }}</h3>
                    <p><strong>NPM:</strong> {{ $mahasiswa->npm }}</p>
                    <p><strong>Program Studi:</strong> {{ $mahasiswa->prodi }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $mahasiswa->jk }}</p>
                    <p><strong>TTL:</strong> {{ $mahasiswa->tmp_lahir }},
                        {{-- {{ \Carbon\Carbon::parse($mahasiswa->tgl_lahir)->format('d-m-Y') }}</p> --}}
                    <p><strong>Alamat:</strong> {{ $mahasiswa->alamat }}</p>
                    <p><strong>Telepon:</strong> {{ $mahasiswa->tlpn }}</p>
                    <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
                    <p><strong>Judul TA:</strong> {{ $mahasiswa->judul_ta }}</p>
                    <p><strong>Kesan:</strong> {{ $mahasiswa->kesan }}</p>
                    <p><strong>Pesan:</strong> {{ $mahasiswa->pesan }}</p>
                    <p><strong>IPK:</strong> {{ $mahasiswa->ipk }}</p>
                    <p><strong>Predikat:</strong> {{ $mahasiswa->predikat }}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
