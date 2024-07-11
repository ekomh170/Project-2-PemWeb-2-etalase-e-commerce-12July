  <!--   Core JS Files   -->
  <script src="{{ asset('assets/admin') }}/js/core/jquery-3.7.1.min.js"></script>
  <script src="{{ asset('assets/admin') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('assets/admin') }}/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="{{ asset('assets/admin') }}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Chart JS -->
  <script src="{{ asset('assets/admin') }}/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="{{ asset('assets/admin') }}/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="{{ asset('assets/admin') }}/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="{{ asset('assets/admin') }}/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="{{ asset('assets/admin') }}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="{{ asset('assets/admin') }}/js/plugin/jsvectormap/jsvectormap.min.js"></script>
  <script src="{{ asset('assets/admin') }}/js/plugin/jsvectormap/world.js"></script>

  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>



  <script>
      @if (session('success'))
          Swal.fire({
              icon: 'success',
              title: 'Success',
              text: '{{ session('success') }}',
          });
      @endif

      @if (session('error'))
          Swal.fire({
              icon: 'error',
              title: 'Error',
              text: '{{ session('error') }}',
          });
      @endif
  </script>

  <!-- Kaiadmin JS -->
  <script src="{{ asset('assets/admin') }}/js/kaiadmin.min.js"></script>

  @yield('datatable-js')

  </body>

  </html>
