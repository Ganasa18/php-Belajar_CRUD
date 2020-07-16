 <div class="container">
   <br>
   <br>
   <br>
   <br>
   <div class="row-mt-3">
     <div class="col-md-8 mx-auto">
       <div class="card mt-5">
         <div class="card-header">
           Form Ubah Data Mahasiswa
         </div>
         <div class="card-body">
           <form action="" method="post">
             <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
             <div class="form-group">
               <label for="nama">Nama</label>
               <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
             </div>
             <div class="form-group">
               <label for="nim">NIM</label>
               <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim" value="<?= $mahasiswa['nim']; ?>">
             </div>
             <div class="form-group">
               <label for="email">E-mail</label>
               <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="<?= $mahasiswa['email']; ?>">
             </div>
             <div class="form-group">
               <label for="jurusan">Jurusan</label>
               <select class="form-control" id="jurusan" name="jurusan">
                 <?php foreach ($jurusan as $j) : ?>
                   <?php if ($j == $mahasiswa['jurusan']) : ?>

                     <option value="<?= $j; ?>" selected><?= $j; ?></option>
                   <?php else : ?>
                     <option value="<?= $j; ?>"><?= $j; ?></option>
                   <?php endif; ?>
                 <?php endforeach; ?>
               </select>
             </div>
             <button type="submit" name="ubahsiswa" class="btn btn-success float-right">Ubah Data</button>
             <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
 </div>