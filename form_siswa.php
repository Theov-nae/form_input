<html>
<head>
    <title>Form Input Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post" action="proses.php">
            <table align="center">
                <tr>
                    <td></td>
                    <td></td>
                    <h1>Form Input Data Mahasiswa</h1>
                </tr>
                <tr class="form-group">
                    <td> </td>
                    <td>Nama</td>
                    <td><input type="text" name="nama" size="45" maxlength="35" /></td>
                </tr>
                <tr class="form-group">
                    <td> </td>
                    <td>NIS</td>
                    <td><input type="text" name="nis" size="45" maxlength="30" /></td>
                </tr>
                <tr class="form-group">
                    <td> </td>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas" size="45" maxlength="30" /></td>
                </tr>
                <tr class="form-group">
                    <td> </td>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir" size="45" maxlength="30" /></td>
                </tr>
                <tr class="form-group">
                    <td> </td>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" size="45" maxlength="30" /></td>
                </tr>
                <tr class="form-group">
                    <td> </td>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" size="45" maxlength="30" /></td>
                </tr>
                <tr class="form-group">
                    <td> </td>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan</td>
                </tr>
                <tr class="form-group">
                    <td> </td>
                    <td><label for="Agama"></label>Agama</td>
                    <td><select name="agama" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>    
                    </select></td>
                </tr>
                <tr class="form-group">
                    <td> </td>
                    <td> </td>
                    <td><button class="btn-submit" type="submit">Submit</button>
                        <button class="btn-reset" type="reset">Cancel</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>