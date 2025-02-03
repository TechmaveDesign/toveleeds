<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
	<p class="mb-0">2024 &copy; TOVELEEDS</p>
	<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">TechMave Software</a></p>
</div>

</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery-3.7.1.min.js"></script>

<!-- iconify icon -->
<script src="assets/js/iconify.js"></script>

<!-- Feather Icon JS -->
<script src="assets/js/feather.min.js"></script>

<!-- Slimscroll JS -->
<script src="assets/js/jquery.slimscroll.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Chart JS -->
<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<!-- Sweetalert 2 -->
<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>




<!-- Datatable JS -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/contact-data.js"></script>

<!-- Datetimepicker JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="assets/js/daterangepicker-data.js"></script>

<!-- Data Table JS -->
<script src="vendors/datatables.net/js/dataTables.min.js"></script>
<script src="vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="vendors/datatables.net-select/js/dataTables.select.min.js"></script>

<link rel="stylesheet" type="text/css" href="assets/customplugins/buttons.dataTables.min.css">
<script type="text/javascript" src="assets/customplugins/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="assets/customplugins/jszip.min.js"></script>
<script type="text/javascript" src="assets/customplugins/pdfmake.min.js"></script>
<script type="text/javascript" src="assets/customplugins/vfs_fonts.js"></script>
<script type="text/javascript" src="assets/customplugins/buttons.html5.min.js"></script>
<script type="text/javascript" src="assets/customplugins/buttons.colVis.min.js"></script>
<!-- Select2 JS -->
<script src="assets/plugins/select2/js/select2.min.js"></script>

<!-- Daterangepikcer JS -->
<script src="assets/js/moment.js" ></script>
<script src="assets/js/bootstrap-datetimepicker.min.js" ></script>
<!-- Custom JS -->
<script src="assets/js/theme-script.js"></script>



	<!-- Datetimepicker JS -->
	<script src="assets/js/bootstrap-datetimepicker.min.js" type=""></script>

	<!-- Daterangepikcer JS -->
	<script src="assets/plugins/daterangepicker/daterangepicker.js" type=""></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type=""></script>

  <script src="assets/js/custom-select2.js"></script>

  <!-- ------------------------------------
submit trigger processing js
-------------------------------------- -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const forms = document.querySelectorAll('form');

  forms.forEach(form => {
    form.addEventListener('submit', function(event) {
      const submitButton = form.querySelector('button[type="submit"].canvasSubmit_button');
      if (submitButton) {
        event.preventDefault(); 
        showLoader(submitButton);

        setTimeout(() => {
          hideLoader(submitButton);
          form.submit(); 
        }, 2000); 
      }
    });
  });

  function showLoader(button) {
    button.dataset.originalText = button.innerHTML; 
    button.innerHTML = 'Processing <span class="loaderButton_custom"></span>';
    button.disabled = true; 
  }

  function hideLoader(button) {
    button.innerHTML = button.dataset.originalText; 
    button.disabled = false; 
  }
});
</script>
    <!-- ------------------------------------
submit trigger processing js end
-------------------------------------- -->

<script>
    $(document).ready(function() {
        $('.select2').select2({
            // placeholder: "Select an option",
            // allowClear: true
        });
    });
</script>

</body>

</html>