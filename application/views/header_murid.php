<div id='container-side'>
  <div id='side'>
    <div class='title'>
      <h1>Sistem Sekolah</h1>
    </div>
    <div class='profile'>
      <div class="foto" style="background-image: url(<?php echo $data['foto']; ?>);"></div>
      <a>Nama Murid : <?php echo $data['nama_murid']; ?></a><br>
      <a>Nisn : <?php echo $data['nis'] ?></a>
    </div>
    <div class='navigation'>
      <ul>
        <li><a href='<?php echo base_url('index.php/beranda'); ?>'>Beranda</a></li>
        <li><a href='<?php echo base_url('index.php/beranda/presensi'); ?>'>Presensi</a></li>
        <li><a href='<?php echo base_url('index.php/beranda/nilai'); ?>'>Nilai</a></li>
		<li><a href='<?php echo base_url('index.php/beranda/guru'); ?>'>Lihat Guru pengajar</a></li>
		<li><a href='<?php echo base_url('index.php/beranda/pelajaran'); ?>'>Mata Pelajaran</a></li>
        <li><a href='<?php echo base_url('index.php/beranda/logout'); ?>'>Keluar</a></li>
      </ul>
    </div>
  </div>
</div>
<div id='header'>
  <div class='foto' style="background-image: url(<?php echo base_url('images/Trigonometri.png'); ?>)">
    <h2>SMAN 2 Bandung</h2>
  </div>
</div>
