<!-- Proses Update -->
<?php
    $id_anggota         = $_POST['id'];
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $jk         = $_POST['jk'];
    $tpt_lahir  = $_POST['tpt_lahir'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $id_kelas      = $_POST['kelas'];
    $id_jurusan    = $_POST['jurusan'];
    $tlp        = $_POST['tlp'];
    $alamat     = $_POST['alamat'];

    $query_update = mysqli_query($konek,"UPDATE anggota SET nis                 = '$nis', 
                                                            nama                = '$nama',
                                                            jk                  = '$jk',
                                                            tempat_lahir        = '$tpt_lahir', 
                                                            tanggal_lahir       = '$tgl_lahir', 
                                                            kelas            = '$id_kelas', 
                                                            jurusan          = '$id_jurusan', 
                                                            nomor_telepon       = '$tlp', 
                                                            alamat              = '$alamat',
                                                            WHERE id    = '$id_anggota'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        header('refresh:2; URL=http://localhost/hapis/dashboard.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>