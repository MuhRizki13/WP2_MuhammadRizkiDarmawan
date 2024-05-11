<!DOCTYPE html>
<html>

<head>
    <title>Tampil Data Mahasiswa</title><br><br><br><br><br><br><br>
</head>

<body style = "background-color:grey" >
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <th>:</th>
                <td>
                    <?= isset($nama) ? htmlspecialchars($nama) : 'Data tidak tersedia'; ?>
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <?= isset($nim) ? htmlspecialchars($nim) : 'Data tidak tersedia'; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= isset($kelas) ? htmlspecialchars($kelas) : 'Data tidak tersedia'; ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= isset($tanggal) ? htmlspecialchars($tanggal) : 'Data tidak tersedia'; ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= isset($tempat) ? htmlspecialchars($tempat) : 'Data tidak tersedia'; ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= isset($alamat) ? htmlspecialchars($alamat) : 'Data tidak tersedia'; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= isset($jenis) ? htmlspecialchars($jenis) : 'Data tidak tersedia'; ?>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <?= isset($agama) ? htmlspecialchars($agama) : 'Data tidak tersedia'; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('dlemas'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
