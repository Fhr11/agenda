<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Absen</title>
    <style>
        /* Reset dan Font */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
        }

        /* Header */
        .content-header {
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        
        .content-header h1 {
            font-size: 2.5em;
            margin: 0;
        }
        
        /* Container Utama */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            background-color: #31363F;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Gambar */
        .image-container {
            margin-bottom: 20px;
            transition: transform 0.3s ease-in-out;
        }

        .image-container img {
            width: 180px;
            height: 180px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .image-container:hover img {
            transform: scale(1.05);
        }

        /* Paragraf */
        .text-container p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #e2e8f0;
            text-align: left;
            max-width: 600px;
        }

        /* Highlight */
        .highlight {
            color: #38bdf8;
            font-weight: bold;
        }

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            gap: 5px;
        }

        .breadcrumb li {
            color: #007bff;
        }

        .breadcrumb li::after {
            content: ">";
            margin-left: 5px;
            color: #333;
        }

        .breadcrumb li:last-child::after {
            content: "";
        }

    </style>
</head>
<body>
    <div class="content-wrapper">
        <div class="container">
            <div class="image-container">
                <img src="smakju.jpeg" alt="SMKN 1 CIANJUR">
            </div>
            <div class="text-container">    
                <p>Selamat datang di <span class="highlight">Dashboard Absen SMKN 1 Cianjur</span>! Kami hadir untuk membantu Anda memantau kehadiran siswa dengan cara yang <span class="highlight">mudah</span>, <span class="highlight">cepat</span>, dan <span class="highlight">akurat</span>. Dashboard ini dirancang khusus agar Anda dapat mengelola data kehadiran siswa secara efektif dan efisien. Pastikan Anda rutin memeriksa data untuk menjaga akurasi dan ketepatan informasi. Bersama-sama, kita wujudkan kehadiran siswa yang optimal dan mendukung kesuksesan belajar mereka. <span class="highlight">Selamat bekerja</span> dan semoga hari Anda menyenangkan! Terima kasih telah menjadi bagian dari kemajuan sekolah ini!</p>
            </div>
        </div>
    </div>
</body>
</html>
