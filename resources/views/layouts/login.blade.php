@include('layouts\partials\tpl_header')

<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-column flex-lg-row-auto bg-dark w-xl-600px positon-xl-relative">
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                    
                    <a href="#" class="py-9 pt-lg-20">
                        <img alt="Logo" src="{!! asset('backend/assets/media/logos/default.svg') !!}" class="h-40px" />
                    </a>
                    
                    <h1 class="fw-bolder text-white fs-2qx pb-5 pb-md-10">Starterkit Admin</h1>
                    <p class="fw-bold fs-2 text-white">Laravel Livewire</p>
                </div>
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({!! asset('backend/assets/media/illustrations/sketchy-1/2.png') !!})"></div>
            </div>
        </div>
        
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                    
                    @yield('content')
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>
</div>
</div>

@include('layouts\partials\tpl_footer')