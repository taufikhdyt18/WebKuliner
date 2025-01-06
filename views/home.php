<?php
// home.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama - Daftar Kuliner Tradisional</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center; /* Elemen berada di tengah */
            background: linear-gradient(to bottom, #9523C5, #000000); /* Gradasi ungu ke hitam */
            color: white; /* Warna teks putih untuk kontras */
        }

        .welcome-message {
            text-align: center;
            font-size: 28px;
            margin: 20px 0;
            font-weight: bold;
            color: #FFD700; /* Warna emas untuk pesan sambutan */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); /* Efek bayangan */
        }

        .image-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 20px auto;
            max-width: 1200px;
            gap: 10px; /* Jarak antar gambar */
        }

        .image-container img {
            width: 30%; /* Lebar gambar agar 3 per baris */
            height: 270px;
            object-fit: cover;
            border-radius: 8px; /* Sudut gambar membulat */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Bayangan gambar */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efek animasi */
        }

        .image-container img:hover {
            transform: scale(1.05); /* Perbesar gambar saat hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.7); /* Bayangan lebih besar saat hover */
        }
    </style>
</head>
<body>

    <h2 class="welcome-message">Selamat Datang di Halaman Utama Daftar Kuliner Tradisional</h2>

    <!-- Display Up to 20 Images -->
    <div class="image-container">
        <img src="https://i.pinimg.com/736x/43/3d/28/433d28c07a9b05f671d3710a90804934.jpg" alt="Image 1">
        <img src="https://i.pinimg.com/736x/97/d0/21/97d02196deea630b66f9a2002c8f6ce8.jpg" alt="Image 2">

        <img src="https://i.pinimg.com/736x/f8/3d/7b/f83d7bb619e1a09958b4a97b40a186a6.jpg" alt="Image 4">
        <img src="https://i.pinimg.com/736x/27/bf/6e/27bf6e38a69ec4fc14d1dce5f43e81e0.jpg" alt="Image 5">
        <img src="https://i.pinimg.com/736x/f8/57/9e/f8579e61dec27e9a7db79e3edf427d90.jpg" alt="Image 6">
        <img src="https://i.pinimg.com/474x/bd/8d/89/bd8d8972793480a3a5b3d622df559fdc.jpg" alt="Image 7">

        <img src="https://i.pinimg.com/236x/0e/30/27/0e3027e63c394676bb09bf2d5c69a359.jpg" alt="Image 9">
        <img src="https://i.pinimg.com/474x/fe/cf/39/fecf3979d5db81044338ceaeced2fc02.jpg" alt="Image 10">
        <img src="https://i.pinimg.com/236x/86/7e/6d/867e6dadffa90106db222db9b6b67872.jpg" alt="Image 11">
        <img src="https://i.pinimg.com/236x/43/a2/d2/43a2d2285738357d3bb922ac4ef19634.jpg" alt="Image 12">

        <img src="https://i.pinimg.com/236x/7f/3f/a4/7f3fa41445a46618ca8e5a4e229aec3e.jpg" alt="Image 14">

        <img src="https://i.pinimg.com/474x/d0/aa/52/d0aa521546872cba34257b91c71589f7.jpg" alt="Image 16">
        <img src="https://i.pinimg.com/236x/4e/98/6c/4e986c95eb1adad5cedd9b778da8b188.jpg" alt="Image 17">
        <img src="https://i.pinimg.com/236x/33/e0/6d/33e06d7b7418825bca2c2afb21a27800.jpg" alt="Image 18">
        <img src="https://i.pinimg.com/236x/cb/84/a4/cb84a4a0d02d54e7e58d5805e91da2c4.jpg" alt="Image 19">

    </div>

</body>
</html>
