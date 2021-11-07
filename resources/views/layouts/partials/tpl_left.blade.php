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