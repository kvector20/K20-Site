  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2017-{{ Carbon\Carbon::now()->year }} <a href="{{ url('/') }}"> K Vector</a>.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 2.2.3 -->
<script src="{{ asset('/admin_style/js/jquery-3.1.0.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('/admin_style/js/popper.min.js') }}"></script>
<script src="{{ asset('/admin_style/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/admin_style/js/fastclick.min.js') }}"></script>
<!-- admin_styleLTE App -->
<script src="{{ asset('/admin_style/js/app.min.js') }}"></script>
<!-- admin_styleLTE for demo purposes -->
<script src="{{ asset('/admin_style/js/demo.js') }}"></script>

@yield('footer')
