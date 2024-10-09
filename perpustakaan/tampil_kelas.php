<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <h3>Tampil Kelas</h3>
        <?php
            include "database_connection.php";
            $query_kelas = mysqli_query($connection,"SELECT * FROM kelas"); ?>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Kelompok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php while ($data_kelas = mysqli_fetch_array($query_kelas)) {?>
                <tr>
                    <td><?php echo $data_kelas['id_kelas'];?></td>
                    <td><?php echo $data_kelas['nama_kelas'];?></td>
                    <td><?php echo $data_kelas['kelompok'];?></td>
                    <td>
                        <a href="edit_kelas.php?id_kelas=<?php echo $data_kelas['id_kelas'];?>">Edit</a>
                        <a href="hapus_kelas.php?id_kelas=<?php echo $data_kelas['id_kelas'];?>"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php }?>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    </body>
</html>