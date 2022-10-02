<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('public/Admin_Panel/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('public/Admin_Panel/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('public/Admin_Panel/js/demo/chart-pie-demo.js') }}"></script>


<!-- Page level custom scripts -->
<script src="{{ asset('public/Admin_Panel/js/toastr.js') }}"></script>
<script src="{{asset('public/Admin_Panel/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/Admin_Panel/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/Admin_Panel/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/Admin_Panel/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/Admin_Panel/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('public/Admin_Panel/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('public/Admin_Panel/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('public/Admin_Panel/js/demo/datatables-demo.js')}}"></script>

  <!-- Toastr -->

  <script src="{{asset('public/Admin_Panel/js/toastr.js')}}"></script>


<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    "timeOut": "80000",
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>

<script type="text/javascript">

let counts;
counts = document.getElementById("count");

    function myFunction2() 
    {
    counts.value = 0;
    var checkBox = document.getElementById("checkDriver");
    if (checkBox.checked == true){
    value =   Number(counts.value)
    value += 510
    counts.value = value
    } 

  var passing_year = document.getElementById("pass_year");
  var year = Number(passing_year.value);

  if (year >= 1966 && year <= 2007) {
    value =  Number(counts.value)
    value += 1020
    counts.value = value
  } else if (year >= 2008 && year <= 2015){
    value =   Number(counts.value)
    value += 815
    counts.value = value
  } else if(year >= 2016 && year <= 2022){
    value =   Number(counts.value)
    value += 510
    counts.value = value
  } else {

  }
  
}


function myFunction3() {
	
  var checkBox = document.getElementById("checkDriver");
  if (checkBox.checked == true){
    value =   Number(counts.value)
    value += 510
    counts.value = value
  } else {
    value =   Number(counts.value)
    value -= 510
    counts.value = value
  }
}
</script>

</body>

</html>
