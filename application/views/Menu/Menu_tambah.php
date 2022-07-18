

<div class="container mx-auto">
    <div class=" mx-auto p-2" style="width: 450px;">

    <h3>Tambah Data Menu</h3>
    
    <form action="" method="post"  enctype="multipart/from-data" class="border shadow p-3 mb-5 bg-body rounded-2 mt-2">
        <div class="row p-3">
           
            <div class="col-6">
                <label for="">Nama</label><br>
                <input type="text" name="nama"><br>
                <div class="form-text text-danger"><?=form_error('nama')?></div>

                <label for="">Qty</label><br>
                <input type="text" name="qty"><br>
                <div class="form-text text-danger"><?=form_error('qty')?></div>
            
                <label for="">Price</label><br>
                <input type="text" name="price"><br>
                <div class="form-text text-danger"><?=form_error('price')?></div>

               
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-2">Tambah</button>
    </form>
    </div>
</div>