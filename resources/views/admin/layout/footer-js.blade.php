<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="{{ asset('assetsAdmin/js/jquery.min.js')}}"></script>
<script src="{{ asset('assetsAdmin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assetsAdmin/js/moment.js')}}"></script>


<!-- *************
    ************ Vendor Js Files *************
************* -->

<!-- Apex Charts -->
<script src="{{ asset('assetsAdmin/vendor/apex/apexcharts.min.js')}}"></script>
<script src="{{ asset('assetsAdmin/vendor/apex/examples/mixed/hospital-line-column-graph.js')}}"></script>
<script src="{{ asset('assetsAdmin/vendor/apex/examples/mixed/hospital-line-area-graph.js')}}"></script>
<script src="{{ asset('assetsAdmin/vendor/apex/examples/bar/hospital-patients-by-age.js')}}"></script>

<!-- Rating JS -->
<script src="{{ asset('assetsAdmin/vendor/rating/raty.js')}}"></script>
<script src="{{ asset('assetsAdmin/vendor/rating/raty-custom.js')}}"></script>

<!-- Main Js Required -->
<script src="{{ asset('assetsAdmin/js/main.js')}}"></script>
<!-- Confirm Delete -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::alert')
@stack('custom-scripts')
