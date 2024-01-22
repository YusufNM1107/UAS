<?php require_once 'header.php' ?>

<div class="col-12">
    <div class="bg-white p-3">
    <h3>Ormawa</h3>
    <?php 
        require_once '../include/koneksi.php';
        $sql = 'SELECT a.*, b.kategori FROM ormawa a JOIN Kategori b ON a.id_kategori=b.id';
        $query = mysqli_query($conn, $sql);
    ?>

    <a href="ormawa-form.php" class="btn btn-primary mb-3">Tambah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">kategori</th>
                <th class="text-center">Nama Ormawa</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($result = mysqli_fetch_assoc($query)) {
                    echo '<tr>';
                        echo '<td class="text-center">'.$result['id'].'</td>';
                        echo '<td>'.$result['kategori'].'</td>';
                        echo '<td>'.$result['nama_ormawa'].'</td>';
                        echo '<td>'.$result['keterangan_ormawa'].'</td>';
                        echo '<td class="text-center"><img src="'.$result['gambar'].'" width="100px"></td>';
                        echo '<td class="text-center">
                            <a href="ormawa-form.php?id='.$result['id'].'" class="btn btn-warning btn-sm">EDIT</a>
                            <a href="ormawa-delete.php?id='.$result['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini ? \');">DELETE</a>
                        </td>';
                        
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>

    </div>
</div>

<?php require_once 'footer.php' ?>

<script type="text/javascript">
    $('.nav-link').removeClass('active');
    $('.menu-ormawa').addClass('active');
</script>

