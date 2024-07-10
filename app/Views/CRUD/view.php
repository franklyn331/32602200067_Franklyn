<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="/crud/tambah"><button class="btn-primary">Tambah Data</button></a>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Universitas</th>
                <th>No HP</th>
                <th>Action</th>
            </tr>
            <?php
            if (empty($mahasiswa)){ ?>
                <tr>
                    <td colspan="7">Tidak ada data</td>
                </tr>
                <?php } else {
                    $i = 1;
                    foreach ($mahasiswa as $a) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td></td>
                    <td><?= $a['nim']; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="action">
                        <a href="crud/hapus/<?= $a['nim']; ?>"><button class="btn-delete" onclick="return confirm('Are you sure to delete nim <?= $a['nim']?>')">Hapus</button></a>
                        <a href="crud/edit/<?= $a['nim']; ?>"><button class="btn-update">Edit</button></a>
                    </td>
                </tr>    
               <?php }
                } ?>
</main>
<?= $this->endSection() ?>
