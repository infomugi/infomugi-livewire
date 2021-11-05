<div class="page d-flex flex-row flex-column-fluid">
	<!--begin::Aside-->
	<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
		<!--begin::Aside toolbar-->
		
		
		@include('layouts\partials\tpl_sidebar')
		
		
		<!--begin::Footer-->
		<div class="aside-footer flex-column-auto pb-5" id="kt_aside_footer">
			<!--begin::Aside user-->
			<div class="aside-user">
				<!--begin::User-->
				<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
					<!--begin::User image-->
					<div class="me-5">
						<!--begin::Symbol-->
						<div class="symbol symbol-40px cursor-pointer" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
							<img src="{!! asset('backend/assets/media/avatars/150-26.jpg') !!}">
						</div>
						<!--end::Symbol-->
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content d-flex align-items-center px-3">
									<!--begin::Avatar-->
									<div class="symbol symbol-50px me-5">
										<img alt="Logo" src="{!! asset('backend/assets/media/avatars/150-26.jpg') !!}">
									</div>
									<!--end::Avatar-->
									<!--begin::Username-->
									<div class="d-flex flex-column">
										<div class="fw-bolder d-flex align-items-center fs-5">Max Smith 
											<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
											<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
										</div>
										<!--end::Username-->
									</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="pages/profile/overview.html" class="menu-link px-5">My Profile</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="pages/projects/list.html" class="menu-link px-5">
										<span class="menu-text">My Projects</span>
										<span class="menu-badge">
											<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
										</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
									<a href="#" class="menu-link px-5">
										<span class="menu-title">My Subscription</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/referrals.html" class="menu-link px-5">Referrals</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/billing.html" class="menu-link px-5">Billing</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/statements.html" class="menu-link px-5">Payments</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements 
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="View your statements" aria-label="View your statements"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
														<span class="form-check-label text-muted fs-7">Notifications</span>
													</label>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="account/statements.html" class="menu-link px-5">My Statements</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Language 
												<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English 
													<img class="w-15px h-15px rounded-1 ms-2" src="{!! asset('backend/assets/media/flags/united-states.svg') !!}"></span></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="account/settings.html" class="menu-link d-flex px-5 active">
															<span class="symbol symbol-20px me-4">
																<img class="rounded-1" src="{!! asset('backend/assets/media/flags/united-states.svg') !!}">
															</span>English</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="account/settings.html" class="menu-link d-flex px-5">
																<span class="symbol symbol-20px me-4">
																	<img class="rounded-1" src="{!! asset('backend/assets/media/flags/spain.svg') !!}">
																</span>Spanish</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="account/settings.html" class="menu-link d-flex px-5">
																	<span class="symbol symbol-20px me-4">
																		<img class="rounded-1" src="{!! asset('backend/assets/media/flags/germany.svg') !!}">
																	</span>German</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="account/settings.html" class="menu-link d-flex px-5">
																		<span class="symbol symbol-20px me-4">
																			<img class="rounded-1" src="{!! asset('backend/assets/media/flags/japan.svg') !!}">
																		</span>Japanese</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="account/settings.html" class="menu-link d-flex px-5">
																			<span class="symbol symbol-20px me-4">
																				<img class="rounded-1" src="{!! asset('backend/assets/media/flags/france.svg') !!}">
																			</span>French</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-5 my-1">
																	<a href="account/settings.html" class="menu-link px-5">Account Settings</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-5">
																	<a href="authentication/sign-in/basic.html" class="menu-link px-5">Sign Out</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-5">
																	<div class="menu-content px-5">
																		<label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="/good/dark/index.html">
																			<span class="pulse-ring ms-n1"></span>
																			<span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
																		</label>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</div>
														<!--end::User image-->
														<!--begin::Wrapper-->
														<div class="flex-row-fluid flex-wrap">
															<!--begin::Section-->
															<div class="d-flex align-items-center flex-stack">
																<!--begin::Info-->
																<div class="me-2">
																	<!--begin::Username-->
																	<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold lh-0">Paul Melone</a>
																	<!--end::Username-->
																	<!--begin::Description-->
																	<span class="text-gray-400 fw-bold d-block fs-8">Python Dev</span>
																	<!--end::Description-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<livewire:admin.logout/>
																<!--end::Action-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::User-->
												</div>
												<!--end::Aside user-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Aside-->
										<!--begin::Wrapper-->
										<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
											<!--begin::Header-->
											<div id="kt_header" style="" class="header align-items-stretch">
												<!--begin::Brand-->
												<div class="header-brand">
													<!--begin::Logo-->
													<a href="index.html">
														<img alt="Logo" src="{!! asset('backend/assets/media/logos/default.svg') !!}" class="h-25px">
													</a>
													<!--end::Logo-->
													<!--begin::Aside action-->
													<div class="d-none d-lg-block">
														<button class="btn btn-icon btn-color-gray-500 w-auto px-0 btn-active-color-primary" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg') !!}-->
															<span class="svg-icon svg-icon-1 me-n1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black"></path>
																	<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Menu 3-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
															<!--begin::Heading-->
															<div class="menu-item px-3">
																<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
															</div>
															<!--end::Heading-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Create Invoice</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Create Payment 
																	<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a target name for future usage and reference" aria-label="Specify a target name for future usage and reference"></i></a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Generate Bill</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">Subscription</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Plans</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Billing</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3">Statements</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu separator-->
																		<div class="separator my-2"></div>
																		<!--end::Menu separator-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<div class="menu-content px-3">
																				<!--begin::Switch-->
																				<label class="form-check form-switch form-check-custom form-check-solid">
																					<!--begin::Input-->
																					<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
																					<!--end::Input-->
																					<!--end::Label-->
																					<span class="form-check-label text-muted fs-6">Recuring</span>
																					<!--end::Label-->
																				</label>
																				<!--end::Switch-->
																			</div>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3 my-1">
																	<a href="#" class="menu-link px-3">Settings</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 3-->
														</div>
														<!--end::Aside action-->
														<!--begin::Aside toggle-->
														<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
															<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg') !!}-->
																<span class="svg-icon svg-icon-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black"></path>
																		<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black"></path>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
														</div>
														<!--end::Aside toggle-->
													</div>
													<!--end::Brand-->
													<div class="toolbar">
														<!--begin::Toolbar-->
														<div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-sm-row align-items-lg-stretch justify-content-sm-between">
															<!--begin::Page title-->
															<div class="page-title d-flex flex-column me-5">
																<!--begin::Title-->
																<h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Dashboard</h1>
																<!--end::Title-->
																<!--begin::Breadcrumb-->
																<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
																	<!--begin::Item-->
																	<li class="breadcrumb-item text-muted">
																		<a href="index.html" class="text-muted text-hover-primary">Home</a>
																	</li>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<li class="breadcrumb-item">
																		<span class="bullet bg-gray-200 w-5px h-2px"></span>
																	</li>
																	<!--end::Item-->
																	<!--begin::Item-->
																	<li class="breadcrumb-item text-dark">Dashboard</li>
																	<!--end::Item-->
																</ul>
																<!--end::Breadcrumb-->
															</div>
															<!--end::Page title-->
															<!--begin::Action group-->
															<div class="d-flex align-items-center overflow-auto pt-3 pt-sm-0">
																<!--begin::Action wrapper-->
																<div class="header-search me-4">
																	<!--begin::Menu- wrapper-->
																	<!--begin::Search-->
																	<div id="kt_header_search" class="d-flex align-items-center" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom" data-kt-search="true">
																		<!--begin::Form-->
																		<form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
																			<!--begin::Hidden input(Added to disable form autocomplete)-->
																			<input type="hidden">
																			<!--end::Hidden input-->
																			<!--begin::Icon-->
																			<!--begin::Svg Icon | path: icons/duotune/general/gen004.svg') !!}-->
																			<span class="svg-icon svg-icon-3 search-icon position-absolute top-50 translate-middle-y ms-4">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"></path>
																					<path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																			<!--end::Icon-->
																			<!--begin::Input-->
																			<input type="text" class="form-control bg-transparent ps-12" name="search" value="" placeholder="Search" data-kt-search-element="input">
																			<!--end::Input-->
																			<!--begin::Spinner-->
																			<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
																				<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
																			</span>
																			<!--end::Spinner-->
																			<!--begin::Reset-->
																			<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg') !!}-->
																				<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
																						<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																			<!--end::Reset-->
																		</form>
																		<!--end::Form-->
																		<!--begin::Menu-->
																		<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden" data-kt-menu="true">
																			<!--begin::Wrapper-->
																			<div data-kt-search-element="wrapper">
																				<!--begin::Recently viewed-->
																				<div data-kt-search-element="results" class="d-none">
																					<!--begin::Items-->
																					<div class="scroll-y mh-200px mh-lg-350px">
																						<!--begin::Category title-->
																						<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
																						<!--end::Category title-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<img src="{!! asset('backend/assets/media/avatars/150-1.jpg') !!}">
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">Karina Clark</span>
																								<span class="fs-7 fw-bold text-muted">Marketing Manager</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<img src="{!! asset('backend/assets/media/avatars/150-3.jpg') !!}">
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">Olivia Bold</span>
																								<span class="fs-7 fw-bold text-muted">Software Engineer</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<img src="{!! asset('backend/assets/media/avatars/150-8.jpg') !!}">
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">Ana Clark</span>
																								<span class="fs-7 fw-bold text-muted">UI/UX Designer</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<img src="{!! asset('backend/assets/media/avatars/150-11.jpg') !!}">
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">Nick Pitola</span>
																								<span class="fs-7 fw-bold text-muted">Art Director</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<img src="{!! asset('backend/assets/media/avatars/150-12.jpg') !!}">
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">Edward Kulnic</span>
																								<span class="fs-7 fw-bold text-muted">System Administrator</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Category title-->
																						<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
																						<!--end::Category title-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<img class="w-20px h-20px" src="{!! asset('backend/assets/media/svg/brand-logos/volicity-9.svg') !!}">
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">Company Rbranding</span>
																								<span class="fs-7 fw-bold text-muted">UI Design</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<img class="w-20px h-20px" src="{!! asset('backend/assets/media/svg/brand-logos/tvit.svg') !!}">
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">Company Re-branding</span>
																								<span class="fs-7 fw-bold text-muted">Web Development</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<img class="w-20px h-20px" src="{!! asset('backend/assets/media/svg/misc/infography.svg') !!}">
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">Business Analytics App</span>
																								<span class="fs-7 fw-bold text-muted">Administration</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<img class="w-20px h-20px" src="{!! asset('backend/assets/media/svg/brand-logos/leaf.svg') !!}">
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">EcoLeaf App Launch</span>
																								<span class="fs-7 fw-bold text-muted">Marketing</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<img class="w-20px h-20px" src="{!! asset('backend/assets/media/svg/brand-logos/tower.svg') !!}">
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column justify-content-start fw-bold">
																								<span class="fs-6 fw-bold">Tower Group Website</span>
																								<span class="fs-7 fw-bold text-muted">Google Adwords</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Category title-->
																						<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
																						<!--end::Category title-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black"></path>
																											<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<span class="fs-6 fw-bold">Si-Fi Project by AU Themes</span>
																								<span class="fs-7 fw-bold text-muted">#45670</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
																											<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"></rect>
																											<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
																											<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<span class="fs-6 fw-bold">Shopix Mobile App Planning</span>
																								<span class="fs-7 fw-bold text-muted">#45690</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black"></path>
																											<rect x="6" y="12" width="7" height="2" rx="1" fill="black"></rect>
																											<rect x="6" y="7" width="12" height="2" rx="1" fill="black"></rect>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<span class="fs-6 fw-bold">Finance Monitoring SAAS Discussion</span>
																								<span class="fs-7 fw-bold text-muted">#21090</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"></path>
																											<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"></path>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<span class="fs-6 fw-bold">Dashboard Analitics Launch</span>
																								<span class="fs-7 fw-bold text-muted">#34560</span>
																							</div>
																							<!--end::Title-->
																						</a>
																						<!--end::Item-->
																					</div>
																					<!--end::Items-->
																				</div>
																				<!--end::Recently viewed-->
																				<!--begin::Recently viewed-->
																				<div class="mb-4" data-kt-search-element="main">
																					<!--begin::Heading-->
																					<div class="d-flex flex-stack fw-bold mb-4">
																						<!--begin::Label-->
																						<span class="text-muted fs-6 me-2">Recently Searched:</span>
																						<!--end::Label-->
																						<!--begin::Toolbar-->
																						<div class="d-flex" data-kt-search-element="toolbar">
																							<!--begin::Preferences toggle-->
																							<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
																								<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg') !!}-->
																								<span class="svg-icon svg-icon-1">
																									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																										<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black"></path>
																										<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</div>
																							<!--end::Preferences toggle-->
																							<!--begin::Advanced search toggle-->
																							<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="" data-bs-original-title="Show more search options">
																								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg') !!}-->
																								<span class="svg-icon svg-icon-2">
																									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																										<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
																									</svg>
																								</span>
																								<!--end::Svg Icon-->
																							</div>
																							<!--end::Advanced search toggle-->
																						</div>
																						<!--end::Toolbar-->
																					</div>
																					<!--end::Heading-->
																					<!--begin::Items-->
																					<div class="scroll-y mh-200px mh-lg-325px">
																						<!--begin::Item-->
																						<div class="d-flex align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="black"></path>
																											<path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="black"></path>
																											<path opacity="0.3" d="M15 17H9V20H15V17Z" fill="black"></path>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">BoomApp by Keenthemes</a>
																								<span class="fs-7 text-muted fw-bold">#45789</span>
																							</div>
																							<!--end::Title-->
																						</div>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<div class="d-flex align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="black"></path>
																											<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="black"></path>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Kept API Project Meeting</a>
																								<span class="fs-7 text-muted fw-bold">#84050</span>
																							</div>
																							<!--end::Title-->
																						</div>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<div class="d-flex align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black"></path>
																											<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black"></path>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"KPI Monitoring App Launch</a>
																								<span class="fs-7 text-muted fw-bold">#84250</span>
																							</div>
																							<!--end::Title-->
																						</div>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<div class="d-flex align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black"></path>
																											<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black"></path>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Reference FAQ</a>
																								<span class="fs-7 text-muted fw-bold">#67945</span>
																							</div>
																							<!--end::Title-->
																						</div>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<div class="d-flex align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black"></path>
																											<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black"></path>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"FitPro App Development</a>
																								<span class="fs-7 text-muted fw-bold">#84250</span>
																							</div>
																							<!--end::Title-->
																						</div>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<div class="d-flex align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black"></path>
																											<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black"></path>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Shopix Mobile App</a>
																								<span class="fs-7 text-muted fw-bold">#45690</span>
																							</div>
																							<!--end::Title-->
																						</div>
																						<!--end::Item-->
																						<!--begin::Item-->
																						<div class="d-flex align-items-center mb-5">
																							<!--begin::Symbol-->
																							<div class="symbol symbol-40px me-4">
																								<span class="symbol-label bg-light">
																									<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg') !!}-->
																									<span class="svg-icon svg-icon-2 svg-icon-primary">
																										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																											<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black"></path>
																											<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black"></path>
																										</svg>
																									</span>
																									<!--end::Svg Icon-->
																								</span>
																							</div>
																							<!--end::Symbol-->
																							<!--begin::Title-->
																							<div class="d-flex flex-column">
																								<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Landing UI Design" Launch</a>
																								<span class="fs-7 text-muted fw-bold">#24005</span>
																							</div>
																							<!--end::Title-->
																						</div>
																						<!--end::Item-->
																					</div>
																					<!--end::Items-->
																				</div>
																				<!--end::Recently viewed-->
																				<!--begin::Empty-->
																				<div data-kt-search-element="empty" class="text-center d-none">
																					<!--begin::Icon-->
																					<div class="pt-10 pb-10">
																						<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg') !!}-->
																						<span class="svg-icon svg-icon-4x opacity-50">
																							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																								<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black"></path>
																								<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black"></path>
																								<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black"></rect>
																								<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																					</div>
																					<!--end::Icon-->
																					<!--begin::Message-->
																					<div class="pb-15 fw-bold">
																						<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
																						<div class="text-muted fs-7">Please try again with a different query</div>
																					</div>
																					<!--end::Message-->
																				</div>
																				<!--end::Empty-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Preferences-->
																			<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
																				<!--begin::Heading-->
																				<h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
																				<!--end::Heading-->
																				<!--begin::Input group-->
																				<div class="mb-5">
																					<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query">
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="mb-5">
																					<!--begin::Radio group-->
																					<div class="nav-group nav-group-fluid">
																						<!--begin::Option-->
																						<label>
																							<input type="radio" class="btn-check" name="type" value="has" checked="checked">
																							<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
																						</label>
																						<!--end::Option-->
																						<!--begin::Option-->
																						<label>
																							<input type="radio" class="btn-check" name="type" value="users">
																							<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
																						</label>
																						<!--end::Option-->
																						<!--begin::Option-->
																						<label>
																							<input type="radio" class="btn-check" name="type" value="orders">
																							<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
																						</label>
																						<!--end::Option-->
																						<!--begin::Option-->
																						<label>
																							<input type="radio" class="btn-check" name="type" value="projects">
																							<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
																						</label>
																						<!--end::Option-->
																					</div>
																					<!--end::Radio group-->
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="mb-5">
																					<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="">
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="mb-5">
																					<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="">
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="mb-5">
																					<!--begin::Radio group-->
																					<div class="nav-group nav-group-fluid">
																						<!--begin::Option-->
																						<label>
																							<input type="radio" class="btn-check" name="attachment" value="has" checked="checked">
																							<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
																						</label>
																						<!--end::Option-->
																						<!--begin::Option-->
																						<label>
																							<input type="radio" class="btn-check" name="attachment" value="any">
																							<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
																						</label>
																						<!--end::Option-->
																					</div>
																					<!--end::Radio group-->
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="mb-5">
																					<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid select2-hidden-accessible" data-select2-id="select2-data-4-txsj" tabindex="-1" aria-hidden="true">
																						<option value="next" data-select2-id="select2-data-6-4b6g">Within the next</option>
																						<option value="last">Within the last</option>
																						<option value="between">Between</option>
																						<option value="on">On</option>
																					</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-5-crp4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-sm form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-timezone-j0-container" aria-controls="select2-timezone-j0-container"><span class="select2-selection__rendered" id="select2-timezone-j0-container" role="textbox" aria-readonly="true" title="Within the next">Within the next</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="row mb-8">
																					<!--begin::Col-->
																					<div class="col-6">
																						<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="">
																					</div>
																					<!--end::Col-->
																					<!--begin::Col-->
																					<div class="col-6">
																						<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid select2-hidden-accessible" data-select2-id="select2-data-7-019k" tabindex="-1" aria-hidden="true">
																							<option value="days" data-select2-id="select2-data-9-8ujx">Days</option>
																							<option value="weeks">Weeks</option>
																							<option value="months">Months</option>
																							<option value="years">Years</option>
																						</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-8zr6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-sm form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-date_typer-m7-container" aria-controls="select2-date_typer-m7-container"><span class="select2-selection__rendered" id="select2-date_typer-m7-container" role="textbox" aria-readonly="true" title="Days">Days</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																					</div>
																					<!--end::Col-->
																				</div>
																				<!--end::Input group-->
																				<!--begin::Actions-->
																				<div class="d-flex justify-content-end">
																					<button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
																					<a href="pages/search/horizontal.html" class="btn btn-sm fw-bolder btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
																				</div>
																				<!--end::Actions-->
																			</form>
																			<!--end::Preferences-->
																			<!--begin::Preferences-->
																			<form data-kt-search-element="preferences" class="pt-1 d-none">
																				<!--begin::Heading-->
																				<h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
																				<!--end::Heading-->
																				<!--begin::Input group-->
																				<div class="pb-4 border-bottom">
																					<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																						<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
																						<input class="form-check-input" type="checkbox" value="1" checked="checked">
																					</label>
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="py-4 border-bottom">
																					<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																						<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
																						<input class="form-check-input" type="checkbox" value="1" checked="checked">
																					</label>
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="py-4 border-bottom">
																					<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																						<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate Programs</span>
																						<input class="form-check-input" type="checkbox" value="1">
																					</label>
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="py-4 border-bottom">
																					<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																						<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
																						<input class="form-check-input" type="checkbox" value="1" checked="checked">
																					</label>
																				</div>
																				<!--end::Input group-->
																				<!--begin::Input group-->
																				<div class="py-4 border-bottom">
																					<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																						<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
																						<input class="form-check-input" type="checkbox" value="1">
																					</label>
																				</div>
																				<!--end::Input group-->
																				<!--begin::Actions-->
																				<div class="d-flex justify-content-end pt-7">
																					<button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
																					<button type="submit" class="btn btn-sm fw-bolder btn-primary">Save Changes</button>
																				</div>
																				<!--end::Actions-->
																			</form>
																			<!--end::Preferences-->
																		</div>
																		<!--end::Menu-->
																	</div>
																	<!--end::Search-->
																	<!--end::Menu wrapper-->
																</div>
																<!--end::Action wrapper-->
																<!--begin::Actions-->
																<div class="d-flex">
																	<!--begin::Notifications-->
																	
																	<!--end::Notifications-->
																	<!--begin::Chat-->
																	
																	<!--end::Chat-->
																	<!--begin::Quick links-->
																	<div class="d-flex align-items-center">
																		<!--begin::Menu wrapper-->
																		<a href="#" class="btn btn-icon btn-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">3</a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
																			<!--begin::Heading-->
																			<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('{!! asset('backend/assets/media/misc/header-dropdown.png') !!}')">
																				<!--begin::Title-->
																				<h3 class="text-white fw-bold mb-3">Quick Links</h3>
																				<!--end::Title-->
																				<!--begin::Status-->
																				<span class="badge bg-primary py-2 px-3">25 pending tasks</span>
																				<!--end::Status-->
																			</div>
																			<!--end::Heading-->
																			<!--begin:Nav-->
																			<div class="row g-0">
																				<!--begin:Item-->
																				<div class="col-6">
																					<a href="pages/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
																						<!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg') !!}-->
																						<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
																							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																								<path opacity="0.3" d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z" fill="black"></path>
																								<path d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z" fill="black"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																						<span class="fs-5 fw-bold text-gray-800 mb-0">Accounting</span>
																						<span class="fs-7 text-gray-400">eCommerce</span>
																					</a>
																				</div>
																				<!--end:Item-->
																				<!--begin:Item-->
																				<div class="col-6">
																					<a href="pages/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
																						<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg') !!}-->
																						<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
																							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																								<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black"></path>
																								<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																						<span class="fs-5 fw-bold text-gray-800 mb-0">Administration</span>
																						<span class="fs-7 text-gray-400">Console</span>
																					</a>
																				</div>
																				<!--end:Item-->
																				<!--begin:Item-->
																				<div class="col-6">
																					<a href="pages/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
																						<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg') !!}-->
																						<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
																							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																								<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="black"></path>
																								<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="black"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																						<span class="fs-5 fw-bold text-gray-800 mb-0">Projects</span>
																						<span class="fs-7 text-gray-400">Pending Tasks</span>
																					</a>
																				</div>
																				<!--end:Item-->
																				<!--begin:Item-->
																				<div class="col-6">
																					<a href="pages/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
																						<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg') !!}-->
																						<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
																							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																								<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
																								<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
																							</svg>
																						</span>
																						<!--end::Svg Icon-->
																						<span class="fs-5 fw-bold text-gray-800 mb-0">Customers</span>
																						<span class="fs-7 text-gray-400">Latest cases</span>
																					</a>
																				</div>
																				<!--end:Item-->
																			</div>
																			<!--end:Nav-->
																			<!--begin::View more-->
																			<div class="py-2 text-center border-top">
																				<a href="pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All 
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg') !!}-->
																					<span class="svg-icon svg-icon-5">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
																							<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
																						</svg>
																					</span>
																					<!--end::Svg Icon--></a>
																				</div>
																				<!--end::View more-->
																			</div>
																			<!--end::Menu-->
																			<!--end::Menu wrapper-->
																		</div>
																		<!--end::Quick links-->
																	</div>
																	<!--end::Actions-->
																</div>
																<!--end::Action group-->
															</div>
															<!--end::Toolbar-->
														</div>
													</div>
													<!--end::Header-->
													<!--begin::Content-->
													<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
														<!--begin::Container-->
														<div id="kt_content_container" class="container-xxl">
															<!--begin::Row-->
															<div class="row g-5 g-xl-8">
																<!--begin::Col-->
																<div class="col-xl-4">
																	<!--begin::Widget 2-->
																	<div class="card card-xl-stretch">
																		<!--begin::Body-->
																		<div class="card-body pt-5 mb-xl-9 position-relative">
																			<!--begin::Heading-->
																			<div class="d-flex flex-stack">
																				<!--begin::Title-->
																				<h4 class="fw-bolder text-gray-800 m-0">User Base</h4>
																				<!--end::Title-->
																				<!--begin::Menu-->
																				<button class="btn btn-icon btn-color-gray-300 btn-active-color-primary w-auto px-0" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg') !!}-->
																					<span class="svg-icon svg-icon-1 me-n1">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black"></rect>
																							<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																							<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																							<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black"></rect>
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</button>
																				<!--begin::Menu 1-->
																				<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6183d6a7c741e">
																					<!--begin::Header-->
																					<div class="px-7 py-5">
																						<div class="fs-5 text-dark fw-bolder">Filter Options</div>
																					</div>
																					<!--end::Header-->
																					<!--begin::Menu separator-->
																					<div class="separator border-gray-200"></div>
																					<!--end::Menu separator-->
																					<!--begin::Form-->
																					<div class="px-7 py-5">
																						<!--begin::Input group-->
																						<div class="mb-10">
																							<!--begin::Label-->
																							<label class="form-label fw-bold">Status:</label>
																							<!--end::Label-->
																							<!--begin::Input-->
																							<div>
																								<select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6183d6a7c741e" data-allow-clear="true" data-select2-id="select2-data-10-qx5h" tabindex="-1" aria-hidden="true">
																									<option data-select2-id="select2-data-12-ulvp"></option>
																									<option value="1">Approved</option>
																									<option value="2">Pending</option>
																									<option value="2">In Process</option>
																									<option value="2">Rejected</option>
																								</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-oeqv" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-4iwd-container" aria-controls="select2-4iwd-container"><span class="select2-selection__rendered" id="select2-4iwd-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																							</div>
																							<!--end::Input-->
																						</div>
																						<!--end::Input group-->
																						<!--begin::Input group-->
																						<div class="mb-10">
																							<!--begin::Label-->
																							<label class="form-label fw-bold">Member Type:</label>
																							<!--end::Label-->
																							<!--begin::Options-->
																							<div class="d-flex">
																								<!--begin::Options-->
																								<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																									<input class="form-check-input" type="checkbox" value="1">
																									<span class="form-check-label">Author</span>
																								</label>
																								<!--end::Options-->
																								<!--begin::Options-->
																								<label class="form-check form-check-sm form-check-custom form-check-solid">
																									<input class="form-check-input" type="checkbox" value="2" checked="checked">
																									<span class="form-check-label">Customer</span>
																								</label>
																								<!--end::Options-->
																							</div>
																							<!--end::Options-->
																						</div>
																						<!--end::Input group-->
																						<!--begin::Input group-->
																						<div class="mb-10">
																							<!--begin::Label-->
																							<label class="form-label fw-bold">Notifications:</label>
																							<!--end::Label-->
																							<!--begin::Switch-->
																							<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																								<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
																								<label class="form-check-label">Enabled</label>
																							</div>
																							<!--end::Switch-->
																						</div>
																						<!--end::Input group-->
																						<!--begin::Actions-->
																						<div class="d-flex justify-content-end">
																							<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																							<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
																						</div>
																						<!--end::Actions-->
																					</div>
																					<!--end::Form-->
																				</div>
																				<!--end::Menu 1-->
																				<!--end::Menu-->
																			</div>
																			<!--end::Heading-->
																			<!--begin::Chart-->
																			<div class="d-flex flex-center mb-5 mb-xxl-0">
																				<div id="kt_chart_widget_2_chart" style="height: 250px"></div>
																			</div>
																			<!--end::Chart-->
																			<!--begin::Content-->
																			<div class="text-center position-absolute bottom-0 start-50 translate-middle-x w-100 mb-9">
																				<!--begin::Text-->
																				<p class="fw-bold fs-4 text-gray-400 mb-6 px-5">Long before you sit down to put the 
																					<br>make sure you breathe</p>
																					<!--end::Text-->
																					<!--begin::Action-->
																					<div class="m-0">
																						<a href="#" class="btn btn-danger fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
																					</div>
																					<!--ed::Action-->
																				</div>
																				<!--end::Content-->
																			</div>
																			<!--end::Body-->
																		</div>
																		<!--end::Widget 2-->
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col-xl-8">
																		<!--begin::Widget 1-->
																		<div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px card-xl-stretch mb-5 mb-xl-8 bg-gray-200 border-0" style="background-position: 100% 100%;background-size: 500px auto;background-image:url('backend/assets/media/misc/city.png')">
																			<!--begin::Body-->
																			<div class="card-body d-flex flex-column justify-content-center ps-lg-15">
																				<!--begin::Title-->
																				<h3 class="text-gray-800 fs-2qx fw-boldest line-height-lg mb-4 mb-lg-8">Hello, 
																					<br>{{ auth()->user()->name }}</h3>
																					<!--end::Title-->
																					<!--begin::Action-->
																					<div class="m-0">
																						<a href="#" class="btn btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Boost Store</a>
																					</div>
																					<!--begin::Action-->
																				</div>
																				<!--end::Body-->
																			</div>
																			<!--end::Widget 1-->
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Row-->
																	<!--begin::Row-->
																	
																	<!--end::Row-->
																	<!--begin::Row-->
																	
																	<!--end::Row-->
																	<!--begin::Row-->
																	
																	<!--end::Row-->
																</div>
																<!--end::Container-->
															</div>
															<!--end::Content-->
															<!--begin::Footer-->
															
															<!--end::Footer-->
														</div>
														<!--end::Wrapper-->
													</div>