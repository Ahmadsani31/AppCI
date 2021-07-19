<?= $this->extend('admin/layout/app'); ?>

<?= $this->section('content'); ?>

<div class="content-body">
    <!-- Basic Tables start -->

    <!-- Responsive tables start -->
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Responsive tables</h4>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                            <li><a href="/admin/create" class="btn btn-success"><i class="icon-plus"></i> Add New</a>
                            </li>
                        </ul>
                    </div>
                    <div class="heading-elements">
                    </div>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block card-dashboard">
                        <div class="table-responsive">
                            <table class="table" id="tableData">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>email</th>
                                        <th>alamat</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Responsive tables end -->
</div>





<?= $this->endSection(); ?>