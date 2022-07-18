<div class="container mx-auto">
    <div class=" mx-auto p-2" style="width: 450px;">

    <h3>Ubah Data Karyawan</h3>
    
    <form action="" method="post"  enctype="multipart/from-data" class="border shadow p-3 mb-5 bg-body rounded-2 mt-2">
        <div class="row p-3">
           <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors()?>
            </div>
            <?php endif;?>
            <div class="col-6">
                <label for="">ID</label><br>
                <input type="text" name="id" readonly value="<?= $Menu['id']?>">

                <label for="">Nama</label><br>
                <input type="text" name="nama" value="<?= $Menu['name']?>">

                <label for="">Qty</label><br>
                <input type="text" name="qty" value="<?= $Menu['qty']?>">

                <label for="">Price</label><br>
                <input type="text" name="price" value="<?= $Menu['price']?>">
        </div>

        <button type="submit" class="btn btn-success mt-2">Ubah</button>
    </form>
    </div>
</div>