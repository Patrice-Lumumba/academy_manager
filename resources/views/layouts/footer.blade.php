
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <a href="https://github.com/Patrice-Lumumba" target="_blank">Patrice.</a> {{date('Y')}}</span>
        </div>
    </div>
</footer>

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

<script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<script src="{{asset('admin/js/sb-admin-2.min.js')}}">
    // alert()
</script>

<script src="{{asset('admin/vendor/chart/Chart.min.js')}}"></script>



@stack('scripts')

<script>
    setTimeout(function(){
        $('.alert').slideUp();
    },4000);
</script>
