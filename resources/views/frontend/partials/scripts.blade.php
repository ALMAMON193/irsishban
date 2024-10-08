 <!-- plugins:js -->
 <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js') }}"></script>
 <script src="{{ asset('backend/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
 <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
 <script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
 <script src="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
 <!-- End plugin js for this page -->
 <!-- inject:js -->
 <script src="{{ asset('backend/assets/js/off-canvas.js') }}"></script>
 <script src="{{ asset('backend/assets/js/hoverable-collapse.js') }}"></script>
 <script src="{{ asset('backend/assets/js/misc.js') }}"></script>
 <script src="{{ asset('backend/assets/js/settings.js') }}"></script>
 <script src="{{ asset('backend/assets/js/todolist.js') }}"></script>
 <!-- endinject -->
 <!-- Custom js for this page -->
 <script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
 <!-- End custom js for this page -->


 @stack('script')
 {{-- toastr start --}}
 <script>
     $(document).ready(function() {
         toastr.options.timeOut = 10000;
         toastr.options.positionClass = 'toast-top-right';

         @if (Session::has('t-success'))
             toastr.options = {
                 'closeButton': true,
                 'debug': false,
                 'newestOnTop': true,
                 'progressBar': true,
                 'positionClass': 'toast-top-right',
                 'preventDuplicates': false,
                 'showDuration': '1000',
                 'hideDuration': '1000',
                 'timeOut': '5000',
                 'extendedTimeOut': '1000',
                 'showEasing': 'swing',
                 'hideEasing': 'linear',
                 'showMethod': 'fadeIn',
                 'hideMethod': 'fadeOut',
             };
             toastr.success("{{ session('t-success') }}");
         @endif

         @if (Session::has('t-error'))
             toastr.options = {
                 'closeButton': true,
                 'debug': false,
                 'newestOnTop': true,
                 'progressBar': true,
                 'positionClass': 'toast-top-right',
                 'preventDuplicates': false,
                 'showDuration': '1000',
                 'hideDuration': '1000',
                 'timeOut': '5000',
                 'extendedTimeOut': '1000',
                 'showEasing': 'swing',
                 'hideEasing': 'linear',
                 'showMethod': 'fadeIn',
                 'hideMethod': 'fadeOut',
             };
             toastr.error("{{ session('t-error') }}");
         @endif

         @if (Session::has('t-info'))
             toastr.options = {
                 'closeButton': true,
                 'debug': false,
                 'newestOnTop': true,
                 'progressBar': true,
                 'positionClass': 'toast-top-right',
                 'preventDuplicates': false,
                 'showDuration': '1000',
                 'hideDuration': '1000',
                 'timeOut': '5000',
                 'extendedTimeOut': '1000',
                 'showEasing': 'swing',
                 'hideEasing': 'linear',
                 'showMethod': 'fadeIn',
                 'hideMethod': 'fadeOut',
             };
             toastr.info("{{ session('t-info') }}");
         @endif

         @if (Session::has('t-warning'))
             toastr.options = {
                 'closeButton': true,
                 'debug': false,
                 'newestOnTop': true,
                 'progressBar': true,
                 'positionClass': 'toast-top-right',
                 'preventDuplicates': false,
                 'showDuration': '1000',
                 'hideDuration': '1000',
                 'timeOut': '5000',
                 'extendedTimeOut': '1000',
                 'showEasing': 'swing',
                 'hideEasing': 'linear',
                 'showMethod': 'fadeIn',
                 'hideMethod': 'fadeOut',
             };
             toastr.warning("{{ session('t-warning') }}");
         @endif
     });
 </script>
 {{-- toastr end --}}

 {{-- dropify start --}}
 <script>
     $(document).ready(function() {
         $('.dropify').dropify();
     });
 </script>
 {{-- dropify end --}}
