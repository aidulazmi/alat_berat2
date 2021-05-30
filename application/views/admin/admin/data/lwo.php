  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Local Work Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Local Work Order</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-primary"><i class="fas fa-file-import"> </i>   
                    Tambah Local Work Order</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   `id_lwo`, `id_client`, `tanggal`, `equipment`, `chasis`, `engine_model`, `engine_no`, `repair_probelem`, `componen`, `kondisi`, `saran`, `note`, `standardiameter`, `standarpanjang`, `actualdiameter`, `gambarawallwo`, `gambarakhirlwo`
                  <tr>
                    <th>ID LWO</th>
                    <th>Tanggal</th>
                    <th>Equipment</th>
                    <th>Gambar Awal LWO</th>
                    <th>Gambar Akhir LWO</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($user as $u){ ?>
                  <tr>
                    <td><?php echo $u->id_lwo ?></td>
                    <td><?php echo $u->tanggal ?></td>
                    <td><?php echo $u->equipmen ?></td>
                    <td>
                      <a href="<?=base_url()?>uploads/lwo/<?=$u->gambarawallwo;?>" data-toggle="lightbox" data-title="gambarawallwo" data-gallery="gallery" width="100%" height="100%">
                      <img src="<?=base_url()?>uploads/lwo/<?=$u->gambarawallwo;?>" width="100" height="100" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    </td>

                    <td>
                      <a href="<?=base_url()?>uploads/lwo/<?=$u->gambarakhirlwo;?>" data-toggle="lightbox" data-title="gambarakhirlwo" data-gallery="gallery" width="100%" height="100%">
                      <img src="<?=base_url()?>uploads/lwo/<?=$u->gambarakhirlwo;?>" width="100" height="100" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    </td>

                    <td>
                     <!--<a class="btn btn-info btn-sm" href="<?php echo site_url('C_admin/edit_jasa/'.$u->id_jasa);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                      </a>
                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_admin/hapus_jasa/'.$u->id_jasa);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                      </a>
                      -->
                      
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID LWO</th>
                    <th>Tanggal</th>
                    <th>Equipment</th>
                    <th>Gambar Awal LWO</th>
                    <th>Gambar Akhir LWO</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


        <!-- Tambah Kategori -->
        <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Client</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo site_url('C_admin/simpan_jasa')?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Layanan Jasa</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Layanan Jasa" name="layanan_jasa" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="form-control" id="exampleInputEmail1" placeholder="Harga" name="harga" required>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
              <button type="Submit" name="Simpan" class="btn btn-outline-light">Simpan</button>
            </div>

            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->