<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

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
