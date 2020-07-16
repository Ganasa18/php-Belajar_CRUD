 <div class="container">
   <br>
   <br>
   <br>
   <br>
   <div class="row-mt-3">
     <div class="col-md-8 mx-auto">
       <div class="card mt-5">
         <div class="card-header">
           Form Ubah Data Dosen
         </div>
         <div class="card-body">
           <form action="" method="post">
             <input type="hidden" name="id" value="<?= $dosen['id']; ?>">
             <div class="form-group">
               <label for="nama">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" value="<?= $dosen['nama']; ?>">
             </div>
             <div class="form-group">
               <label for="nim">Kode</label>
               <input type="text" class="form-control" id="nim" name="kd" value="<?= $dosen['kd']; ?>">
             </div>
             <div class="form-group">
               <label for="email">E-mail</label>
               <input type="email" class="form-control" id="email" name="email" value="<?= $dosen['email']; ?>">
             </div>
             <div class="form-group">
               <label for="jurusan">Matakuliah</label>
               <select class="form-control" id="matakuliah" name="matakuliah">
                 <?php foreach ($matakuliah as $m) : ?>
                   <?php if ($m == $dosen['matakuliah']) : ?>

                     <option value="<?= $m; ?>" selected><?= $m; ?></option>
                   <?php else : ?>
                     <option value="<?= $m; ?>"><?= $m; ?></option>
                   <?php endif; ?>
                 <?php endforeach; ?>
               </select>
             </div>
             <button type="submit" name="ubahdosen" class="btn btn-success float-right">Ubah Data</button>
             <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
 </div>