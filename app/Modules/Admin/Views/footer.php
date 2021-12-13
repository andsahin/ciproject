<footer class="footer">
            <span class="text-right">                
                Copyright <a target="_blank" href="#">Company</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="https://bootstrap24.com" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
            </span>
        </footer>

        <script src="<?= base_url('public/assets/admin/js/modernizr.min.js') ?>"></script>
        <script src="<?= base_url('public/assets/admin/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('public/assets/admin/js/moment.min.js') ?>"></script>

        <script src="<?= base_url('public/assets/admin/js/popper.min.js') ?>"></script>
        <script src="<?= base_url('public/assets/admin/js/bootstrap.min.js') ?>"></script>

        <script src="<?= base_url('public/assets/admin/js/detect.js') ?>"></script>
        <script src="<?= base_url('public/assets/admin/js/fastclick.js') ?>"></script>
        <script src="<?= base_url('public/assets/admin/js/jquery.blockUI.js') ?>"></script>
        <script src="<?= base_url('public/assets/admin/js/jquery.nicescroll.js') ?>"></script>

        <!-- App js -->
        <script src="<?= base_url('public/assets/admin/js/admin.js') ?>"></script>

    </div>
    <!-- END main -->

    <!-- BEGIN Java Script for this page -->
    <script src="<?= base_url('public/assets/admin/plugins/chart.js/Chart.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/admin/plugins/datatables/datatables.min.js') ?>"></script>

    <!-- Counter-Up-->
    <script src="<?= base_url('public/assets/admin/plugins/waypoints/lib/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/admin/plugins/counterup/jquery.counterup.min.js') ?>"></script>

    <!-- dataTabled data -->
    <script src="<?= base_url('public/assets/admin/data/data_datatables.js') ?>"></script>

    <!-- Charts data -->
    <script src="<?= base_url('public/assets/admin/data/data_charts_dashboard.js') ?>"></script>
    <script>
        $(document).on('ready', function() {
            // data-tables
            $('#dataTable').DataTable({
                data: dataSet,
                columns: [{
                    title: "Name"
                }, {
                    title: "Position"
                }, {
                    title: "Office"
                }, {
                    title: "Extn."
                }, {
                    title: "Date"
                }, {
                    title: "Salary"
                }]
            });

            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        });
    </script>
    <!-- END Java Script for this page -->

</body>

</html>