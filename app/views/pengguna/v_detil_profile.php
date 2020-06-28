<div class="judul">
    <h4><a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>


<div class="row">
  <div class="column">
        <div class="data-table">
            <div class="navigasi">
            <?php Flasher::flash(); ?>
                <div class="gaya-form">
                    <form action="<?= BASEURL; ?>/Pengguna/ubahProfile/<?= $data['data_pengguna']['nik'] ?>" method="post">
                        <label for="nama">
                            <span>NIK<span class="required">*</span></span>
                            <input type="text" class="input-text" name="nik" value="<?= $data['data_pengguna']['nik'] ?>" disabled/>
                        </label>
                        <label for="nama">
                            <span>NAMA LENGKAP<span class="required">*</span></span>
                            <input type="text" class="input-text" name="nama" value="<?= $data['data_pengguna']['nama'] ?>" disabled/>
                        </label>
                        <label for="jk">
                            <span>JENIS KELAMIN</span>
                            <select name="jk" class="select-field" disabled>
                                <option value="<?= $data['data_pengguna']['jk'] ?>"><?php if ($data['data_pengguna']['jk'] == "L") { echo "Laki - Laki";} else { echo "Perempuan";} ?></option>
                                <option value="L">Laki - laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </label>
                        <label for="unit">
                            <span>UNIT<span class="disabled">*</span></span>
                            <input type="text" class="input-text" name="unit" value="<?= $data['data_pengguna']['unit'] ?>" disabled/>
                        </label>
                        <label for="jabatan">
                            <span>JABATAN<span class="disabled">*</span></span>
                            <input type="text" class="input-text" name="jabatan" value="<?= $data['data_pengguna']['jabatan'] ?>" disabled/>
                        </label>
                        <label for="email">
                            <span>EMAIL<span class="disabled">*</span></span>
                            <input type="email" class="input-text" name="email" value="<?= $data['data_pengguna']['email'] ?>" disabled/>
                        </label>
                        <label for="username">
                            <span>USERNAME<span class="disabled">*</span></span>
                            <input type="text" class="input-text" name="username" value="<?= $data['data_pengguna']['username'] ?>" disabled/>
                        </label>
                        <!-- <label for="pass">
                            <span>PASSWORD<span class="disabled">*</span></span>
                            <input type="password" class="input-text" name="pass" value="<?= $data['data_pengguna']['password'] ?>" disabled/>
                        </label> -->
                        <input type="hidden" class="input-text" name="role_user" value="<?= $data['data_pengguna']['role_user'] ?>" disabled/>
                        <label for="no_hp">
                            <span>NO HANDPHONE<span class="disabled">*</span></span>
                            <input type="number" class="input-text" name="no_hp" value="<?= $data['data_pengguna']['no_hp'] ?>" disabled/>
                        </label>
                        
                        <label><span> </span><input type="submit" value="UBAH DATA"><a href="<?= BASEURL; ?>/Pengguna/ubahPass/<?= $data['data_pengguna']['nik'] ?>">UBAH PASSWORD</a></label>
                        
                    </form>
                </div>
            </div>
        </div>
  </div>
  <div class="column">
        <div class="data-table">
            <div class="mainPesan2">
                <table class="fl-table">
                    <thead>
                    <tr>
                        <th>Pengirim</th>
                        <th>Subjek</th>
                        <th>Tanggal Pesan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ( $data['data_pesan'] as $pesan ) : ?>
                    <tr>
                        <td><a class="pesan-masuk" href="<?= BASEURL; ?>/pesan/detilPesan/<?= $pesan['id_pesan'] ?>"><?= $pesan['nama'] ?></td>
                        <td><a class="pesan-masuk" href="<?= BASEURL; ?>/pesan/detilPesan/<?= $pesan['id_pesan'] ?>"><?= $pesan['subjek'] ?></td>
                        <td><?= $pesan['tgl_kirim'] ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/pesan/hapusPesanMasuk/<?= $pesan['id_pesan'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <tbody>
                </table>
            </div>    
        </div>
  </div>
</div>


