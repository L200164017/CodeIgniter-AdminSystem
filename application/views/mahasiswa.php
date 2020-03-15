<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Mahasiswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Mahasiswa</li>
      </ol>
    </section>


    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
        <a class="btn btn-success" href="<?php echo base_url('mahasiswa/print'); ?>"><i class="fa fa-print"></i > Print</a>
        
        <div class="dropdown inline">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-download"></i > Export
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="<?php echo base_url('mahasiswa/pdf'); ?>"> <i class="fa fa-file"></i > Export PDF</a></li>
              <li><a href="<?php echo base_url('mahasiswa/excel'); ?>"> <i class="fa fa-file"></i > Export Excel</a></li>
              
            </ul>
      </div>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>NAMA MAHASISWA</th>
                <th>NIM</th>
                <th>TANGGAL LAHIR</th>
                <th>JURUSAN</th>
                <th colspan="2">AKSI</th>
            </tr>

            <?php

                $no = 1;
                foreach ($mahasiswa as $mhs) : ?> 
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $mhs->nama ?></td>
                        <td><?php echo $mhs->nim ?></td>
                        <td><?php echo $mhs->tgl_lahir ?></td>
                        <td><?php echo $mhs->jurusan ?></td>
                        <td><?php echo anchor('mahasiswa/detail/'.$mhs->id,'<div class="btn btn-success"><i class="fa fa-search-plus"> Detail</i></div>')?></td>
                        <td onclick="javascript: return confirm('Anda yakin hapus?') "><?php echo anchor('mahasiswa/hapus/'.$mhs->id,'<div class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></div>') ?></td>
                        <td><?php echo anchor('mahasiswa/edit/'.$mhs->id,'<div class="btn btn-primary"><i class="fa fa-edit"> Edit</i></div>')?></td>

                    </tr>
                <?php endforeach ?>

            
    
        </table>
    
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                   <?php echo form_open_multipart('mahasiswa/tambah_aksi'); ?>
                      <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" name="nama" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Jurusan</label>
                        <select name="jurusan" class="form-control">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        
                        </select>
                        <!-- <input type="text" name="jurusan" class="form-control"> -->
                      </div>

                      

                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>No Telp.</label>
                        <input type="text" name="no_telp" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="foto" class="form-control">
                      </div>

                      <button type="reset" class="btn btn-secondary">Reset</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    
                    
                  <?php echo form_close(); ?>
      </div>
      <!-- <div class="modal-footer">
        
      </div> -->
    </div>
  </div>
</div>

</div>