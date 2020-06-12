<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
</head>
<body>
    <table border="1 solid black">
        @forelse ($mahasiswas as $mahasiswa)
        <ol>
            <li>{{ $mahasiswa->nim }}</li>
            <li>{{ $mahasiswa->nama }}</li>
            <li>{{ $mahasiswa->ipk }}</li>
        </ol>
        @empty
        DATA TIDAK ADA
        @endforelse
    </table>
    
</body>
</html>