<div class="container">
    <div class="row mt-2">
        <div class="col-md-4">
        <div class="card text-center">
            <div class="card-header">
                Form Tambah Data 
            </div>
            <form method="post" action="">
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama </label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="mb-2">
                    <label for="asal" class="form-label">Umur</label>
                    <input type="text" name="umur" class="form-control" id="umur">
                </div>
                <div class="mb-2">
                    <label for="asal" class="form-label">Kota</label>
                    <input type="text" name="kota" class="form-control" id="kota">
                </div>
                <div class="card-body">
                    <button type="submit" name="add" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo validation_errors(); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
