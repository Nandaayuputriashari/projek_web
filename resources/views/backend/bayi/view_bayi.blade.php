@extends('admin.admin_master')


@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Table Data Bayi</h3>
                  <a href="{{route('bayi.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Mahasiswa</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>NIK Bayi</th>
								<th>Nama Bayi</th>
								<th>Nama Ibu</th>
								<th>NIK Ibu</th>
								<th>Tanggal Lahir</th>
								<th colspan="3">Aksi</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allDataBayi as $key => $bayi)
							<tr>
								<td>{{$bayi->id_bayi}}</td>
								<td>{{$bayi->name_bayi}}</td>
								<td>{{$bayi->nik_ibu}}</td>
								<td>{{$bayi->name_ibu}}</td>
								<td>{{$bayi->tgl_lahir}}</td>
								<td>
									
                                    <a href="{{route('bayi.edit', $bayi->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('bayi.delete', $bayi->id)}}" id="delete" class="btn btn-danger">Delete</a>
                                </td>
								
							</tr>
                            @endforeach
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								
							</tr>
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<!-- Vendor JS -->	
	<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/data-table.js')}}"></script>