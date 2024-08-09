<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman dengan Gambar Border</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .bordered-box {
            width: 80%;
            max-width: 1200px;
            padding: 20px;
            border: 20px solid transparent;
            /* Transparent border as a placeholder */
            border-image-source: url({{ asset('dist/images/backgrounds/border.png') }});
            border-image-slice: 80;
            /* Adjust based on your image */
            border-image-repeat: stretch;
            /* You can also use round or repeat */
            border-image-width: 10px;
            background-color: white;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="bordered-box">
        <h1>SURAT KELAHIRAN</h1>
        <p>Yang Bertanda tangan di bawah ini :</p>
        <p>Nama Dr / Bidan : {{ $stela->petugas }}</p>
        <p>Dengan ini menerangankan bahwa :</p>
        <p>Nama : {{ $stela->nama_ibu }}</p>
        <p>Nama Suami : {{ $stela->nama_ayah }}</p>
        <p>Alamat : {{ $stela->alamat }}</p>
        <p>Telah Melahirkan seorang anak {{ $stela->jenis_kelamin }} pada hari {{ $stela->tgl_lahir }} tgl.
            {{ $stela->tgl_lahir }} jam : {{ $stela->jam_lahir }}WIB </p>
        <p>Anak Ke-{{ $stela->anak_ke }}</p>
        <p>di RSUD Karsa Husada Batu diberi nama :</p>
        <h3>{{ $stela->nama_anak }}</h3>
        <p>Demikian surat kelahiran ini dapat dipergunakan seperlunya.</p>
        <br>
        <p>Batu, Tgl {{ \Carbon\Carbon::Now() }}</p>
        <br>
        <br>
        <br>
        <p>{{ $stela->petugas }}</p>
    </div>
</body>

</html>
