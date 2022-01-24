<div class="container">
    <div>
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    Data Siswa
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead></thead>

                                <tbody>
                                    <tr>
                                        <td width="15%">Nama</td>
                                        <td><?= $siswa->nama; ?></td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td><?= $siswa->nisn; ?></td>
                                    </tr>
                                    <tr>
                                        <td>NIS</td>
                                        <td><?= $siswa->nis; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td><?= $siswa->nama_kelas; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tahun</td>
                                        <td><?= $siswa->tahun; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <?= $title; ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>Nominal</th>
                                    <th>Tanggal Bayar</th>
                                    <th>keterangan</th>
                                    <th>Makan</th>
                                    <th>Listrik</th>
                                    <th>Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($pembayaran as $sis) {
                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $sis->bulan; ?></td>
                                        <td><?= $sis->tahun; ?></td>
                                        <td><?= 'Rp ' . number_format($sis->nominal); ?></td>
                                        <td><?= $sis->tgl_bayar; ?></td>
                                        <td><?= $sis->keterangan; ?></td>
                                        <td>
                                            <div class="form-check">
                                                <input <?= $sis->keterangan == 'Lunas' ? 'disabled' : '' ?> name="makan" class="form-check-input makan" type="checkbox" value="<?= $sis->id_pembayaran ?>" id="makan<?= $sis->id_pembayaran ?>" <?= $sis->makan == 'true' ? 'checked' : ''  ?>>
                                                <label class="form-check-label" for="makan<?= $sis->id_pembayaran ?>">
                                                    Ya
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input <?= $sis->keterangan == 'Lunas' ? 'disabled' : '' ?> name="listrik" class="form-check-input listrik" type="checkbox" value="<?= $sis->id_pembayaran ?>" id="listrik<?= $sis->id_pembayaran ?>" <?= $sis->listrik == 'true' ? 'checked' : ''  ?>>
                                                <label class="form-check-label" for="listrik<?= $sis->id_pembayaran ?>">
                                                    Ya
                                                </label>
                                            </div>
                                        </td>
                                        <td><?= $sis->nama_petugas; ?></td>
                                        <td align="center">
                                            <?php if ($sis->keterangan == 'Lunas') { ?>
                                                <p>-</p>
                                            <?php } else { ?>
                                                <a href="#" id="bayarSpp" data-id="<?= $sis->id_pembayaran ?>" class="btn btn-primary bayarSpp">Bayar</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                            </tbody>
                        <?php $i++;
                                } ?>
                        </table>
                    </div>
                </div>

























            </div>
        </div iv>