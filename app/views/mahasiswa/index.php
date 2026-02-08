<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <ul>
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <li class="mb-3">
                        <?= $mhs['nama']; ?>
                        <a href="" class="badge bg-primary float-end text-decoration-none">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>