<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Head-->
    <?php include 'common/head.php' ?>

    <link rel="stylesheet"
          href="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"/>

    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url() ?>assets/libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/manage.css" type="text/css"/>
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
                        <h2>Manage queues</h2>
                        <small>Manage queues for each doctor.</small>
                    </div>
                    <div class="box-divider m-a-0"></div>
                    <div class="box-body">
                        <form role="form" action="<?php echo site_url('New_patient/register'); ?>" method="post"
                              data-parsley-validate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="padding">
                                        <div class="form-group row">
                                            <label for="inputDate" class="col-sm-2 form-control-label">Date</label>
                                            <div class="col-sm-10">
                                                <div class='input-group date' id='datetimepicker'>
                                                    <input type='text' class="form-control" id="inputDate"
                                                           name="date"
                                                           placeholder="Date"
                                                           data-parsley-required/>
                                                    <span class="input-group-addon">
                                                                              <span class="fa fa-calendar"></span>
                                                                              </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="padding">
                                    <div class="form-group row">
                                            <label for="inputDoctor"
                                                   class="col-sm-2 form-control-label">Doctor</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputDoctor"
                                                       name="doctor" placeholder="Doctor"
                                                       data-parsley-minlength="10"
                                                       data-parsley-maxlength="10">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputStartTime" class="col-sm-2 form-control-label">Start time</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputStartTime"
                                                       name="startTime" placeholder="Start time"
                                                       data-parsley-required data-parsley-length="[1, 100]">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEndTime" class="col-sm-2 form-control-label">End time</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEndTime"
                                                       name="endTime" placeholder="End time"
                                                       data-parsley-length="[1, 100]">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputAverageTime" class="col-sm-2 form-control-label">Average time</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputAverageTime"
                                                       name="averageTime" placeholder="Average time"
                                                       data-parsley-required data-parsley-length="[1, 100]">
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-md">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn white">Add queue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper"
                             class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table
                                            class="table table-striped b-t b-b dataTable no-footer table-hover"
                                            id="DataTables_Table_0" role="grid"
                                            aria-describedby="DataTables_Table_0_info" style="width: 1432px;">
                                        <thead>
                                        <tr role="row">
                                            <th style="width: 251px;" class="sorting_asc" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="Doctor: activate to sort column descending"
                                                aria-sort="ascending">Doctor
                                            </th>
                                            <th style="width: 323px;" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="Last name: activate to sort column ascending">Current number
                                            </th>
                                            <th style="width: 322px;" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="Job role: activate to sort column ascending">Start time
                                            </th>
                                            <th style="width: 178px;" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="NIC: activate to sort column ascending">End time
                                            </th>
                                            <th style="width: 178px;" class="sorting" tabindex="0"
                                                aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                aria-label="Telephone: activate to sort column ascending">Average time
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

<script src="<?php echo base_url() ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/jquery/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    var table;
    $(document).ready(function () {
        // Datatables
        table = $('#DataTables_Table_0').DataTable({
            "processing": true, // Feature control the processing indicator.
            "serverSide": true, // Feature control DataTables' server-side processing mode.
            "order": [], // Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Queues/get_queue_list_ajax'); ?>",
                "type": "POST"
            },

            // Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], // First column / numbering column
                    "orderable": false, // Set not orderable
                },
            ],
            "bInfo": false,
            "paging": false
        });

        $('#DataTables_Table_0 tbody').on('click', 'tr', function () {
            var data = table.row(this).data();
            alert('You clicked on ' + data[0] + '\'s row');
        });

        $('#datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD',
            defaultDate: moment(),
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });

        $("#datetimepicker").on("dp.change", function(e) {
            table.search(e.date.format("YYYY-MM-DD")).draw();
        });

        // Set search to today
        table.search(moment().format("YYYY-MM-DD")).draw();
    });    
</script>
</body>
</html>