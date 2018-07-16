<script>
    @if(Session::has('success'))
    toastr.options = {
            "debug": false,
            "positionClass": "toast-top-center",
            "onclick": null,
            "fadeIn": 300,
            "fadeOut": 1000,
            "timeOut": 1200,
            "extendedTimeOut": 1000
        }
        toastr.success("{{ Session::get('success') }}")
    @endif

    @if(Session::has('info'))
    toastr.options = {
            "debug": false,
            "positionClass": "toast-top-center",
            "onclick": null,
            "fadeIn": 300,
            "fadeOut": 2000,
            "timeOut": 1200,
            "extendedTimeOut": 1000
        }
        toastr.info("{{ Session::get('info') }}")
        @endif

        @if(Session::has('error'))
    toastr.options = {
            "debug": false,
            "positionClass": "toast-top-center",
            "onclick": null,
            "fadeIn": 300,
            "fadeOut": 2000,
            "timeOut": 1000,
            "extendedTimeOut": 1000
        }
        toastr.error("{{ Session::get('error') }}")
        @endif
</script>