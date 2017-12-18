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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/parsley.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/edit.css" type="text/css"/>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header">
                                <h2>Reservation management</h2>
                                <small>Manage you reserved positions in queues
                                </small>
                            </div>
                            <div class="box-divider m-a-0"></div>
                            <div class="box-body">
                                <form role="form" action="<?php echo site_url('New_employee/register'); ?>"
                                      method="post"
                                      data-parsley-validate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="padding">
                                                <div class="form-group row form-sub-group">
                                                    <small>Select queue</small>
                                                </div>
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
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Doctor</label>
                                                    <div class="col-sm-10">
                                                        <select id="doctorSelect" class="form-control input-c">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 form-control-label">Queue</label>
                                                    <div class="col-sm-10">
                                                        <select id="queueSelect" class="form-control input-c">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="box-divider m-a-0"></div>
                                                </div>
                                                <div class="form-group row form-sub-group">
                                                    <small>Details</small>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputStartTime" class="col-sm-2 form-control-label">Start time</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputStartTime"
                                                               name="startTime" placeholder="Start time" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEndTime" class="col-sm-2 form-control-label">End time</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEndTime"
                                                               name="endTime" placeholder="End time" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputAverageTime" class="col-sm-2 form-control-label">Average time</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputAverageTime"
                                                               name="averageTime" placeholder="Average time" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="padding">
                                                <div class="form-group row form-sub-group">
                                                    <small>Update</small>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputCurrentNo" class="col-sm-2 form-control-label">Current number</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputCurrentNo"
                                                               name="currentNo" placeholder="Current number"
                                                               data-parsley-required data-parsley-type="integer">
                                                    </div>
                                                </div>
                                                <div class="form-group row m-t-md">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn white">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
<script src="<?php echo base_url() ?>bower_components/parsleyjs/dist/parsley.min.js"></script>

<script type="text/javascript">
    var datepicker;

    $(document).ready(function () {
        datepicker = $('#datetimepicker').datetimepicker({
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

        datepicker.on("dp.change", function (e) {
            populateSelectDoctor();
        });

        $('#doctorSelect').on("change", function (e) {
            populateSelectQueue();
        });

        $('#queueSelect').on("change", function (e) {

        });

        // Manually trigger the doctor list
        populateSelectDoctor();

        function populateSelectDoctor() {
            $.ajax({
                url: "<?php echo site_url('Reservations/get_day_doctors'); ?>",
                type: 'POST',
                data: {
                    date : datepicker.data('DateTimePicker').date().format("YYYY-MM-DD")
                },
                dataType: 'json',
                success: function(res) {
                    select = document.getElementById('doctorSelect');

                    // Remove previous options
                    while (select.firstChild) {
                        select.removeChild(select.firstChild);
                    }

                    // Add new options
                    for (var i = 0; i < res.length; i++){
                        var opt = document.createElement('option');
                        opt.value = res[i]['id'];
                        opt.innerHTML = res[i]['first_name'] + ' ' + res[i]['last_name'];
                        select.appendChild(opt);
                    }

                    populateSelectQueue();
                }
            });
        }

        function populateSelectQueue(){
            $.ajax({
                url: "<?php echo site_url('Reservations/get_day_doctor_queues'); ?>",
                type: 'POST',
                data: {
                    date : datepicker.data('DateTimePicker').date().format("YYYY-MM-DD"),
                    doctor_id : document.getElementById('doctorSelect').value
                },
                dataType: 'json',
                success: function(res) {
                    select = document.getElementById('queueSelect');

                    // Remove previous options
                    while (select.firstChild) {
                        select.removeChild(select.firstChild);
                    }

                    // Add new options
                    for (var i = 0; i < res.length; i++){
                        var opt = document.createElement('option');
                        opt.value = res[i]['id'];
                        opt.innerHTML = res[i]['start_time'] + ' : ' + res[i]['end_time'];
                        select.appendChild(opt);
                    }
                }
            });
        }

        function refreshQueue(){
            queue  = document.getElementById('queueSelect');
        }
    });
</script>
</body>
</html>