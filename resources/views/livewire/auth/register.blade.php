<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-column flex-lg-row-auto bg-dark w-xl-600px positon-xl-relative">
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                    
                    <a href="#" class="py-9 pt-lg-20">
                        <img alt="Logo" src="{!! asset('backend/assets/media/logos/default.svg') !!}" class="h-40px" />
                    </a>
                    
                    <h1 class="fw-bolder text-white fs-2qx pb-5 pb-md-10">Starterkit Admin</h1>
                    <p class="fw-bold fs-2 text-white">Build by Livewire</p>
                </div>
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({!! asset('backend/assets/media/illustrations/sketchy-1/2.png') !!})"></div>
            </div>
        </div>
        
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                    
                    <div class="text-center mb-10">
                        
                        <h1 class="text-dark mb-3">Registrasi Akun</h1>
                        <div class="text-gray-400 fw-bold fs-4">Sudah Punya Akun ? 
                            
                            <a wire:click="login" type="button" class="link-dark fw-bolder">Login</a>
                        </div>
                    </div>
                    
                    <form wire:submit.prevent="store" class="form w-100">
                        
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-label fs-6 fw-bolder text-dark">Nama Lengkap</label>
                            <input type="text" wire:model.lazy="name"
                            class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror"
                            placeholder="Nama Lengkap">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <input type="text" wire:model.lazy="email"
                            class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                            placeholder="Alamat E-mail">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-label fs-6 fw-bolder text-dark">Password</label>
                            <input type="password" wire:model.lazy="password"
                            class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-label fs-6 fw-bolder text-dark">Password</label>
                            <input type="password" wire:model.lazy="password_confirmation"
                            class="form-control form-control-lg form-control-solid @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password">
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-dark fw-bolder me-3 my-2">
                                <span class="indicator-label">Daftar</span>
                                <span class="indicator-progress">Please wait... 
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            
                        </form>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>