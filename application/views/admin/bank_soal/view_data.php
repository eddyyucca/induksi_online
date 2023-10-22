<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Validasi Data Karyawan</a></li>
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
                             <li><?php echo $api_data['nik'] ?></li>
                             <li><?php echo $api_data['nama'] ?></li>
                             <li><?php echo $api_data['nama_jab'] ?></li>
                            </div>
                                  <div class="col-xl-4 mb-3">
                                        <div class="example">
                                            <p class="mb-1">Date Range Pick</p>
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
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