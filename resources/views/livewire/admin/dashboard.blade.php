@section('pageTitle', 'Dashboard')

<div class="row">
	<div class="col-md-12">
		<div class="bg-blue-50 p-4 p-md-5 position-relative overflow-hidden rounded-12 mb-4 alert alert-dismissible zIndex-0" role="alert">
			<div class="row mb-0 mb-sm-5 mb-md-0 ps-xl-3">
				<div class="col-lg-12 col-xl-8 col-xxl-4 pb-md-5 mb-md-5 mb-lg-0">
					<a href="#" class="btn btn-light btn-icon rounded-pill position-absolute top-16 end-16" data-bs-dismiss="alert" aria-label="Close">
						<svg data-name="icons/tabler/close" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16">
							<rect data-name="Icons/Tabler/Close background" width="16" height="16" fill="none"></rect>
							<path d="M.82.1l.058.05L6,5.272,11.122.151A.514.514,0,0,1,11.9.82l-.05.058L6.728,6l5.122,5.122a.514.514,0,0,1-.67.777l-.058-.05L6,6.728.878,11.849A.514.514,0,0,1,.1,11.18l.05-.058L5.272,6,.151.878A.514.514,0,0,1,.75.057Z" transform="translate(2 2)" fill="#1E1E1E"></path>
						</svg>
					</a>
					<span class="badge badge-lg badge-warning text-uppercase">Become a Pro</span>
					<h2 class="my-2">Hello, {{ auth()->user()->name }} <img src="{!! asset('backend/muze/assets/svg/icons/right-arrow.svg') !!}" class="ms-2 arrow-icon" alt="img"></h2>
				</div>
				<div class="col-lg-8">
					<div class="get-started-img">
						<img src="{!! asset('backend/muze/assets/img/get-started.png') !!}" class="img-fluid" alt="img">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12 col-xxl-8 mb-4">
		<div class="card rounded-12 shadow-dark-80 border border-gray-50">
			<div class="d-flex align-items-center px-3 px-md-4 py-3">
				<h5 class="card-header-title mb-0 ps-md-2 font-weight-semibold">Projects</h5>
				<div class="dropdown export-dropdown ms-auto pe-md-2">
					<a href="#" role="button" id="Sources" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-outline-dark text-gray-700 border-gray-700 px-3"><span>Today </span> <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
						<rect data-name="Icons/Tabler/Chevron Down background" width="13" height="13" fill="none"></rect>
						<path d="M.214.212a.738.738,0,0,1,.952-.07l.082.07L7.1,5.989a.716.716,0,0,1,.071.94L7.1,7.011l-5.85,5.778a.738.738,0,0,1-1.034,0,.716.716,0,0,1-.071-.94l.071-.081L5.547,6.5.214,1.233A.716.716,0,0,1,.143.293Z" transform="translate(13 3.25) rotate(90)" fill="#495057"></path>
					</svg>
				</a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Sources">
					<li><a class="dropdown-item" href="#"><span>Today</span></a></li>
					<li><a class="dropdown-item" href="#"><span>Yesterday</span></a></li>
					<li><a class="dropdown-item" href="#"><span>Last 7 days</span></a></li>
					<li><a class="dropdown-item" href="#"><span>This month</span></a></li>
					<li><a class="dropdown-item" href="#"><span>Last month</span></a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#"><svg data-name="icons/tabler/calendar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
						<rect data-name="Icons/Tabler/Calendar background" width="16" height="16" fill="none"></rect>
						<path d="M2.256,16A2.259,2.259,0,0,1,0,13.743V3.9A2.259,2.259,0,0,1,2.256,1.641H3.282V.616A.615.615,0,0,1,4.507.532l.005.084V1.641H9.846V.616A.615.615,0,0,1,11.071.532l.006.084V1.641H12.1A2.259,2.259,0,0,1,14.359,3.9v9.846A2.259,2.259,0,0,1,12.1,16ZM1.231,13.743a1.027,1.027,0,0,0,1.025,1.026H12.1a1.027,1.027,0,0,0,1.026-1.026V7.795H1.231Zm11.9-7.179V3.9A1.027,1.027,0,0,0,12.1,2.872H11.077V3.9a.616.616,0,0,1-1.226.084L9.846,3.9V2.872H4.513V3.9a.615.615,0,0,1-1.225.084L3.282,3.9V2.872H2.256A1.026,1.026,0,0,0,1.231,3.9V6.564Z" transform="translate(1)" fill="#495057"></path>
					</svg><span class="ms-2">Custom</span></a></li>
				</ul>
			</div>
		</div>
		<div class="table-responsive mb-0">
			<table class="table card-table table-nowrap overflow-hidden">
				<thead>
					<tr>
						<th>Name</th>
						<th>Status</th>
						<th style="width: 350px;">Progress</th>
						<th style="width: 220px;">Members</th>
						<th style="width: 220px;">Due Date</th>
						<th></th>
					</tr>
				</thead>
				<tbody class="list">
					<tr>
						<td><span class="font-weight-semibold text-gray-700">Sketch Design System</span></td>
						<td><span class="badge bg-ornage-150 text-orange-500 p-2">In progress</span></td>
						<td>
							<div class="d-flex align-items-center">
								<span class="fs-16 text-gray-700 me-2">50%</span>
								<div class="progress" style="height: 5px;width: 100%;">
									<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</td>
						<td>
							<div class="avatar-group">
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar2.png') !!}" alt="Avatar">
								</span>
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar3.png') !!}" alt="Avatar">
								</span>
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar4.png') !!}" alt="Avatar">
								</span>
								<span class="avatar avatar-circle">
									<span class="avatar-initials avatar-dark-light border-transprant">+6</span>
								</span>
							</div>
						</td>
						<td>05/19/21</td>
						<td>
							<div class="dropdown ">
								<a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
										<rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
										<path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
									</svg>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="#!" class="dropdown-item">
										Action
									</a>
									<a href="#!" class="dropdown-item">
										Another action
									</a>
									<a href="#!" class="dropdown-item">
										Something else here
									</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td><span class="font-weight-semibold text-gray-700">Bootstrap 5 Template</span></td>
						<td><span class="badge bg-ornage-150 text-orange-500 p-2">In progress</span></td>
						<td>
							<div class="d-flex align-items-center">
								<span class="fs-16 text-gray-700 me-2">25%</span>
								<div class="progress" style="height: 5px;width: 100%;">
									<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</td>
						<td>
							<div class="avatar-group">
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar30.png') !!}" alt="Avatar">
								</span>
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar31.png') !!}" alt="Avatar">
								</span>
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar32.png') !!}" alt="Avatar">
								</span>
								<span class="avatar avatar-circle">
									<span class="avatar-initials avatar-dark-light border-transprant">+2</span>
								</span>
							</div>
						</td>
						<td>05/23/21</td>
						<td>
							<div class="dropdown ">
								<a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
										<rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
										<path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
									</svg>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="#!" class="dropdown-item">
										Action
									</a>
									<a href="#!" class="dropdown-item">
										Another action
									</a>
									<a href="#!" class="dropdown-item">
										Something else here
									</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td><span class="font-weight-semibold text-gray-700">Nike Mobile App</span></td>
						<td><span class="badge bg-gray-50 text-gray-600 py-2">Ready</span></td>
						<td>
							<div class="d-flex align-items-center">
								<span class="fs-16 text-gray-700 me-2">0%</span>
								<div class="progress" style="height: 5px;width: 100%;">
									<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</td>
						<td>
							<div class="avatar-group">
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar2.png') !!}" alt="Avatar">
								</span>
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar3.png') !!}" alt="Avatar">
								</span>
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar4.png') !!}" alt="Avatar">
								</span>
							</div>
						</td>
						<td>06/12/21</td>
						<td>
							<div class="dropdown ">
								<a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
										<rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
										<path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
									</svg>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="#!" class="dropdown-item">
										Action
									</a>
									<a href="#!" class="dropdown-item">
										Another action
									</a>
									<a href="#!" class="dropdown-item">
										Something else here
									</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td><span class="font-weight-semibold text-gray-700">Kaboom! Website</span></td>
						<td><span class="badge bg-red-50 text-dnd">Overdue</span></td>
						<td>
							<div class="d-flex align-items-center">
								<span class="fs-16 text-gray-700 me-2">63%</span>
								<div class="progress" style="height: 5px;width: 100%;">
									<div class="progress-bar" role="progressbar" style="width: 63%;" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</td>
						<td>
							<div class="avatar-group">
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar2.png') !!}" alt="Avatar">
								</span>
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar3.png') !!}" alt="Avatar">
								</span>
							</div>
						</td>
						<td>06/09/21</td>
						<td>
							<div class="dropdown ">
								<a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
										<rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
										<path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
									</svg>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="#!" class="dropdown-item">
										Action
									</a>
									<a href="#!" class="dropdown-item">
										Another action
									</a>
									<a href="#!" class="dropdown-item">
										Something else here
									</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td><span class="font-weight-semibold text-gray-700">Unity Game Launch</span></td>
						<td><span class="badge bg-gray-50 text-gray-600 py-2">Ready</span></td>
						<td>
							<div class="d-flex align-items-center">
								<span class="fs-16 text-gray-700 me-2">0%</span>
								<div class="progress" style="height: 5px; width: 100%;">
									<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</td>
						<td>
							<div class="avatar-group">
								<span class="avatar avatar-circle">
									<img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar2.png') !!}" alt="Avatar">
								</span>
							</div>
						</td>
						<td>07/12/21</td>
						<td>
							<div class="dropdown ">
								<a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
										<rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
										<path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
									</svg>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="#!" class="dropdown-item">
										Action
									</a>
									<a href="#!" class="dropdown-item">
										Another action
									</a>
									<a href="#!" class="dropdown-item">
										Something else here
									</a>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="d-flex align-items-center p-3 p-md-4 border-top border-gray-200">
			<a href="#" class="my-1 tiny font-weight-semibold mx-auto btn btn-link link-dark">View all<svg class="ms-1" data-name="icons/tabler/chevron right" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 16 16">
				<rect data-name="Icons/Tabler/Chevron Right background" width="16" height="16" fill="none"></rect>
				<path d="M.26.26A.889.889,0,0,1,1.418.174l.1.086L8.629,7.371a.889.889,0,0,1,.086,1.157l-.086.1L1.517,15.74A.889.889,0,0,1,.174,14.582l.086-.1L6.743,8,.26,1.517A.889.889,0,0,1,.174.36Z" transform="translate(4)" fill="#1e1e1e"></path>
			</svg></a>
		</div>
	</div>
</div>
<div class="col-12 col-xxl-4 mb-4">
	<div class="bg-blue-50 p-4 p-md-5 position-relative overflow-hidden rounded-12 h-100 zIndex-0">
		<div class="row ps-xl-3 pt-xl-3">
			<div class="col-lg-6 col-xl-6 pb-md-5 pb-md-0 mb-md-5 mb-lg-0 pe-xxl-0">
				<span class="badge badge-lg badge-warning text-uppercase">On the go!</span>
				<h2 class="mt-2 h1 pt-1 mb-4 pb-1">Download our blazing fast app</h2>
				<a href="#0" class="btn btn-xl btn-dark">Download</a>
				<p class="text-gray-600 small pt-3">Available for iOS and Android</p>
			</div>
			<div class="col-lg-6">
				<div class="get-startedtwo">
					<img src="{!! asset('backend/muze/assets/img/placeholder1.png') !!}" class="img-fluid" alt="img">
				</div>
			</div>
		</div>
	</div>
</div>
</div>
