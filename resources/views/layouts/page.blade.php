
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <title>App Name - @yield('pageTitle')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Muze Dashboard">
    <meta name="keywords" content="Muze Dashboard">
    <meta name="author" content="Muze Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="{!! asset('backend/muze/assets/vendor/simplebar/dist/simplebar.min.css') !!}" rel="stylesheet" type="text/css" media="all">
    <link href="{!! asset('backend/muze/assets/css/theme.min.css') !!}" rel="stylesheet" type="text/css" media="all">
    @livewireStyles
    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>  
    
</head>
<body class="bg-gray-100 settings-template">
    
    <div class="customize-sidebar">
        <div class="border-bottom border-gray-200 p-3 p-md-4">
            <div class="text-end">
                <a href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill customize-close">
                    <svg data-name="icons/tabler/close" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16">
                        <rect data-name="Icons/Tabler/Close background" width="16" height="16" fill="none"></rect>
                        <path d="M.82.1l.058.05L6,5.272,11.122.151A.514.514,0,0,1,11.9.82l-.05.058L6.728,6l5.122,5.122a.514.514,0,0,1-.67.777l-.058-.05L6,6.728.878,11.849A.514.514,0,0,1,.1,11.18l.05-.058L5.272,6,.151.878A.514.514,0,0,1,.75.057Z" transform="translate(2 2)" fill="#1E1E1E"></path>
                    </svg>
                </a>
            </div>
            <div class="px-2 px-md-4">
                <h3 class="mb-0"><img src="{!! asset('backend/muze/assets/svg/icons/tio-tune2.svg') !!}" alt="Tio Tune"> Customize</h3>
                <p class="text-gray-700 mb-0 lh-lg">Choose your style and settings</p>
            </div>
        </div>
        <div class="customize-body" data-simplebar>
            <div class="p-4 px-lg-5 border-bottom border-gray-200">
                <h6 class="font-weight-semibold pb-3">Select Skin</h6>
                <div class="d-flex muze-skins customizer-controls">
                    <div class="text-center pe-4">
                        <div class="form-check-lg bg-white shadow-dark-80 p-4 rounded-circle avatar avatar-xl d-flex align-items-center justify-content-center">
                            <input class="form-check-input mx-0 rounded-circle" type="radio" name="MuzeSkins" id="LightMode" value="muze-light-mode" checked="checked">
                        </div>
                        <label for="LightMode" class="text-gray-700 mt-2">Light mode</label>
                    </div>
                    <div class="text-center ps-4 dark-radio">
                        <div class="form-check-lg bg-gray-800 shadow-dark-80 p-4 rounded-circle avatar avatar-xl d-flex align-items-center justify-content-center">
                            <input class="form-check-input mx-0 rounded-circle" type="radio" name="MuzeSkins" id="DarkMode" value="muze-dark-mode">
                        </div>
                        <label for="DarkMode" class="text-gray-700 mt-2">Dark mode</label>
                    </div>
                </div>
            </div>
            <div class="p-4 px-lg-5 border-bottom border-gray-200">
                <div class="d-flex align-items-center">
                    <h6 class="font-weight-semibold mb-0">RTL Mode</h6>
                    <div class="form-check form-switch mb-0 ms-auto">
                        <input class="form-check-input me-0" type="checkbox" id="RTLMode" value="muze-rtl">
                    </div>
                </div>
                <p class="text-gray-600 pt-2 mb-0">Switch layout direction</p>
            </div>
            <div class="p-4 px-lg-5 border-bottom border-gray-200">
                <div class="d-flex align-items-center">
                    <h6 class="font-weight-semibold mb-0">Fluid Layout</h6>
                    <div class="form-check form-switch mb-0 me-0 ms-auto">
                        <input class="form-check-input me-0" type="checkbox" id="FluidLayout" value="container">
                    </div>
                </div>
                <p class="text-gray-600 pt-2 mb-0">Toggle between full width and contained layouts</p>
            </div>
            <div class="p-4 px-lg-5 border-bottom border-gray-200 muze-headers customizer-controls">
                <h6 class="font-weight-semibold pb-3">Header Style</h6>
                <div class="form-check form-check-sm form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="HeaderStyles" id="HeaderVertical" value="default-header" checked="checked">
                    <label class="form-check-label" for="HeaderVertical">Vertical</label>
                </div>
                <div class="form-check form-check-sm form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="HeaderStyles" id="HeaderTop" value="top-header">
                    <label class="form-check-label" for="HeaderTop">Top</label>
                </div>
                <div class="form-check form-check-sm form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="HeaderStyles" id="HeaderDouble" value="double-header">
                    <label class="form-check-label" for="HeaderDouble">Double</label>
                </div>
            </div>
            <div class="p-4 px-lg-5">
                <h6 class="font-weight-semibold pb-3">Sidebar Style</h6>
                <div class="d-flex muze-sidebars customizer-controls">
                    <div class="me-3 sidebar-style">
                        <div class="form-check form-check-sm me-0">
                            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarDefault" value="default-sidebar" checked="checked">
                            <label class="form-check-label" for="SidebarDefault"><img src="{!! asset('backend/muze/assets/img/sidebar-default.svg') !!}" alt="Sidebar Default" class="rounded mb-2 border-gray-400 border"><span>Default</span></label>
                        </div>
                    </div>
                    <div class="me-3 sidebar-style">
                        <div class="form-check form-check-sm me-0">
                            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarCompact" value="sidebar-compact">
                            <label class="form-check-label" for="SidebarCompact"><img src="{!! asset('backend/muze/assets/img/sidebar-compact.svg') !!}" alt="Sidebar Compact" class="rounded mb-2 border-gray-400 border"><span>Compact</span></label>
                        </div>
                    </div>
                    <div class="me-3 sidebar-style">
                        <div class="form-check form-check-sm me-0">
                            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarIcons" value="sidebar-icons">
                            <label class="form-check-label" for="SidebarIcons"><img src="{!! asset('backend/muze/assets/img/sidebar-icons.svg') !!}" alt="Sidebar Icons" class="rounded mb-2 border-gray-400 border"><span>Icons</span></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 px-lg-5 border-top border-gray-200 bg-white">
            <div class="row">
                <div class="col-6 d-grid">
                    <a href="Javascript:void(0);" class="btn btn-xl btn-outline-dark" id="ResetCustomizer">Reset</a>
                </div>
                <div class="col-6 d-grid">
                    <a href="Javascript:void(0);" class="btn btn-xl btn-primary" id="CustomizerPreview">Preview</a>
                </div>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-vertical navbar-expand-lg navbar-light">
        <a class="navbar-brand mx-auto d-none d-lg-block my-0 my-lg-4" href="#">
            <img src="{!! asset('backend/muze/assets/svg/brand/logo.svg') !!}" alt="Muze">
            <img src="{!! asset('backend/muze/assets/svg/brand/logo-white.svg') !!}" alt="Muze" class="white-logo2">
            <img src="{!! asset('backend/muze/assets/svg/brand/muze-icon.svg') !!}" class="muze-icon" alt="Muze">
            <img src="{!! asset('backend/muze/assets/svg/brand/muze-icon-white.svg') !!}" class="muze-icon-white" alt="Muze">
        </a>
        <div class="navbar-collapse">
            <ul class="navbar-nav mb-2" id="accordionExample" data-simplebar>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/dashboard')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g data-name="icons/tabler/chart" transform="translate(0)">
                                <rect data-name="Icons/Tabler/Chart background" width="16" height="16" fill="none" />
                                <path d="M.686,13.257a.686.686,0,0,1-.093-1.365l.093-.006H15.314a.686.686,0,0,1,.093,1.365l-.093.006ZM.394,9.535l-.089-.05a.688.688,0,0,1-.24-.863l.05-.088L3.773,3.048a.684.684,0,0,1,.782-.272l.095.039L7.811,4.4,11.121.257a.687.687,0,0,1,.945-.122L12.142.2,15.8,3.858a.686.686,0,0,1-.893,1.036l-.077-.067L11.713,1.712,8.536,5.685a.684.684,0,0,1-.743.225l-.1-.04L4.578,4.313,1.256,9.294a.684.684,0,0,1-.862.24Z" transform="translate(0 1)" fill="#1e1e1e" />
                            </g>
                        </svg> &nbsp;<span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/dashboard')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g data-name="Icons/Tabler/Paperclip" transform="translate(0 0)">
                                <rect data-name="Icons/Tabler/apps background" width="16" height="16" fill="none" />
                                <path d="M10.743,16a1.6,1.6,0,0,1-1.6-1.6V10.743a1.6,1.6,0,0,1,1.6-1.6H14.4a1.6,1.6,0,0,1,1.6,1.6V14.4A1.6,1.6,0,0,1,14.4,16Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,10.743ZM1.6,16A1.6,1.6,0,0,1,0,14.4V10.743a1.6,1.6,0,0,1,1.6-1.6H5.257a1.6,1.6,0,0,1,1.6,1.6V14.4a1.6,1.6,0,0,1-1.6,1.6Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,10.743Zm9.372-3.886a1.6,1.6,0,0,1-1.6-1.6V1.6a1.6,1.6,0,0,1,1.6-1.6H14.4A1.6,1.6,0,0,1,16,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM10.515,1.6V5.257a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,1.6ZM1.6,6.857A1.6,1.6,0,0,1,0,5.257V1.6A1.6,1.6,0,0,1,1.6,0H5.257a1.6,1.6,0,0,1,1.6,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM1.372,1.6V5.257a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,1.6Z" transform="translate(0 0)" fill="#1e1e1e" />
                            </g>
                        </svg> &nbsp;<span class="ms-2">Report</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/division')}}">
                        <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <rect data-name="Icons/Tabler/Paperclip background" width="16" height="16" fill="none" />
                            <path d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z" transform="translate(1)" fill="#1e1e1e" />
                        </svg> &nbsp;<span class="ms-2">Divisi</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <hr class="my-0 bg-gray-50 opacity-100">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../documentation/index.html" target="_blank">
                        <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <rect data-name="Icons/Tabler/Paperclip background" width="16" height="16" fill="none" />
                            <path d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z" transform="translate(1)" fill="#1e1e1e" />
                        </svg> &nbsp;<span class="ms-2">Panduan</span> <span class="docs-version">v1.0</span>
                    </a>
                </li>
            </ul>
            <div class="mt-3 mt-md-auto mb-3 signout d-grid">
                <a href="javascript:void(0);" class="btn btn-dark btn-lg customize-btn"><img src="{!! asset('backend/muze/assets/svg/icons/dark-mode@24.svg') !!}" alt="Customize"><span class="ps-2">Customize</span></a>
            </div>
            <div class="navbar-vertical-footer border-top border-gray-50">
                <ul class="navbar-vertical-footer-list">
                    <li>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="18.047" height="18.047" viewBox="0 0 18.047 18.047">
                            <g data-name="Icons/Tabler/Paperclip Copy" transform="translate(0.047 0.047)">
                                <rect data-name="Icons/Tabler/Adjustments background" width="18" height="18" fill="none" />
                                <path d="M14.4,17.3l0-.074V6.579a2.829,2.829,0,0,1,0-5.443V.772A.772.772,0,0,1,15.94.7l0,.074v.364a2.829,2.829,0,0,1,0,5.443v10.65A.771.771,0,0,1,14.4,17.3ZM13.885,3.858a1.285,1.285,0,1,0,1.286-1.286A1.287,1.287,0,0,0,13.885,3.858ZM8.232,17.3l0-.074V15.836a2.829,2.829,0,0,1,0-5.443V.772A.771.771,0,0,1,9.768.7l0,.074v9.621a2.829,2.829,0,0,1,0,5.443v1.393a.772.772,0,0,1-1.54.074Zm-.517-4.188A1.285,1.285,0,1,0,9,11.829,1.287,1.287,0,0,0,7.714,13.115ZM2.06,17.3l0-.074V9.664a2.829,2.829,0,0,1,0-5.443V.772A.771.771,0,0,1,3.6.7l0,.074V4.221a2.829,2.829,0,0,1,0,5.443v7.565a.772.772,0,0,1-1.54.074ZM1.543,6.943A1.285,1.285,0,1,0,2.829,5.657,1.287,1.287,0,0,0,1.543,6.943Z" transform="translate(-0.047 -0.047)" fill="#6c757d" />
                            </g>
                        </svg></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><svg data-name="Icons/Tabler/Paperclip Copy 2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <rect data-name="Icons/Tabler/Bolt background" width="18" height="18" fill="none" />
                            <path d="M6.377,18a.7.7,0,0,1-.709-.6l-.006-.1V11.537H.709A.7.7,0,0,1,.1,11.193a.673.673,0,0,1-.014-.672l.054-.083L7.693.274,7.755.2,7.828.141,7.913.087,7.981.055l.087-.03L8.16.006,8.256,0h.037l.059.005.04.007.052.011.045.014.043.016.052.023.089.055.016.011A.765.765,0,0,1,8.756.2L8.82.273l.055.083.033.067.03.085L8.957.6l.007.094V6.461h4.952a.7.7,0,0,1,.613.345.672.672,0,0,1,.013.672l-.053.082L6.942,17.714A.691.691,0,0,1,6.377,18ZM7.548,2.821,2.1,10.153H6.369a.7.7,0,0,1,.7.6l.006.093v4.331l5.449-7.331H8.256a.7.7,0,0,1-.7-.6l-.007-.094Z" transform="translate(2.25 0)" fill="#6c757d" />
                        </svg></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="main-content">
        <div class="header border-bottom border-gray-200 header-fixed">
            <div class="container-fluid px-0">
                <div class="header-body px-3 px-xxl-5 py-3 py-lg-4">
                    <div class="row align-items-center">
                        <a href="javascript:void(0);" class="muze-hamburger d-block d-lg-none col-auto">
                            <img src="{!! asset('backend/muze/assets/svg/icons/hamburger1.svg') !!}" alt="img">
                            <img src="{!! asset('backend/muze/assets/svg/icons/close1.svg') !!}" style="width:20px;" class="menu-close" alt="img">
                        </a>
                        <a class="navbar-brand mx-auto d-lg-none col-auto px-0" href="#">
                            <img src="{!! asset('backend/muze/assets/svg/brand/logo.svg') !!}" alt="Muze">
                            <img src="{!! asset('backend/muze/assets/svg/brand/logo-white.svg') !!}" alt="Muze" class="white-logo">
                        </a>
                        <div class="col d-flex align-items-center">
                            <a href="javascript:void(0);" class="back-arrow bg-white circle circle-sm shadow border border-gray-200 rounded mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 16 16">
                                <g data-name="icons/tabler/chevrons-left" transform="translate(0)">
                                    <rect data-name="Icons/Tabler/Chevrons Left background" width="16" height="16" fill="none" />
                                    <path d="M14.468,14.531l-.107-.093-6.4-6.4a.961.961,0,0,1-.094-1.25l.094-.107,6.4-6.4a.96.96,0,0,1,1.451,1.25l-.094.108L10,7.36l5.72,5.721a.961.961,0,0,1,.094,1.25l-.094.107a.96.96,0,0,1-1.25.093Zm-7.68,0-.107-.093-6.4-6.4a.961.961,0,0,1-.093-1.25l.093-.107,6.4-6.4a.96.96,0,0,1,1.45,1.25l-.093.108L2.318,7.36l5.72,5.721a.96.96,0,0,1,.093,1.25l-.093.107a.96.96,0,0,1-1.25.093Z" transform="translate(0 1)" fill="#6C757D" />
                                </g>
                            </svg>
                        </a>
                        <div class="ps-3 header-search">
                            <form>
                                <div class="input-group bg-white border border-gray-300 rounded py-1 px-3">
                                    <img src="{!! asset('backend/muze/assets/svg/icons/search@14.svg') !!}" alt="Search">
                                    <input type="search" class="form-control border-0" placeholder="Search...">
                                </div>
                            </form>
                            <span class="muze-search d-lg-none ms-3">
                                <svg id="icons_tabler_close" data-name="icons/tabler/close" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                                    <rect data-name="Icons/Tabler/Close background" width="16" height="16" fill="none" />
                                    <path d="M.82.1l.058.05L6,5.272,11.122.151A.514.514,0,0,1,11.9.82l-.05.058L6.728,6l5.122,5.122a.514.514,0,0,1-.67.777l-.058-.05L6,6.728.878,11.849A.514.514,0,0,1,.1,11.18l.05-.058L5.272,6,.151.878A.514.514,0,0,1,.75.057Z" transform="translate(2 2)" fill="#1e1e1e" />
                                </svg>
                            </span>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light top-header-nav">
                            <div class="navbar-collapse">
                                <ul class="navbar-nav" id="accordionExample2">
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarDashboards2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <g data-name="icons/tabler/chart" transform="translate(0)">
                                                    <rect data-name="Icons/Tabler/Chart background" width="16" height="16" fill="none" />
                                                    <path d="M.686,13.257a.686.686,0,0,1-.093-1.365l.093-.006H15.314a.686.686,0,0,1,.093,1.365l-.093.006ZM.394,9.535l-.089-.05a.688.688,0,0,1-.24-.863l.05-.088L3.773,3.048a.684.684,0,0,1,.782-.272l.095.039L7.811,4.4,11.121.257a.687.687,0,0,1,.945-.122L12.142.2,15.8,3.858a.686.686,0,0,1-.893,1.036l-.077-.067L11.713,1.712,8.536,5.685a.684.684,0,0,1-.743.225l-.1-.04L4.578,4.313,1.256,9.294a.684.684,0,0,1-.862.24Z" transform="translate(0 1)" fill="#1e1e1e" />
                                                </g>
                                            </svg> &nbsp;<span class="ms-2">Dashboards</span>
                                        </a>
                                        <div class="collapse collapse-box" id="sidebarDashboards2" data-bs-parent="#accordionExample2">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="analytics.html" class="nav-link">Analytics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="project-management.html" class="nav-link">Project management</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="festive.html" class="nav-link">Festive</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarPages3" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages3">
                                            <svg data-name="Icons/Tabler/Bolt" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <rect data-name="Icons/Tabler/Page background" width="16" height="16" fill="none" />
                                                <path d="M1.975,14A1.977,1.977,0,0,1,0,12.026V1.975A1.977,1.977,0,0,1,1.975,0h5.04a.535.535,0,0,1,.249.069l.007,0h0a.534.534,0,0,1,.109.084l3.574,3.575a.536.536,0,0,1,.163.289h0l0,.013h0l0,.013v0l0,.011v.053s0,.009,0,.014v7.9A1.977,1.977,0,0,1,9.154,14Zm-.9-12.026V12.026a.9.9,0,0,0,.9.9H9.154a.9.9,0,0,0,.9-.9V4.667H7.718a1.255,1.255,0,0,1-1.248-1.12L6.461,3.41V1.077H1.975A.9.9,0,0,0,1.077,1.975ZM7.538,3.41a.179.179,0,0,0,.122.17l.057.01H9.29L7.538,1.838Z" transform="translate(2 1)" fill="#1e1e1e" />
                                            </svg> &nbsp;<span class="ms-2">Pages</span>
                                        </a>
                                        <div class="collapse collapse-box" id="sidebarPages3" data-bs-parent="#accordionExample2">
                                            <ul class="nav nav-sm flex-column" id="submenu4">
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#AccountPage3" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="AccountPage3">Account</a>
                                                    <div class="collapse collapse-box" id="AccountPage3" data-bs-parent="#submenu4">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="settings.html" class="nav-link active">Settings</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="billing.html" class="nav-link">Billing</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="invoice.html" class="nav-link">Invoice</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="api-keys.html" class="nav-link">API keys</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#UserProfile2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="UserProfile2">User Profile</a>
                                                    <div class="collapse collapse-box" id="UserProfile2" data-bs-parent="#submenu4">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="user-profile-general.html" class="nav-link">General</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="user-profile-activity.html" class="nav-link">Activity</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="user-profile-friends.html" class="nav-link">Friends</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="user-profile-groups.html" class="nav-link">Groups</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Projectspage2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Projectspage2">Projects</a>
                                                    <div class="collapse collapse-box" id="Projectspage2" data-bs-parent="#submenu4">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="all-projects.html" class="nav-link">All projects</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="new-project.html" class="nav-link">New project</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="project-details.html" class="nav-link">Project detail</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="teams.html" class="nav-link">Teams</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="help-center.html" class="nav-link">Help page</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="empty-state.html" class="nav-link">Empty State</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarAuthentication2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication2">
                                            <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <rect data-name="Icons/Tabler/Plug background" width="16" height="16" fill="none" />
                                                <path d="M6.7,16a2.378,2.378,0,0,1-2.373-2.234l0-.145V12.541H3.244A3.241,3.241,0,0,1,0,9.47L0,9.3V4.109a.649.649,0,0,1,.561-.643L.649,3.46H1.73V.649A.649.649,0,0,1,3.021.561l.005.088V3.46H6.919V.649A.649.649,0,0,1,8.211.561l.005.088V3.46H9.3a.649.649,0,0,1,.643.561l.006.088V9.3a3.241,3.241,0,0,1-3.071,3.239l-.173,0H5.621v1.081A1.081,1.081,0,0,0,6.593,14.7l.11.005H9.3a.649.649,0,0,1,.088,1.292L9.3,16Zm0-4.757A1.951,1.951,0,0,0,8.644,9.431l0-.134V4.757H1.3V9.3A1.951,1.951,0,0,0,3.11,11.239l.133,0H6.7Z" transform="translate(3)" fill="#1e1e1e" />
                                            </svg> &nbsp;<span class="ms-2">Authentication</span>
                                        </a>
                                        <div class="collapse collapse-box" id="sidebarAuthentication2" data-bs-parent="#accordionExample2">
                                            <ul class="nav nav-sm flex-column" id="submenu5">
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Signinpage2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Signinpage2">Sign in</a>
                                                    <div class="collapse collapse-box" id="Signinpage2" data-bs-parent="#submenu5">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="signin-simple.html" class="nav-link">Simple</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="signin-cover.html" class="nav-link">Cover</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Signuppage2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Signuppage2">Sign up</a>
                                                    <div class="collapse collapse-box" id="Signuppage2" data-bs-parent="#submenu5">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="signup-simple.html" class="nav-link">Simple</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="signup-cover.html" class="nav-link">Cover</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Resetpassword2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Resetpassword2">Reset password</a>
                                                    <div class="collapse collapse-box" id="Resetpassword2" data-bs-parent="#submenu5">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="reset-password-simple.html" class="nav-link">Simple</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="reset-password-cover.html" class="nav-link">Cover</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed" href="#Emailverification2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Emailverification2">Email verification</a>
                                                    <div class="collapse collapse-box" id="Emailverification2" data-bs-parent="#submenu5">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="verify-email-simple.html" class="nav-link">Simple</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="verify-email-cover.html" class="nav-link">Cover</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="404-error.html" class="nav-link">Error 404</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="500-error.html" class="nav-link">Error 500</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarApps2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <g data-name="Icons/Tabler/Paperclip" transform="translate(0 0)">
                                                    <rect data-name="Icons/Tabler/apps background" width="16" height="16" fill="none" />
                                                    <path d="M10.743,16a1.6,1.6,0,0,1-1.6-1.6V10.743a1.6,1.6,0,0,1,1.6-1.6H14.4a1.6,1.6,0,0,1,1.6,1.6V14.4A1.6,1.6,0,0,1,14.4,16Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,10.743ZM1.6,16A1.6,1.6,0,0,1,0,14.4V10.743a1.6,1.6,0,0,1,1.6-1.6H5.257a1.6,1.6,0,0,1,1.6,1.6V14.4a1.6,1.6,0,0,1-1.6,1.6Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,10.743Zm9.372-3.886a1.6,1.6,0,0,1-1.6-1.6V1.6a1.6,1.6,0,0,1,1.6-1.6H14.4A1.6,1.6,0,0,1,16,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM10.515,1.6V5.257a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,1.6ZM1.6,6.857A1.6,1.6,0,0,1,0,5.257V1.6A1.6,1.6,0,0,1,1.6,0H5.257a1.6,1.6,0,0,1,1.6,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM1.372,1.6V5.257a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,1.6Z" transform="translate(0 0)" fill="#1e1e1e" />
                                                </g>
                                            </svg> &nbsp;<span class="ms-2 position-relative">Apps <sup class="status bg-warning position-absolute">&nbsp;</sup></span>
                                        </a>
                                        <div class="collapse collapse-box" id="sidebarApps2" data-bs-parent="#accordionExample2">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="file-manager.html" class="nav-link">File manager</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="chat.html" class="nav-link">Chat</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="calendar.html" class="nav-link">Calendar</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../documentation/index.html" target="_blank">
                                            <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <rect data-name="Icons/Tabler/Paperclip background" width="16" height="16" fill="none" />
                                                <path d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z" transform="translate(1)" fill="#1e1e1e" />
                                            </svg> &nbsp;<span class="ms-2">Docs</span> <span class="docs-version">v1.0</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-auto d-flex flex-wrap align-items-center icon-blue-hover ps-0">
                        <a href="#" class="d-lg-none muze-search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 14 14">
                                <rect id="Icons_Tabler_Search_background" data-name="Icons/Tabler/Search background" width="14" height="14" fill="none" />
                                <path data-name="Combined Shape" d="M13.141,13.895l-.06-.052L9.1,9.859A5.569,5.569,0,1,1,9.859,9.1l3.983,3.983a.539.539,0,0,1-.7.813ZM1.077,5.564A4.487,4.487,0,1,0,5.564,1.077,4.492,4.492,0,0,0,1.077,5.564Z" fill="#1e1e1e" />
                            </svg>
                        </a>
                        <div class="dropdown grid-option">
                            <a href="#" class="text-dark ms-4 ms-xxl-5 mb-0 notification" data-bs-toggle="dropdown" aria-expanded="false" id="notification"><svg id="Icons_tabler_notification" data-name="Icons/tabler/notification" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <rect id="Icons_Tabler_Notification_background" data-name="Icons/Tabler/Notification background" width="24" height="24" fill="none" />
                                <path d="M6.162,19.63l-.005-.246v-.308H.926A.923.923,0,0,1,.471,17.35a4,4,0,0,0,1.956-2.66l.036-.229V10.726A9.492,9.492,0,0,1,7.292,2.873l.147-.08,0-.018A3.369,3.369,0,0,1,10.566.007L10.771,0a3.379,3.379,0,0,1,3.287,2.573l.045.22.147.08a9.556,9.556,0,0,1,4.806,7.541l.023.355-.007,3.582a4.016,4.016,0,0,0,2,3,.924.924,0,0,1-.329,1.719l-.126.008H15.387v.308a4.616,4.616,0,0,1-9.225.246ZM8,19.385a2.769,2.769,0,0,0,5.532.189l.007-.189v-.308H8ZM9.242,3.228l-.012.238-.005.045L9.2,3.63l-.039.113-.054.107-.035.055L9,4l-.036.038-.05.046-.1.074L8.7,4.219A7.7,7.7,0,0,0,4.332,10.46l-.022.309-.007,3.8a5.875,5.875,0,0,1-.94,2.541l-.084.119H18.266l-.007-.012a6.007,6.007,0,0,1-.983-2.452l-.043-.306V10.812a7.674,7.674,0,0,0-4.4-6.593.919.919,0,0,1-.518-.7l-.009-.132a1.538,1.538,0,0,0-3.069-.157Z" transform="translate(1.499)" fill="#1e1e1e" />
                            </svg>
                            <sup class="status bg-warning">&nbsp;</sup>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="notification">
                            <div class="dropdown-header d-flex align-items-center px-4 py-2 border-bottom border-gray-200">
                                <span class="fs-16 Montserrat-font font-weight-semibold text-black-600">Messages</span>
                                <div class="dropdown ms-auto">
                                    <a href="#" role="button" data-bs-toggle="" aria-expanded="false" id="morebtn2" class="btn btn-dark-100 btn-icon btn-sm rounded-circle my-1">
                                        <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                                            <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none" />
                                            <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d" />
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="morebtn2">
                                        <li class="dropdown-sub-title">
                                            <span>EXPORT AS</span>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <g data-name="Icons/Tabler/Share" transform="translate(0)">
                                                <rect data-name="Icons/Tabler/Code background" width="16" height="16" fill="none"></rect>
                                                <path d="M6.21,13.982a.6.6,0,0,1-.463-.647l.014-.08L9.044.455A.617.617,0,0,1,9.79.018a.6.6,0,0,1,.463.647l-.014.08-3.282,12.8a.612.612,0,0,1-.6.455A.629.629,0,0,1,6.21,13.982Zm5.458-3.357a.588.588,0,0,1-.059-.781l.059-.067L14.514,7,11.668,4.225a.588.588,0,0,1-.059-.781l.059-.068a.627.627,0,0,1,.8-.059l.069.059,3.282,3.2a.59.59,0,0,1,.059.781l-.059.068-3.282,3.2a.627.627,0,0,1-.87,0Zm-8.136.058-.069-.058L.18,7.424a.589.589,0,0,1-.059-.781L.18,6.575l3.282-3.2a.627.627,0,0,1,.87,0,.588.588,0,0,1,.059.781l-.059.068L1.486,7,4.333,9.776a.588.588,0,0,1,.059.781l-.059.068a.627.627,0,0,1-.8.058Z" transform="translate(0 1)" fill="#495057"></path>
                                            </g>
                                        </svg><span class="ms-2">HTML</span></a></li>
                                        <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <rect data-name="Icons/Tabler/File background" width="16" height="16" fill="none"></rect>
                                            <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2ZM3.9,12.718a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.282a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.281a.616.616,0,0,1-.059-1.228l.059,0h.821a.615.615,0,0,1,.059,1.228l-.059,0Z" transform="translate(2)" fill="#495057"></path>
                                        </svg><span class="ms-2">XML</span></a></li>
                                        <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <rect data-name="Icons/Tabler/Code02 background" width="16" height="16" fill="none"></rect>
                                            <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2Zm-.891,8.756a.615.615,0,0,1-.3-.768l.025-.058.683-1.366L7.449,9.1A.616.616,0,0,1,7.67,8.3l.055-.031a.615.615,0,0,1,.795.22l.031.055.821,1.641a.617.617,0,0,1,.029.484l-.029.067L8.55,12.378a.614.614,0,0,1-.825.275ZM4.2,12.433l-.031-.055-.821-1.641a.617.617,0,0,1-.029-.484l.029-.067.821-1.641a.615.615,0,0,1,1.126.492L5.269,9.1l-.684,1.366.684,1.366a.615.615,0,0,1-.22.794l-.055.031a.615.615,0,0,1-.795-.22Z" transform="translate(2)" fill="#495057"></path>
                                        </svg><span class="ms-2">JSON</span></a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                            <rect data-name="Icons/Tabler/Share background" width="16" height="16" fill="none"></rect>
                                            <path d="M9.846,12.923a3.07,3.07,0,0,1,.1-.768L5.516,9.874a3.077,3.077,0,1,1,0-3.748L9.943,3.845a3.084,3.084,0,1,1,.541,1.106L6.057,7.232a3.087,3.087,0,0,1,0,1.537l4.427,2.281a3.075,3.075,0,1,1-.638,1.874Zm1.231,0a1.846,1.846,0,1,0,.2-.84q-.011.028-.025.055l-.014.025A1.836,1.836,0,0,0,11.077,12.923ZM1.231,8a1.846,1.846,0,0,0,3.487.845.623.623,0,0,1,.027-.061l.017-.031a1.845,1.845,0,0,0,0-1.508l-.017-.031a.622.622,0,0,1-.027-.061A1.846,1.846,0,0,0,1.231,8ZM12.923,4.923a1.846,1.846,0,1,0-1.682-1.086l.013.024q.014.027.025.056A1.848,1.848,0,0,0,12.923,4.923Z" fill="#495057"></path>
                                        </svg><span class="ms-2">Share</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-sm nav-tabs-line" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#Inbox" role="tab" aria-selected="true">Inbox</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#Archived" role="tab" aria-selected="false">Archived</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Inbox" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="dropdown-body" data-simplebar>
                                        <a href="#" class="dropdown-item text-wrap">
                                            <div class="media">
                                                <span class="d-flex align-items-center">
                                                    <span class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                                    <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm3.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                                </span>
                                                <div class="media-body ps-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-16 font-weight-semibold dropdown-title">John Wick</span>
                                                        <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                                    </div>
                                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Hey, I just found out what’s causing the server to crash!</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item text-wrap unread">
                                            <div class="media">
                                                <span class="d-flex align-items-center">
                                                    <span class="avatar-status avatar-sm-status avatar-primary position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                                    <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm4.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                                </span>
                                                <div class="media-body ps-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-16 font-weight-semibold dropdown-title">Yi Chun-Hwa</span>
                                                        <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                                    </div>
                                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">What about some coffee this afternoon to discuss?</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item text-wrap">
                                            <div class="media">
                                                <span class="d-flex align-items-center">
                                                    <span class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                                    <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm5.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                                </span>
                                                <div class="media-body ps-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-16 font-weight-semibold dropdown-title">Su Xinyi</span>
                                                        <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                                    </div>
                                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">I finally got the present I mentioned to Steven, you’ll love it</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item text-wrap">
                                            <div class="media">
                                                <span class="d-flex align-items-center">
                                                    <span class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                                    <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm6.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                                </span>
                                                <div class="media-body ps-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-16 font-weight-semibold dropdown-title">Jordi Santiago</span>
                                                        <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                                    </div>
                                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Hey, I just found out what’s causing the server to crash!</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Archived" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="dropdown-body" data-simplebar>
                                        <a href="#" class="dropdown-item text-wrap">
                                            <div class="media">
                                                <span class="d-flex align-items-center">
                                                    <span class="avatar-status avatar-sm-status avatar-primary position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                                    <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm4.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                                </span>
                                                <div class="media-body ps-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-16 font-weight-semibold dropdown-title">Yi Chun-Hwa</span>
                                                        <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                                    </div>
                                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">What about some coffee this afternoon to discuss?</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item text-wrap unread">
                                            <div class="media">
                                                <span class="d-flex align-items-center">
                                                    <span class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                                    <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm5.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                                </span>
                                                <div class="media-body ps-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-16 font-weight-semibold dropdown-title">Su Xinyi</span>
                                                        <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                                    </div>
                                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">I finally got the present I mentioned to Steven, you’ll love it</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item text-wrap">
                                            <div class="media">
                                                <span class="d-flex align-items-center">
                                                    <span class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                                    <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm3.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                                </span>
                                                <div class="media-body ps-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-16 font-weight-semibold dropdown-title">John Wick</span>
                                                        <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                                    </div>
                                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Hey, I just found out what’s causing the server to crash!</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item text-wrap">
                                            <div class="media">
                                                <span class="d-flex align-items-center">
                                                    <span class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                                    <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm6.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                                </span>
                                                <div class="media-body ps-1">
                                                    <div class="d-flex align-items-center">
                                                        <span class="fs-16 font-weight-semibold dropdown-title">Jordi Santiago</span>
                                                        <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                                    </div>
                                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Hey, I just found out what’s causing the server to crash!</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer text-center py-2 border-top border-gray-50">
                                <a href="#" class="btn btn-link link-dark my-2">View all<svg class="ms-2" data-name="Icons/Tabler/Chevron Down" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                    <rect data-name="Icons/Tabler/Chevron Right background" width="10" height="10" fill="none" />
                                    <path d="M.163.163A.556.556,0,0,1,.886.109L.948.163,5.393,4.607a.556.556,0,0,1,.054.723l-.054.062L.948,9.837a.556.556,0,0,1-.839-.723l.054-.062L4.214,5,.163.948A.556.556,0,0,1,.109.225Z" transform="translate(2.5)" fill="#1E1E1E" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown grid-option">
                    <a href="#" class="text-dark ms-4 ms-xxl-5 h5 mb-0" data-bs-toggle="dropdown" aria-expanded="false" id="chat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Icons_Tabler_Settings" data-name="Icons/Tabler/Settings" transform="translate(0 0)">
                                <rect id="Icons_Tabler_Message_background" data-name="Icons/Tabler/Message background" width="24" height="24" fill="none" />
                                <path d="M1.029,24H.976l-.046,0-.1-.014L.74,23.958l-.089-.03-.082-.038-.095-.053-.089-.065-.05-.043-.066-.065-.042-.05-.065-.089a.943.943,0,0,1-.054-.095L.072,23.35l-.016-.045-.022-.073-.015-.065-.007-.039L0,23.07l0-.1V5.144A5.122,5.122,0,0,1,4.967,0l.177,0H18.857A5.122,5.122,0,0,1,24,4.967l0,.177v8.228a5.121,5.121,0,0,1-4.967,5.139l-.177,0H6.939L1.723,23.73l-.072.061-.076.051-.04.024-.046.024-.1.043-.073.024-.093.023-.1.014-.046,0ZM5.144,2.057A3.081,3.081,0,0,0,2.061,4.988l0,.155V20.488l3.73-3.729a1.032,1.032,0,0,1,.61-.3l.116-.007H18.857a3.081,3.081,0,0,0,3.082-2.931l0-.154V5.144a3.081,3.081,0,0,0-2.932-3.082l-.154,0Z" transform="translate(0 0)" fill="#1e1e1e" />
                            </g>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="chat">
                        <div class="dropdown-header d-flex align-items-center px-4 py-2">
                            <span class="fs-16 Montserrat-font font-weight-semibold text-black-600">Notification</span>
                            <div class="dropdown ms-auto">
                                <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="morebtn3" class="btn btn-dark-100 btn-icon btn-sm rounded-circle my-1">
                                    <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                                        <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none" />
                                        <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d" />
                                    </svg>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="morebtn3">
                                    <li class="dropdown-sub-title">
                                        <span>EXPORT AS</span>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g data-name="Icons/Tabler/Share" transform="translate(0)">
                                            <rect data-name="Icons/Tabler/Code background" width="16" height="16" fill="none"></rect>
                                            <path d="M6.21,13.982a.6.6,0,0,1-.463-.647l.014-.08L9.044.455A.617.617,0,0,1,9.79.018a.6.6,0,0,1,.463.647l-.014.08-3.282,12.8a.612.612,0,0,1-.6.455A.629.629,0,0,1,6.21,13.982Zm5.458-3.357a.588.588,0,0,1-.059-.781l.059-.067L14.514,7,11.668,4.225a.588.588,0,0,1-.059-.781l.059-.068a.627.627,0,0,1,.8-.059l.069.059,3.282,3.2a.59.59,0,0,1,.059.781l-.059.068-3.282,3.2a.627.627,0,0,1-.87,0Zm-8.136.058-.069-.058L.18,7.424a.589.589,0,0,1-.059-.781L.18,6.575l3.282-3.2a.627.627,0,0,1,.87,0,.588.588,0,0,1,.059.781l-.059.068L1.486,7,4.333,9.776a.588.588,0,0,1,.059.781l-.059.068a.627.627,0,0,1-.8.058Z" transform="translate(0 1)" fill="#495057"></path>
                                        </g>
                                    </svg><span class="ms-2">HTML</span></a></li>
                                    <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <rect data-name="Icons/Tabler/File background" width="16" height="16" fill="none"></rect>
                                        <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2ZM3.9,12.718a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.282a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.281a.616.616,0,0,1-.059-1.228l.059,0h.821a.615.615,0,0,1,.059,1.228l-.059,0Z" transform="translate(2)" fill="#495057"></path>
                                    </svg><span class="ms-2">XML</span></a></li>
                                    <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <rect data-name="Icons/Tabler/Code02 background" width="16" height="16" fill="none"></rect>
                                        <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2Zm-.891,8.756a.615.615,0,0,1-.3-.768l.025-.058.683-1.366L7.449,9.1A.616.616,0,0,1,7.67,8.3l.055-.031a.615.615,0,0,1,.795.22l.031.055.821,1.641a.617.617,0,0,1,.029.484l-.029.067L8.55,12.378a.614.614,0,0,1-.825.275ZM4.2,12.433l-.031-.055-.821-1.641a.617.617,0,0,1-.029-.484l.029-.067.821-1.641a.615.615,0,0,1,1.126.492L5.269,9.1l-.684,1.366.684,1.366a.615.615,0,0,1-.22.794l-.055.031a.615.615,0,0,1-.795-.22Z" transform="translate(2)" fill="#495057"></path>
                                    </svg><span class="ms-2">JSON</span></a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <rect data-name="Icons/Tabler/Share background" width="16" height="16" fill="none"></rect>
                                        <path d="M9.846,12.923a3.07,3.07,0,0,1,.1-.768L5.516,9.874a3.077,3.077,0,1,1,0-3.748L9.943,3.845a3.084,3.084,0,1,1,.541,1.106L6.057,7.232a3.087,3.087,0,0,1,0,1.537l4.427,2.281a3.075,3.075,0,1,1-.638,1.874Zm1.231,0a1.846,1.846,0,1,0,.2-.84q-.011.028-.025.055l-.014.025A1.836,1.836,0,0,0,11.077,12.923ZM1.231,8a1.846,1.846,0,0,0,3.487.845.623.623,0,0,1,.027-.061l.017-.031a1.845,1.845,0,0,0,0-1.508l-.017-.031a.622.622,0,0,1-.027-.061A1.846,1.846,0,0,0,1.231,8ZM12.923,4.923a1.846,1.846,0,1,0-1.682-1.086l.013.024q.014.027.025.056A1.848,1.848,0,0,0,12.923,4.923Z" fill="#495057"></path>
                                    </svg><span class="ms-2">Share</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-body" data-simplebar>
                            <a href="#" class="dropdown-item text-wrap">
                                <div class="media">
                                    <span class="d-flex align-items-center">
                                        <span class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                        <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/svg/icons/google-icon.svg') !!}" alt="Facebook"></span>
                                    </span>
                                    <div class="media-body ps-1">
                                        <div class="d-flex align-items-center">
                                            <span class="fs-16 font-weight-semibold dropdown-title">Google</span>
                                            <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                        </div>
                                        <span class="d-block small text-gray-600 mt-1 dropdown-content">Hey, I just found out what’s causing the server to crash!</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item text-wrap unread">
                                <div class="media">
                                    <span class="d-flex align-items-center">
                                        <span class="avatar-status avatar-sm-status avatar-primary position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                        <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                    </span>
                                    <div class="media-body ps-1">
                                        <div class="d-flex align-items-center">
                                            <span class="fs-16 font-weight-semibold dropdown-title">Dai Jiang</span>
                                            <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                        </div>
                                        <span class="d-block small text-gray-600 mt-1 dropdown-content">What about some coffee this afternoon to discuss?</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item text-wrap">
                                <div class="media">
                                    <span class="d-flex align-items-center">
                                        <span class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                        <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/svg/icons/facebook3.svg') !!}" alt="Facebook"></span>
                                    </span>
                                    <div class="media-body ps-1">
                                        <div class="d-flex align-items-center">
                                            <span class="fs-16 font-weight-semibold dropdown-title">Facebook</span>
                                            <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                        </div>
                                        <span class="d-block small text-gray-600 mt-1 dropdown-content">I finally got the present I mentioned to Steven, you’ll love it</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item text-wrap">
                                <div class="media">
                                    <span class="d-flex align-items-center">
                                        <span class="avatar-status avatar-sm-status avatar-offline position-relative me-2 end-0 bottom-0">&nbsp;</span>
                                        <span class="avatar avatar-xs shadow-sm rounded-circle me-2 d-flex align-items-center justify-content-center bg-white"><img src="{!! asset('backend/muze/assets/img/avatar-sm2.png') !!}" alt="Facebook"><span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span></span>
                                    </span>
                                    <div class="media-body ps-1">
                                        <div class="d-flex align-items-center">
                                            <span class="fs-16 font-weight-semibold dropdown-title">Trashae Hubbard</span>
                                            <span class="font-weight-semibold tiny text-gray-600 ms-auto">Just now</span>
                                        </div>
                                        <span class="d-block small text-gray-600 mt-1 dropdown-content">Hey, I just found out what’s causing the server to crash!</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center py-2 border-top border-gray-50">
                            <a href="#" class="btn btn-link link-dark my-2">View all<svg class="ms-2" data-name="Icons/Tabler/Chevron Down" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                <rect data-name="Icons/Tabler/Chevron Right background" width="10" height="10" fill="none" />
                                <path d="M.163.163A.556.556,0,0,1,.886.109L.948.163,5.393,4.607a.556.556,0,0,1,.054.723l-.054.062L.948,9.837a.556.556,0,0,1-.839-.723l.054-.062L4.214,5,.163.948A.556.556,0,0,1,.109.225Z" transform="translate(2.5)" fill="#1E1E1E" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown grid-option">
                <a href="#" class="text-dark ms-4 ms-xxl-5 h5 mb-0" data-bs-toggle="dropdown" aria-expanded="false" id="grid">
                    <svg data-name="Icons/Tabler/Settings" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <rect data-name="Icons/Tabler/apps background" width="24" height="24" fill="none" />
                        <path d="M16.115,24a2.4,2.4,0,0,1-2.4-2.4V16.115a2.4,2.4,0,0,1,2.4-2.4H21.6a2.4,2.4,0,0,1,2.4,2.4V21.6A2.4,2.4,0,0,1,21.6,24Zm-.343-7.885V21.6a.343.343,0,0,0,.343.343H21.6a.343.343,0,0,0,.343-.343V16.115a.343.343,0,0,0-.343-.343H16.115A.343.343,0,0,0,15.772,16.115ZM2.4,24A2.4,2.4,0,0,1,0,21.6V16.115a2.4,2.4,0,0,1,2.4-2.4H7.885a2.4,2.4,0,0,1,2.4,2.4V21.6a2.4,2.4,0,0,1-2.4,2.4Zm-.343-7.885V21.6a.343.343,0,0,0,.343.343H7.885a.343.343,0,0,0,.343-.343V16.115a.343.343,0,0,0-.343-.343H2.4A.343.343,0,0,0,2.057,16.115Zm14.058-5.829a2.4,2.4,0,0,1-2.4-2.4V2.4a2.4,2.4,0,0,1,2.4-2.4H21.6A2.4,2.4,0,0,1,24,2.4V7.885a2.4,2.4,0,0,1-2.4,2.4ZM15.772,2.4V7.885a.343.343,0,0,0,.343.343H21.6a.343.343,0,0,0,.343-.343V2.4a.343.343,0,0,0-.343-.343H16.115A.343.343,0,0,0,15.772,2.4ZM2.4,10.286A2.4,2.4,0,0,1,0,7.885V2.4A2.4,2.4,0,0,1,2.4,0H7.885a2.4,2.4,0,0,1,2.4,2.4V7.885a2.4,2.4,0,0,1-2.4,2.4ZM2.057,2.4V7.885a.343.343,0,0,0,.343.343H7.885a.343.343,0,0,0,.343-.343V2.4a.343.343,0,0,0-.343-.343H2.4A.343.343,0,0,0,2.057,2.4Z" transform="translate(0 0)" fill="#1e1e1e" />
                    </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="grid">
                    <div class="dropdown-header d-flex align-items-center px-4 py-2">
                        <span class="fs-16 Montserrat-font font-weight-semibold text-black-600">Apps</span>
                        <div class="dropdown ms-auto">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="morebtn4" class="btn btn-dark-100 btn-icon btn-sm rounded-circle my-1">
                                <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none" />
                                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="morebtn4">
                                <li class="dropdown-sub-title">
                                    <span>EXPORT AS</span>
                                </li>
                                <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <g data-name="Icons/Tabler/Share" transform="translate(0)">
                                        <rect data-name="Icons/Tabler/Code background" width="16" height="16" fill="none"></rect>
                                        <path d="M6.21,13.982a.6.6,0,0,1-.463-.647l.014-.08L9.044.455A.617.617,0,0,1,9.79.018a.6.6,0,0,1,.463.647l-.014.08-3.282,12.8a.612.612,0,0,1-.6.455A.629.629,0,0,1,6.21,13.982Zm5.458-3.357a.588.588,0,0,1-.059-.781l.059-.067L14.514,7,11.668,4.225a.588.588,0,0,1-.059-.781l.059-.068a.627.627,0,0,1,.8-.059l.069.059,3.282,3.2a.59.59,0,0,1,.059.781l-.059.068-3.282,3.2a.627.627,0,0,1-.87,0Zm-8.136.058-.069-.058L.18,7.424a.589.589,0,0,1-.059-.781L.18,6.575l3.282-3.2a.627.627,0,0,1,.87,0,.588.588,0,0,1,.059.781l-.059.068L1.486,7,4.333,9.776a.588.588,0,0,1,.059.781l-.059.068a.627.627,0,0,1-.8.058Z" transform="translate(0 1)" fill="#495057"></path>
                                    </g>
                                </svg><span class="ms-2">HTML</span></a></li>
                                <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <rect data-name="Icons/Tabler/File background" width="16" height="16" fill="none"></rect>
                                    <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2ZM3.9,12.718a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.282a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.281a.616.616,0,0,1-.059-1.228l.059,0h.821a.615.615,0,0,1,.059,1.228l-.059,0Z" transform="translate(2)" fill="#495057"></path>
                                </svg><span class="ms-2">XML</span></a></li>
                                <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <rect data-name="Icons/Tabler/Code02 background" width="16" height="16" fill="none"></rect>
                                    <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2Zm-.891,8.756a.615.615,0,0,1-.3-.768l.025-.058.683-1.366L7.449,9.1A.616.616,0,0,1,7.67,8.3l.055-.031a.615.615,0,0,1,.795.22l.031.055.821,1.641a.617.617,0,0,1,.029.484l-.029.067L8.55,12.378a.614.614,0,0,1-.825.275ZM4.2,12.433l-.031-.055-.821-1.641a.617.617,0,0,1-.029-.484l.029-.067.821-1.641a.615.615,0,0,1,1.126.492L5.269,9.1l-.684,1.366.684,1.366a.615.615,0,0,1-.22.794l-.055.031a.615.615,0,0,1-.795-.22Z" transform="translate(2)" fill="#495057"></path>
                                </svg><span class="ms-2">JSON</span></a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <rect data-name="Icons/Tabler/Share background" width="16" height="16" fill="none"></rect>
                                    <path d="M9.846,12.923a3.07,3.07,0,0,1,.1-.768L5.516,9.874a3.077,3.077,0,1,1,0-3.748L9.943,3.845a3.084,3.084,0,1,1,.541,1.106L6.057,7.232a3.087,3.087,0,0,1,0,1.537l4.427,2.281a3.075,3.075,0,1,1-.638,1.874Zm1.231,0a1.846,1.846,0,1,0,.2-.84q-.011.028-.025.055l-.014.025A1.836,1.836,0,0,0,11.077,12.923ZM1.231,8a1.846,1.846,0,0,0,3.487.845.623.623,0,0,1,.027-.061l.017-.031a1.845,1.845,0,0,0,0-1.508l-.017-.031a.622.622,0,0,1-.027-.061A1.846,1.846,0,0,0,1.231,8ZM12.923,4.923a1.846,1.846,0,1,0-1.682-1.086l.013.024q.014.027.025.056A1.848,1.848,0,0,0,12.923,4.923Z" fill="#495057"></path>
                                </svg><span class="ms-2">Share</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown-body" data-simplebar>
                        <a href="#" class="dropdown-item text-wrap">
                            <div class="media align-items-center">
                                <span class="me-3">
                                    <img class="avatar avatar-xs rounded-0" src="{!! asset('backend/muze/assets/svg/icons/google-analytics-3.svg') !!}" alt="Icon">
                                </span>
                                <div class="media-body">
                                    <span class="fs-16 font-weight-semibold dropdown-title">Google Analytics</span>
                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Instant stats for your apps and websites</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item text-wrap">
                            <div class="media align-items-center">
                                <span class="me-3">
                                    <img class="avatar avatar-xs rounded-0" src="{!! asset('backend/muze/assets/svg/icons/dribbble-icon-1.svg') !!}" alt="Icon">
                                </span>
                                <div class="media-body">
                                    <span class="fs-16 font-weight-semibold dropdown-title me-2">Dribbble</span><span class="badge badge-primary py-1 px-2 text-uppercase">New</span>
                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Instant stats for your apps and websites</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item text-wrap">
                            <div class="media align-items-center">
                                <span class="me-3">
                                    <img class="avatar avatar-xs rounded-0" src="{!! asset('backend/muze/assets/svg/icons/evernote-icon.svg') !!}" alt="Icon">
                                </span>
                                <div class="media-body">
                                    <span class="fs-16 font-weight-semibold dropdown-title">Evernote</span>
                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Instant stats for your apps and websites</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item text-wrap">
                            <div class="media align-items-center">
                                <span class="me-3">
                                    <img class="avatar avatar-xs rounded-0" src="{!! asset('backend/muze/assets/svg/icons/dropbox.svg') !!}" alt="Icon">
                                </span>
                                <div class="media-body">
                                    <span class="fs-16 font-weight-semibold dropdown-title">Dropbox</span>
                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Instant stats for your apps and websites</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item text-wrap">
                            <div class="media align-items-center">
                                <span class="me-3">
                                    <img class="avatar avatar-xs rounded-0" src="{!! asset('backend/muze/assets/svg/icons/ios.svg') !!}" alt="Icon">
                                </span>
                                <div class="media-body">
                                    <span class="fs-16 font-weight-semibold dropdown-title">Apple</span>
                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Instant stats for your apps and websites</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item text-wrap">
                            <div class="media align-items-center">
                                <span class="me-3">
                                    <img class="avatar avatar-xs rounded-0" src="{!! asset('backend/muze/assets/svg/icons/google-analytics-3.svg') !!}" alt="Icon">
                                </span>
                                <div class="media-body">
                                    <span class="fs-16 font-weight-semibold dropdown-title">Google Analytics</span>
                                    <span class="d-block small text-gray-600 mt-1 dropdown-content">Instant stats for your apps and websites</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-footer text-center py-2 border-top border-gray-50">
                        <a href="#" class="btn btn-link link-dark my-2">View all<svg class="ms-2" data-name="Icons/Tabler/Chevron Down" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                            <rect data-name="Icons/Tabler/Chevron Right background" width="10" height="10" fill="none" />
                            <path d="M.163.163A.556.556,0,0,1,.886.109L.948.163,5.393,4.607a.556.556,0,0,1,.054.723l-.054.062L.948,9.837a.556.556,0,0,1-.839-.723l.054-.062L4.214,5,.163.948A.556.556,0,0,1,.109.225Z" transform="translate(2.5)" fill="#1E1E1E" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="dropdown profile-dropdown">
            <a href="#" class="avatar avatar-sm avatar-circle ms-4 ms-xxl-5" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuButton">
                <img class="avatar-img" src="{!! asset('backend/muze/assets/img/avatar1.png') !!}" alt="Avatar">
                <span class="avatar-status avatar-sm-status avatar-success">&nbsp;</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li class="pt-2 px-4">
                    <span class="fs-16 font-weight-bold text-black-600 Montserrat-font me-2">{{ auth()->user()->name }}</span><img src="{!! asset('backend/muze/assets/svg/icons/fill-check.svg') !!}" alt="icon">
                    <small class="text-gray-600 pb-3 d-block"><a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a></small>
                </li>
                <li class="dropdown">
                    <a class="dropdown-item" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="Status" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <rect id="Icons_Tabler_Circle_background" data-name="Icons/Tabler/Circle background" width="16" height="16" fill="none" />
                        <path id="Oval" d="M6,12a6,6,0,1,1,6-6A6.007,6.007,0,0,1,6,12ZM6,1.384A4.616,4.616,0,1,0,10.616,6,4.621,4.621,0,0,0,6,1.384Z" transform="translate(2 2)" fill="#495057" />
                    </svg><span class="ms-2">Status</span><img src="{!! asset('backend/muze/assets/svg/icons/right-arrow@10.svg') !!}" alt="Right Arrow" class="ms-auto"></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Status">
                        <li><a class="dropdown-item" href="#"><span class="status online"></span><span class="ms-2">Available</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="status dnd"></span><span class="ms-2">Busy</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="status away"></span><span class="ms-2">Away</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="status offline"></span><span class="ms-2">Offline</span></a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <rect id="Icons_Tabler_User_background" data-name="Icons/Tabler/User background" width="16" height="16" fill="none" />
                        <path d="M11.334,16H.667a.665.665,0,0,1-.661-.568L0,15.343v-1.75A4.179,4.179,0,0,1,4.029,9.44l.193,0H7.778A4.186,4.186,0,0,1,12,13.4l0,.191v1.75a.661.661,0,0,1-.576.651ZM4.222,10.749a2.869,2.869,0,0,0-2.884,2.683l-.005.162v1.094h9.334V13.594A2.857,2.857,0,0,0,8.1,10.767l-.162-.013-.164,0ZM6,8.314A4.2,4.2,0,0,1,1.778,4.157a4.223,4.223,0,0,1,8.445,0A4.2,4.2,0,0,1,6,8.314Zm0-7A2.87,2.87,0,0,0,3.111,4.157a2.889,2.889,0,0,0,5.778,0A2.87,2.87,0,0,0,6,1.313Z" transform="translate(2)" fill="#495057" />
                    </svg><span class="ms-2">Profile</span></a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <rect data-name="Icons/Tabler/Bookmark background" width="16" height="16" fill="none" />
                        <path d="M.687,16a.686.686,0,0,1-.681-.595L0,15.314V2.514A2.516,2.516,0,0,1,2.361,0l.153,0H8a2.516,2.516,0,0,1,2.51,2.361l0,.153v12.8A.688.688,0,0,1,9.827,16a.671.671,0,0,1-.27-.057L9.475,15.9,5.257,13.37,1.039,15.9A.684.684,0,0,1,.687,16Zm4.57-4.115a.678.678,0,0,1,.256.05l.1.048L9.142,14.1V2.514A1.139,1.139,0,0,0,8.116,1.377L8,1.372H2.514L2.4,1.377A1.147,1.147,0,0,0,1.377,2.4l-.005.116V14.1L4.9,11.983A.687.687,0,0,1,5.257,11.885Z" transform="translate(3)" fill="#495057" />
                    </svg><span class="ms-2">Bookmarks</span></a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <livewire:admin.logout/>
            </ul>
        </div>
        <a href="javascript:void(0);" class="btn btn-dark btn-lg customize-btn ms-4 ms-xxl-5"><svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
            <rect data-name="Icons/Tabler/Contrast background" width="24" height="24" fill="none" />
            <path d="M0,12A12,12,0,1,1,12,24,12.014,12.014,0,0,1,0,12Zm1.847,0A10.153,10.153,0,1,0,12,1.847,10.165,10.165,0,0,0,1.847,12Zm9.234,6.242,0-.089V5.845A.923.923,0,0,1,12,4.923a7.077,7.077,0,0,1,0,14.153A.923.923,0,0,1,11.081,18.243Z" fill="#fff" />
        </svg><span class="ps-2">Customize</span></a>
    </div>
