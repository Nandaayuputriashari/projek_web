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
			  <h4 class="box-title">Tambah Data</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{route('penimbangan.store')}}">
						@csrf
						<div class="row">
						<div class="col-md-6">
								<div class="form-group">
									<h5>Id Penimbangan <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="id_penimbangan" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							<!--end basic select-->
							
							<!-- end colmd6 -->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Id Bayi <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="bayi_id" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							<!-- end colmd6 -->

                            <!-- end colmd6 -->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Id Posyandu <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="posyandu_id" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							<!-- end colmd6 -->

                            <!-- end colmd6 -->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Tinggi Badan <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="tinggi_badan" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							<!-- end colmd6 -->

                            <!-- end colmd6 -->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Berat Badan <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="berat_badan" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							<!-- end colmd6 -->

                            <!-- end colmd6 -->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Posisi <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="posisi" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							<!-- end colmd6 -->

                            <!-- end colmd6 -->
							<div class="col-md-6">
								<div class="form-group">
									<h5>Umur <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="umur" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
							<!-- end colmd6 -->
						</div>
                        <!-- END ROW select -->
						<div class="row">
						<div class="col-md-6">
								<div class="form-group">
									<h5>Tanggal Pemeriksaan <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="date" name="tanggal_pemeriksaan" class="form-control" required data-validation-required-message="This field is required"> </div>
									<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
								</div>
							</div>
						</div>
						<!-- end row -->
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