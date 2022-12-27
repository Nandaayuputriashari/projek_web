@extends('admin.admin_master')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Tambah Data Bayi</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{route('bayi.store')}}">
						@csrf
                        <!--end row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>NIK Bayi <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="nik" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
                            <!--end basic select-->	
                            
                            <!--end colmd6-->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Nama Bayi<span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="nama" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							
							
                            <!--end colmd6-->
						</div>
                        <!--END row select-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>NIK Ibu <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="nik_ibu" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
                            <!--end basic select-->	
                            
                            <!--end colmd6-->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Nama Ibu<span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="nama_ibu" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							
							
                            <!--end colmd6-->
						</div>
                        <div class="row">
						<!-- <div class="col-md-6">
								<div class="form-group">
									<h5>NIK Ibu <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="alamat" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div> -->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Tanggal Lahir <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="date" name="tgl_lahir" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
						</div>
                        <!--end row-->
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Submit</button>
						</div>
						
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<script src="{{asset('backend/js/pages/form-validation.js')}}"></script>