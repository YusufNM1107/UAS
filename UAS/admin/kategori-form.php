<?php 
require_once 'header.php';
require_once '../include/koneksi.php'; 

?>

<?php 
    if(isset($_GET['id'])) {
        $sql= "SELECT * FROM kategori WHERE id='".$_GET['id']."'";
        $query= mysqli_query($conn, $sql);
        $kategori= mysqli_fetch_assoc($query);
    }
?>

<div class="col-12">
    <div class="bg-white p-3">
    <h3>Form Kategori</h3>
    <form method="post">
        <?php
            if(isset($_GET['id'])) {
                echo '<input type="hidden" value="'.$_GET['id'].'">';
            }

        ?>
        
        <div class="mb-3">
            <input type="text" name="kategori" placeholder="kategori" class="form-control" value="<?= isset($_GET['id']) ? $kategori['Kategori'] : ''; ?>" required>
        </div>
        <a class="btn btn-success" href="kategori.php">Kembali</a>
        <button class="btn btn-primary"type="submit">Simpan</button>
    </form>
    </div>
</div>

<?php 

    if(sizeof($_POST) > 0) {
        if(isset($_POST['id'])) {
            $sql = "UPDATE kategori SET kategori='".$_POST['kategori']."' WHERE id='".$_POST['id']."'";
        } else {
            $sql = "INSERT INTO kategori VALUES ('', '".$_POST['kategori']."')";

        }
        if($query = mysqli_query($conn, $sql)) {
            header('Location : kategori.php');
        } else {
            echo '<script>alert("proses Gagal!");</script>';
        }
    }

?>


<?php require_once 'footer.php' ?>

<script type="text/javascript">
    $('.nav-link').removeClass('active');
    $('.menu-kategori').addClass('active');
</script>