</div>
</div>
<div class="double-header-nav">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-collapse">
            <ul class="navbar-nav" id="accordionExample3">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#sideDashboard" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sideDashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g data-name="icons/tabler/chart" transform="translate(0)">
                                <rect data-name="Icons/Tabler/Chart background" width="16" height="16" fill="none" />
                                <path d="M.686,13.257a.686.686,0,0,1-.093-1.365l.093-.006H15.314a.686.686,0,0,1,.093,1.365l-.093.006ZM.394,9.535l-.089-.05a.688.688,0,0,1-.24-.863l.05-.088L3.773,3.048a.684.684,0,0,1,.782-.272l.095.039L7.811,4.4,11.121.257a.687.687,0,0,1,.945-.122L12.142.2,15.8,3.858a.686.686,0,0,1-.893,1.036l-.077-.067L11.713,1.712,8.536,5.685a.684.684,0,0,1-.743.225l-.1-.04L4.578,4.313,1.256,9.294a.684.684,0,0,1-.862.24Z" transform="translate(0 1)" fill="#1e1e1e" />
                            </g>
                        </svg> &nbsp;<span class="ms-2">Dashboard</span>
                    </a>
                    <div class="collapse collapse-box" id="sideDashboard" data-bs-parent="#accordionExample3">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{url('/admin/dashboard')}}" class="nav-link">Report</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/division')}}" class="nav-link">Divisi</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/dashboard')}}" target="_blank">
                        <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <rect data-name="Icons/Tabler/Paperclip background" width="16" height="16" fill="none" />
                            <path d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z" transform="translate(1)" fill="#1e1e1e" />
                        </svg> &nbsp;<span class="ms-2">Report</span> <span class="docs-version">v1.0</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/division')}}" target="_blank">
                        <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <rect data-name="Icons/Tabler/Paperclip background" width="16" height="16" fill="none" />
                            <path d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z" transform="translate(1)" fill="#1e1e1e" />
                        </svg> &nbsp;<span class="ms-2">Divisi</span> <span class="docs-version">v1.0</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">
                        <svg data-name="Icons/Tabler/Bolt" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <rect data-name="Icons/Tabler/Page background" width="16" height="16" fill="none" />
                            <path d="M1.975,14A1.977,1.977,0,0,1,0,12.026V1.975A1.977,1.977,0,0,1,1.975,0h5.04a.535.535,0,0,1,.249.069l.007,0h0a.534.534,0,0,1,.109.084l3.574,3.575a.536.536,0,0,1,.163.289h0l0,.013h0l0,.013v0l0,.011v.053s0,.009,0,.014v7.9A1.977,1.977,0,0,1,9.154,14Zm-.9-12.026V12.026a.9.9,0,0,0,.9.9H9.154a.9.9,0,0,0,.9-.9V4.667H7.718a1.255,1.255,0,0,1-1.248-1.12L6.461,3.41V1.077H1.975A.9.9,0,0,0,1.077,1.975ZM7.538,3.41a.179.179,0,0,0,.122.17l.057.01H9.29L7.538,1.838Z" transform="translate(2 1)" fill="#1e1e1e" />
                        </svg> &nbsp;<span class="ms-2">Docs</span> <span class="docs-version">v1.0</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
