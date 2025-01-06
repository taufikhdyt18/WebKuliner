<style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .welcome-message {
            text-align: center;
            font-size: 28px;
            margin: 20px 0;
            font-weight: bold;
        }

</style>
<table> 
    <tr> 
        <th colspan="3"><u>Tambah Data Daftar Minuman</u></th> 
    </tr> 
 
    <form method="post" action="?page=minumanAddProses"> 
 
        <tr> 
            <td style="width: 8em;">Nama Minuman</td> 
            <td>:</td> 
            <td><input type="text" name="nama_minuman" style="width: 20em;"></td> 
        </tr> 
 
        <tr> 
            <td style="width: 8em;">Daerah Minuman</td> 
            <td>:</td> 
            <td><input type="text" name="daerah_minuman" style="width: 20em;"></td> 
        </tr> 
 
        <tr style="margin-top: 1em;"> 
            <td></td> 
            <td></td> 
            <td colspan="3" style="padding: 0.5em;"> 
                <input type="submit" name="submit" value="Submit"> 
                <input type="reset" value="Reset"> 
                <input type="button" value="Cancel" 
onClick="document.location='?page=minuman'"> 
            </td> 
        </tr> 
    </form> 
</table>
