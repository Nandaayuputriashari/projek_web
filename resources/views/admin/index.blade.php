 @extends('admin.admin_master')
 @section('admin')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-4 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-primary-light rounded w-90 h-60 mx-auto">
								<i class="text-primary mr-0 font-size-40 mdi mdi-account-multiple"></i>
							</div>
							<div>
								<p class="text-mute mt-70 mb-0 font-size-16">Data Bayi</p>
								<h3 class="text-dark mb-0 font-weight-500">1500</i></small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-warning-light rounded w-90 h-60 mx-auto">
								<i class="text-warning mr-0 font-size-40 mdi mdi-car"></i>
							</div>
							<div>
								<p class="text-mute mt-70 mb-0 font-size-16">Form Pendataan</p>
								<h3 class="text-dark mb-0 font-weight-500">3400</i></small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-6">
					<div class="box overflow-hidden pull-up hov-rs">
						<div class="box-body text-center">							
							<div class="icon bg-info-light rounded w-90 h-60 mx-auto">
								<i class="text-info mr-0 font-size-40 mdi mdi-sale"></i>
							</div>
							<div>
								<p class="text-mute mt-70 mb-0 font-size-16">Penimbangan</p>
								<h3 class="text-dark mb-0 font-weight-500">50%</i></small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-13 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">
								Grafik Bayi
							</h4>
						</div>
						<div class="box-body py-0">
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="box no-shadow mb-0">
										<div class="box-body px-0">
											<div class="d-flex justify-content-start align-items-center">
												<div>
													<div id="chart41"></div>
												</div>
												<div>
													<h5>Bayi</h5>
													<h4 class="text-dark my-0 font-weight-500">$39k</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="box no-shadow mb-0">
										<div class="box-body px-0">
											<div class="d-flex justify-content-start align-items-center">
												<div>
													<div id="chart42"></div>
												</div>
												<div>
													<h5>Posyandu</h5>
													<h4 class="text-dark my-0 font-weight-500">$24k</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="charts_widget_43_chart"></div>							
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-8 col-12">
					<div class="row">						
						<div class="col-lg-7 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">	
									<div>
										<h2 class="text-dark mb-0 font-weight-500">18.8k</h2>
										<p class="text-mute mb-0 font-size-20">Total users</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue1"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">	
									<div>
										<h2 class="text-dark mb-0 font-weight-500">35.8k</h2>
										<p class="text-mute mb-0 font-size-20">Average reach per post</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue2"></div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!--- <div class="col-xxxl-6 col-xl-5 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Recent Stats</h4>
						</div>
						<div class="box-body">
							<div id="recent_trend"></div>
						</div>
					</div>
				</div> ---->
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  @endsection