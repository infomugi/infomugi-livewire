<script src="{!! asset('backend/assets/plugins/global/plugins.bundle.js') !!}"></script>
<script src="{!! asset('backend/assets/js/scripts.bundle.js') !!}"></script>
{{-- <script src="{!! asset('backend/assets/js/custom/authentication/sign-in/general.js') !!}"></script> --}}

<script>
    @if(session()->has('success'))
    toastr.success('{{ session('success') }}')
    @elseif(session()->has('error'))
    toastr.error('{{ session('error') }}')
    @endif
</script>

</body>
</html>