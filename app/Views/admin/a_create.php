<?= $this->extend('admin/layout/app') ?>

<?= $this->section('content') ?>
<div class="content-body">
    <!-- Basic form layout section start -->
    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title " id="basic-layout-form"> <i class="icon-head"></i> Biodata Create</h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <form class="form" action="/admin/biodata/store" method="POST" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="companyName">NIK</label>
                                        <input type="text" id="nik" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" placeholder="Company Name" name="nik" value="<?= old('nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik'); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">First Name</label>
                                                <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="f_name" value="<?= old('f_name'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput2">Last Name</label>
                                                <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="l_name" value="<?= old('l_name'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput3">E-mail</label>
                                                <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email" value="<?= old('email'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Contact Number</label>
                                                <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone" value="<?= old('phone'); ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput3">Tempat / Tgl Lahir</label>
                                                <input type="text" id="projectinput3" class="form-control" placeholder="Tempat" name="tempat" value="<?= old('tempat'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="timesheetinput3">-</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="date" id="timesheetinput3" class="form-control" placeholder="Tanggal Lahir" name="lahir" value="<?= old('lahir'); ?>">
                                                    <div class="form-control-position">
                                                        <i class="icon-calendar5"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput5">Jenis Kelamin</label>
                                                <select id="projectinput5" name="gender" class="form-control" value="<?= old('gender'); ?>">
                                                    <option value="none" selected="" disabled="">--Chose One--</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput6">Falkutas</label>
                                                <select id="projectinput6" name="fakultas" class="form-control" value="<?= old('fakultas'); ?>">
                                                    <option value="0" selected="" disabled="">--Chose One--</option>
                                                    <option value="Teknik">Teknik</option>
                                                    <option value="Komputer">Komputer</option>
                                                    <option value="Sastra">Sastra</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="projectinput8">Alamat</label>
                                        <textarea id="projectinput8" rows="5" class="form-control" name="alamat" placeholder="Alamat"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Select Avatar Profile</label>
                                    <label id="projectinput7" class="file center-block <?= ($validation->hasError('avatar')) ? 'is-invalid' : ''; ?>">
                                        <input name="avatar" type="file" id="file">
                                        <span class="file-custom"></span>
                                    </label>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('avatar'); ?>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="icon-cross2"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icon-check2"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>












    </section>
    <!-- // Basic form layout section end -->
</div>
<?= $this->endSection() ?>