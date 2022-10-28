</div>
<!-- javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- simplebar -->
<script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
<!-- Icons -->
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<!-- Chart -->
<script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
<!-- Main Js -->
<script src="{{ asset('assets/js/plugins.init.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    @if (Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @endif

    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
</script>
@yield('script')
</body>

</html>