</div>
</div>
<div class="px-3 px-xxl-5 py-3 py-lg-4 border-bottom border-gray-200 after-header">
    <div class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col">
                <span class="text-uppercase tiny text-gray-600 Montserrat-font font-weight-semibold">Account</span>
                <h1 class="h2 mb-0 lh-sm">@yield('pageTitle')</h1>
            </div>
            <div class="col-auto d-flex align-items-center my-2 my-sm-0">
                
                <a href="#" wire:click="create" class="btn btn-lg btn-warning"><svg class="me-2" data-name="icons/tabler/user" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                    <rect data-name="Icons/Tabler/User background" width="16" height="16" fill="none" />
                    <path d="M11.334,16H.667a.665.665,0,0,1-.661-.568L0,15.343v-1.75A4.179,4.179,0,0,1,4.029,9.44l.193,0H7.778A4.186,4.186,0,0,1,12,13.4l0,.191v1.75a.661.661,0,0,1-.576.651ZM4.222,10.749a2.869,2.869,0,0,0-2.884,2.683l-.005.162v1.094h9.334V13.594A2.857,2.857,0,0,0,8.1,10.767l-.162-.013-.164,0ZM6,8.314A4.2,4.2,0,0,1,1.778,4.157a4.223,4.223,0,0,1,8.445,0A4.2,4.2,0,0,1,6,8.314Zm0-7A2.87,2.87,0,0,0,3.111,4.157a2.889,2.889,0,0,0,5.778,0A2.87,2.87,0,0,0,6,1.313Z" transform="translate(2)" fill="#1e1e1e" />
                </svg><span>My Profile</span>
            </a>
        </div>
    </div>
