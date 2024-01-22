<?php 
require_once 'header.php';
require_once '../include/koneksi.php'; 

?>

<?php 
    if(isset($_GET['id'])) {
        $sql= "SELECT * FROM ormawa WHERE id='".$_GET['id']."'";
        $query= mysqli_query($conn, $sql);
        $ormawa= mysqli_fetch_assoc($query);
    }
?>

<div class="col-12">
    <div class="bg-white p-3">
        <h3>Form Ormawa</h3>
        <form method="post" enctype="multipart/form-data">
            <?php
                if(isset($_GET['id'])) {
                    echo '<input type="hidden" value="'.$_GET['id'].'">';
                }

            ?>

            <div class="mb-3">
                <input type="text" name="nama" placeholder="Nama Ormawa" class="form-control" value="<?= isset($_GET['id']) ? $ormawa['nama_ormawa'] : ''; ?>" required>
            </div>

            
            <div class="mb-3">
                <select class="form-select" name="id_kategori" required>
                    <option value="">-- Pilih Kategori --</option>
                    <?php 
                        $sql_kat= 'SELECT * FROM kategori';
                        $query_kat= mysqli_query($conn, $sql_kat);
                        while ($result_kat = mysqli_fetch_assoc($query_kat)) {
                            ?>
                                <option value="<?= $result_kat['id'] ?>"<?= isset($_GET['id']) ? ($result_kat['id'] == $ormawa['id_kategori'] ? 'selected' : '') : '' ?>> <?= $result_kat['Kategori'] ?>
                                </option>
                            <?php
                            echo '';  
                        }
                    ?>
                </select>
            </div>
            
            <div class="mb-3">
                <textarea class="form-control"  name="keterangan" rows="3" placeholder="Keterangan Ormawa" required><?= isset($_GET['id']) ? $ormawa['keterangan_ormawa'] : ''; ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Logo Ormawa</label>
                <?= isset($_GET['id']) ? '<div class="mb-3"><img src="'.$ormawa['gambar'].'" width="100px"></div>' : ''; ?>
                <input type="file" name="gambar" class="form-control" required>
            </div>


        <a class="btn btn-success" href="ormawa.php">Kembali</a>
        <button class="btn btn-primary"type="submit">Simpan</button>

            

        </form>
    </div>
</div>

<?php 

    if(sizeof($_POST) > 0) {
        if(isset($_POST['id'])) {
            $tmp_dir = $_FILES['gambar']['tmp_name'];
            $target_dir = '../img/'.$_FILES['gambar']['name'].'';
            move_uploaded_file($tmp_dir, $target_dir);
            $sql = "UPDATE ormawa SET nama='".$_POST['nama_ormawa']."', keterangan='".$_POST['keterangan_ormawa']."', gambar='".$target_dir."', id_kategori='".$_POST['id_kategori']."'  WHERE id='".$_POST['id']."'";
        } else {
            $tmp_dir = $_FILES['gambar']['tmp_name'];
            $target_dir = '../img/'.$_FILES['gambar']['name'].'';
            move_uploaded_file($tmp_dir, $target_dir);
            $sql = "INSERT INTO ormawa VALUES ('', '".$_POST['nama']."', '".$_POST['keterangan']."', '".$target_dir."', '".$_POST['id_kategori']."')";

        }
        //if($query = mysqli_query($conn, $sql)) {
        //    header('Location : ormawa.php');
        //} else {
        //   echo '<script>alert("proses Gagal!");</script>';
        //}
    }

?>


<?php require_once 'footer.php' ?>

<script type="text/javascript">
    $('.nav-link').removeClass('active');
    $('.menu-ormawa').addClass('active');
</script>