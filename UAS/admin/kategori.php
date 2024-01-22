<?php require_once 'header.php' ?>

<div class="col-12">
    <div class="bg-white p-3">
    <h3>Kategori</h3>
    <?php 
        require_once '../include/koneksi.php';
        $sql = 'SELECT * FROM kategori';
        $query = mysqli_query($conn, $sql);
    ?>

    <a href="kategori-form.php" class="btn btn-primary mb-3">Tambah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">kategori</th>
                <th class="text-center">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($result = mysqli_fetch_assoc($query)) {
                    echo '<tr>';
                        echo '<td class="text-center">'.$result['id'].'</td>';
                        echo '<td>'.$result['Kategori'].'</td>';
                        echo '<td class="text-center">
                            <a href="kategori-form.php?id='.$result['id'].'" class="btn btn-warning btn-sm">EDIT</a>
                            <a href="kategori-delete.php?id='.$result['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini ? \');">DELETE</a>
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
    $('.menu-kategori').addClass('active');
</script>