</div>
</div>


<div class="p-3 p-xxl-5">
    <div class="card rounded-12 shadow-dark-80 border border-gray-50 mb-3 mb-xl-5">
        <div class="card-body px-0 p-md-4">
            @yield('content')
        </div>
    </div>
</div>



</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{!! asset('backend/muze/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
{{--
    <script data-cfasync="false" src="{!! asset('backend/muze/assets/js/email-decode.min.js') !!}"></script> 
    <script src="{!! asset('backend/muze/assets/vendor/lodash/lodash.min.js') !!}"></script>
    <script src="{!! asset('backend/muze/assets/vendor/simplebar/dist/simplebar.min.js') !!}"></script>
    <script src="{!! asset('backend/muze/assets/js/theme-custom.js') !!}"></script>
    <script src="{!! asset('backend/muze/assets/js/rocket-loader.min.js') !!}"></script>
    <script defer src="{!! asset('backend/muze/assets/js/beacon.min.js') !!}"></script> 
    --}}
    
    <script type="text/javascript">
        window.livewire.on('showConfirmDelete', () => {
            $('#deleteModal').modal('show');
        });
        window.livewire.on('hideConfirmDelete', () => {
            $('#deleteModal').modal('hide');
        });
        window.livewire.on('showForm', () => {
            $('#showForm').modal('show');
        });
        window.livewire.on('hideForm', () => {
            $('#showForm').modal('hide');
        });
    </script>
    
</body>
</html>