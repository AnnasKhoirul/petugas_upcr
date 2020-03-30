<div class="modal fade" id="Ajudan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Create Petugas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                    <div class="container-fluid">
                        <form action="../../model/Validate.php?aksi1=tambahJabatan" method="post">
                            <!-- Form Start -->
                            <div class="form-group row"><label class="col-lg-2 col-form-label">Ajudan</label>
                                <div class="col-lg-10">
                                <select name="ajudan" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Ajudan">
                                <?php foreach ($tampil_kelasU as $dataK): $cek = $_SESSION['kel'];?>
                                    <?php if ($dataK['kelas']==$cek): ?>
                                        <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"<?php if ($dataK['nama'] == $tampil_jabatan[0]['pemimpin']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['kompi_1']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['kompi_2']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['kompi_3']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['bendera1']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['bendera2']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['bendera3']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['uud']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['pancasila']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['protokol']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['ajudan']): ?> disabled
                                        <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['dirigen']): ?> disabled
                                         <?php elseif ($dataK['nama'] == $tampil_jabatan[0]['doa']): ?> disabled
                                        <?php endif ?>><?php echo $dataK['nama']; ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                                </select>
                                 <?php $tgl=$_GET['tgl'] ?>
                                <input type="hidden" name="tgl" value="<?php echo $tgl; ?>">
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>