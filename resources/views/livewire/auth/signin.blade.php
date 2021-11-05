
<div class="d-flex flex-column flex-root">

<div class="d-flex flex-column flex-lg-row flex-column-fluid">

<div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">

<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">

<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">

<a href="../../index.html" class="py-9 pt-lg-20">
<img alt="Logo" src="{!! asset('backend/assets/media/logos/default.svg') !!}" class="h-40px" />
</a>


<h1 class="fw-bolder text-white fs-2qx pb-5 pb-md-10">Welcome to Good</h1>


<p class="fw-bold fs-2 text-white">Plan your blog post by choosing a topic creating 
<br />an outline and checking facts</p>

</div>


<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(../../assets/media/illustrations/sketchy-1/2.png)"></div>

</div>

</div>


<div class="d-flex flex-column flex-lg-row-fluid py-10">

<div class="d-flex flex-center flex-column flex-column-fluid">

<div class="w-lg-500px p-10 p-lg-15 mx-auto">

<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">

<div class="text-center mb-10">

<h1 class="text-dark mb-3">Sign In to Good</h1>


<div class="text-gray-400 fw-bold fs-4">New Here? 

<button wire:click="register" type="button" class="link-primary fw-bolder">REGISTER</button>
</div>
</div>


<div class="fv-row mb-10">
<label class="form-label fs-6 fw-bolder text-dark">Email</label>
<input type="text" wire:model.lazy="email"
class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
placeholder="Alamat Email">
@error('email')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>

<div class="ffv-row mb-10">
<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
<input type="password" wire:model.lazy="password"
class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" autocomplete="off" placeholder="Password">
@error('password')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>



<div class="text-center">

<button type="submit" class="btn btn-lg btn-primary fw-bolder me-3 my-2">
<span class="indicator-label">Sign In</span>
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