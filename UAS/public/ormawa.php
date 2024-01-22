<?php
    require_once 'header.php';
?>

<div class="row">
    <div class="col-12 p-5">
        <?php
            require_once '../include/koneksi.php';
            $sql_kat = "SELECT Kategori FROM Kategori WHERE id='".$_GET['kat']."'";
            $query_kat = mysqli_query($conn, $sql_kat);
            $result_kat = mysqli_fetch_assoc($query_kat);

        ?>
        <h1 class="display-4 mb-3">Ormawa - <?= $result_kat['Kategori'] ?> </h1>
        <div class="row">
        <?php
            $sql = "SELECT a.*, b.kategori FROM ormawa a JOIN kategori b ON a.id_kategori=b.id WHERE a.id_kategori='".$_GET['kat']."'";
            $query = mysqli_query($conn, $sql);
            while($result = mysqli_fetch_assoc($query)) {
                ?>
                    <div class="col-md-4">
                        <div class="card m-1">
                            <div class="card-body text-center">
                                <img src="<?= $result['gambar']; ?>" class="img-fluid">
                                <h5 class="text-center mb-2 mt-2"><?= $result['nama_ormawa']; ?></h5>
                                <button class="btn btn-primary btn-sm detail" data-nama_ormawa="<?= $result['nama_ormawa'] ?>" data-keterangan_ormawa="<?= $result['keterangan_ormawa'] ?>" data-img="<?= $result['gambar'] ?>" data-kategori="<?= $result['kategori'] ?>">Detail</button>
                            </div>
                        </div>
                    </div>
                <?php
            }
        ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Ormawa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modal-img" class="img-fluid">
        <h3 class="text-center mt-2" id="modal-nama"></h3>
        <div class="text-center mt-2">Kategori : <span id="modal-kategori"></span></div>
        <div class="text-center m-2" id="modal-keterangan"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        
<?php
    require_once 'footer.php';
?>

<script type="text/javascript">
    $('.nav-link').removeClass('active');
    $('.menu-ormawa').addClass('active');
    $(document).ready(function(){
        $('.detail').click(function(){
            $('#modal-img').attr('src', $(this).data('img'));
            $('#modal-nama').html($(this).data('nama_ormawa'));
            $('#modal-kategori').html($(this).data('kategori'));
            $('#modal-keterangan').html('"<em>'+$(this).data('keterangan_ormawa')+'</em>"');
            $('#modalDetail').modal('show');
        });
    })
</script>
