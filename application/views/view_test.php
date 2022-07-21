<div class="container-fluid">
    <div class="row mt-1">
         <h1>
            DAFTAR DATA
        </h1>
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Nama</li>
                <?php foreach ($datanya as $dtny) :?>
                <li class="list-group-item">
                    <?php echo $dtny['nama']?>
                    <a href=" <?php echo base_url();?>ctrl_test/delete/<?php echo $dtny['id_org']?>"class= "badge text-bg-danger float-end" onclick=" return confirm('Apakah Yakin?');">Hapus</a>
                    <a href=" <?php echo base_url();?>ctrl_test/update/<?php echo $dtny['id_org']?>"class= "badge text-bg-success float-end">Update</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Umur</li>
                <?php foreach ($datanya as $dtny) :?>
                <li class="list-group-item"><?php echo $dtny['umur']?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-2">
            <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Kota</li>
                <?php foreach ($datanya as $dtny) :?>
                <li class="list-group-item"><?php echo $dtny['kota']?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="row mt-1">
            <div class="col-md-5">
                <a href="<?php base_url(); ?>ctrl_test/add" class="btn btn-outline-primary">Masukkan Data Baru</a>
            </div>            
        </div>
    </div>

<?php if( $this->session->flashdata('tambah') ):?>
    <div class="row mt-2">
        <div class="col-md-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data band metal<strong> telah berhasil! </strong> <?= $this->session->flashdata('tambah');?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<?php endif;?>