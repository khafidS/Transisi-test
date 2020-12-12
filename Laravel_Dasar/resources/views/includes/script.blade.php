    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
  <!-- Bootstrap core JavaScript-->
  {{-- <script src="{{url('backend/vendor/jquery/jquery.min.js')}}"></script> --}}
  <script src="{{url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{url('backend/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{url('backend/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{url('backend/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{url('backend/js/demo/chart-pie-demo.js')}}"></script>

  {{-- ckeditor --}}

  <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

  

{{-- js ckeditor --}}

<script>
  ClassicEditor
          .create( document.querySelector( '.ckeditor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>

{{-- end js ckeditor --}}
