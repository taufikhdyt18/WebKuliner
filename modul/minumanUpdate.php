<?php 
require "includes/config.php"; 

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_minuman WHERE id_minuman=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) { 
    die("Data tidak ditemukan...");
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        text-align: center; /* Semua elemen di tengah */
        background: linear-gradient(to bottom, #9523C5, #000000); /* Gradasi ungu ke hitam */
        color: white; /* Warna teks putih untuk kontras */
    }

    table {
        margin: 20px auto; /* Tabel di tengah halaman */
        border-collapse: collapse;
        width: 50%; /* Lebar tabel */
        background-color: rgba(255, 255, 255, 0.1); /* Transparan putih untuk kontras */
        border-radius: 8px; /* Sudut tabel membulat */
        overflow: hidden; /* Hilangkan bagian luar radius */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Bayangan untuk efek mengambang */
    }

    th {
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.5); /* Latar belakang gelap transparan */
        color: #ffffff; /* Warna emas untuk judul */
    }

    td {
        padding: 8px;
        text-align: left; /* Teks dalam sel tabel rata kiri */
        color: white; /* Warna teks putih */
    }

    input[type="text"], input[type="submit"], input[type="reset"], input[type="button"] {
        padding: 8px;
        margin: 5px 0;
        width: 90%; /* Lebar input seragam */
        border-radius: 4px;
        border: none;
    }

    input[type="submit"], input[type="reset"], input[type="button"] {
        cursor: pointer;
        background-color: #9523C5; /* Warna ungu untuk tombol */
        color: white; /* Warna teks putih */
        border: none;
        border-radius: 4px;
    }

    input[type="button"] {
        background-color: #000000; /* Warna hitam untuk tombol cancel */
    }

    input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover {
        opacity: 0.8; /* Efek hover */
    }

    th u {
        text-decoration: underline;
    }
</style>
<table>
    <tr>
        <th colspan="3"><u>Update Data Daftar Minuman</u></th>
    </tr>
    <form method="post" action="?page=minumanUpdateProses">
        <!-- Menampung nilai id yang akan di-edit -->
        <input type="hidden" name="id" value="<?= htmlspecialchars($data['id_minuman']) ?>" />

        <tr>
            <td style="width: 8em;">Nama Minuman</td>
            <td>:</td>
            <td>
                <input type="text" name="nama_minuman" style="width: 20em;" 
                       value="<?= htmlspecialchars($data['nama_minuman']) ?>">
            </td>
        </tr>
        <tr>
            <td style="width: 8em;">Daerah Minuman</td>
            <td>:</td>
            <td>
                <input type="text" name="daerah_minuman" style="width: 20em;" 
                       value="<?= htmlspecialchars($data['daerah_minuman']) ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td colspan="3" style="padding: 0.5em;">
                <input type="submit" name="update" value="Update"> 
                <input type="button" value="Cancel" 
                       onClick="document.location='?page=minuman'">
            </td>
        </tr>
    </form>
</table>
