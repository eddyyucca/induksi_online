<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
					</ol>
                </div>
            <div class="container-fluid">
				
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Forms with icon</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="<?= base_url('admin/view_data') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Nomor Induk Karyawan</label>
                                            <div class="input-group">
												<span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Masukkan Nik Karyawan" name="nik" required>
												<div class="invalid-feedback">
													
												  </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn me-2 btn-primary">Cari</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->