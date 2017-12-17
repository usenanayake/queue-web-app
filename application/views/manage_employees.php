<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Head-->
    <?php include 'common/head.php' ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.css">
</head>
<body>
<div class="app" id="app">
    <!--    Sidebar-->
    <?php include 'common/aside.php' ?>
    <!--    Content-->
    <div id="content" class="app-content box-shadow-z0" role="main">
        <!--        Header-->
        <?php include 'common/header.php' ?>
        <div ui-view class="app-body" id="view">
            <!--            Content-->
            <div class="padding">
                <div class="box">
                    <div class="box-header">
                        <h2>Manage Employees</h2>
                    </div>
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper"
                             class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table 

                                        class="table table-striped b-t b-b dataTable no-footer"
                                           id="DataTables_Table_0" role="grid"
                                           aria-describedby="DataTables_Table_0_info" style="width: 1432px;">
                                        <thead>
                                        <tr role="row">
                                            <th style="width: 251px;" class="sorting_asc" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="First name: activate to sort column descending"
                                                aria-sort="ascending">First name
                                            </th>
                                            <th style="width: 323px;" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="Last name: activate to sort column ascending">Last name
                                            </th>
                                            <th style="width: 322px;" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="Job role: activate to sort column ascending">Job role
                                            </th>
                                            <th style="width: 178px;" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="NIC: activate to sort column ascending">NIC
                                            </th>
                                            <th style="width: 178px;" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="Telephone: activate to sort column ascending">Telephone
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Foot-->
<?php include 'common/foot.php' ?>

<script src="<?php echo base_url() ?>assets/libs/jquery/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    var table;
    $(document).ready(function() {
        // Datatables
        table = $('#DataTables_Table_0').DataTable({
            "processing": true, // Feature control the processing indicator.
            "serverSide": true, // Feature control DataTables' server-side processing mode.
            "order": [], // Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Manage_employees/get_employee_list_ajax'); ?>",
                "type": "POST"
            },

            // Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [ 0 ], // First column / numbering column
                    "orderable": false, // Set not orderable
                },
            ],
        });
    });
</script>
</body>
</html>