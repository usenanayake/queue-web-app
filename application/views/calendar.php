<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Head-->
    <?php include 'common/head.php' ?>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/libs/jquery/parsleyjs/dist/parsley.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/libs/jquery/fullcalendar/dist/fullcalendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/libs/jquery/fullcalendar/dist/fullcalendar.theme.css">
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
                <div class="row m-b">
                    <div class="col-sm-4 m-b-sm">
                        <button type="button" class="btn btn-sm white" id="todayview">today</button>
                    </div>
                    <div class="col-sm-8 text-sm-right">
                        <div class="btn-group m-l-xs">
                            <button class="btn btn-sm white" id="dayview">Day</button>
                            <button class="btn btn-sm white" id="weekview">Week</button>
                            <button class="btn btn-sm white" id="monthview">Month</button>
                        </div>
                    </div>
                </div>
                <div class="fullcalendar fc fc-ltr fc-unthemed" ui-jp="fullCalendar" ui-options="{
              header: {
              left: 'prev',
              center: 'title',
              right: 'next'
              },
              defaultDate: '2015-12-12',
              editable: true,
              eventLimit: false,
              events: [
              {
              title: 'All Day Event',
              start: '2015-12-01',
              className: ['white']
              },
              {
              title: 'Long Event',
              start: '2015-12-07',
              end: '2015-12-10',
              className: ['danger']
              },
              {
              id: 999,
              title: 'Repeating Event',
              start: '2015-12-09T16:00:00',
              className: ['white']
              },
              {
              id: 999,
              title: 'Repeating Event',
              start: '2015-12-16T16:00:00',
              className: ['green']
              },
              {
              title: 'Conference',
              start: '2015-12-11',
              end: '2015-12-13',
              className: ['white']
              },
              {
              title: 'Meeting',
              start: '2015-12-12T10:30:00',
              end: '2015-12-12T12:30:00',
              className: ['white']
              },
              {
              title: 'Lunch',
              start: '2015-12-12T12:00:00',
              className: ['white']
              },
              {
              title: 'Meeting',
              start: '2015-12-12T14:30:00',
              className: ['white']
              },
              {
              title: 'Happy Hour',
              start: '2015-12-12T17:30:00',
              className: ['white']
              },
              {
              title: 'Dinner',
              start: '2015-12-12T20:00:00',
              className: ['white']
              },
              {
              title: 'Birthday Party',
              start: '2015-12-13T07:00:00',
              className: ['white']
              },
              {
              title: 'Click for Google',
              url: 'http://google.com/',
              start: '2015-12-28',
              className: ['white']
              }
              ]
              }">
                    <div class="fc-toolbar">
                        <div class="fc-left"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left fc-corner-right"><span class="fc-icon fc-icon-left-single-arrow"></span></button></div>
                        <div class="fc-right"><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-left fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div>
                        <div class="fc-center">
                            <h2>December 2015</h2>
                        </div>
                        <div class="fc-clear"></div>
                    </div>
                    <div class="fc-view-container" style="">
                        <div class="fc-view fc-month-view fc-basic-view" style="">
                            <table>
                                <thead class="fc-head">
                                <tr>
                                    <td class="fc-widget-header">
                                        <div class="fc-row fc-widget-header">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th class="fc-day-header fc-widget-header fc-sun">Sun</th>
                                                    <th class="fc-day-header fc-widget-header fc-mon">Mon</th>
                                                    <th class="fc-day-header fc-widget-header fc-tue">Tue</th>
                                                    <th class="fc-day-header fc-widget-header fc-wed">Wed</th>
                                                    <th class="fc-day-header fc-widget-header fc-thu">Thu</th>
                                                    <th class="fc-day-header fc-widget-header fc-fri">Fri</th>
                                                    <th class="fc-day-header fc-widget-header fc-sat">Sat</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                </thead>
                                <tbody class="fc-body">
                                <tr>
                                    <td class="fc-widget-content">
                                        <div class="fc-day-grid-container" style="">
                                            <div class="fc-day-grid">
                                                <div class="fc-row fc-week fc-widget-content" style="height: 171px;">
                                                    <div class="fc-bg">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2015-11-29"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2015-11-30"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-12-01"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-12-02"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-12-03"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-12-04"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-12-05"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2015-11-29">29</td>
                                                                <td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2015-11-30">30</td>
                                                                <td class="fc-day-number fc-tue fc-past" data-date="2015-12-01">1</td>
                                                                <td class="fc-day-number fc-wed fc-past" data-date="2015-12-02">2</td>
                                                                <td class="fc-day-number fc-thu fc-past" data-date="2015-12-03">3</td>
                                                                <td class="fc-day-number fc-fri fc-past" data-date="2015-12-04">4</td>
                                                                <td class="fc-day-number fc-sat fc-past" data-date="2015-12-05">5</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable fc-resizable">
                                                                        <div class="fc-content"> <span class="fc-title">All Day Event</span></div>
                                                                        <div class="fc-resizer fc-end-resizer"></div>
                                                                    </a>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content" style="">
                                                    <div class="fc-bg">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-12-06"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-12-07"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-12-08"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-12-09"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-12-10"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-12-11"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-12-12"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-past" data-date="2015-12-06">6</td>
                                                                <td class="fc-day-number fc-mon fc-past" data-date="2015-12-07">7</td>
                                                                <td class="fc-day-number fc-tue fc-past" data-date="2015-12-08">8</td>
                                                                <td class="fc-day-number fc-wed fc-past" data-date="2015-12-09">9</td>
                                                                <td class="fc-day-number fc-thu fc-past" data-date="2015-12-10">10</td>
                                                                <td class="fc-day-number fc-fri fc-past" data-date="2015-12-11">11</td>
                                                                <td class="fc-day-number fc-sat fc-past" data-date="2015-12-12">12</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td rowspan="6"></td>
                                                                <td class="fc-event-container" colspan="3">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end danger fc-draggable fc-resizable">
                                                                        <div class="fc-content"> <span class="fc-title">Long Event</span></div>
                                                                        <div class="fc-resizer fc-end-resizer"></div>
                                                                    </a>
                                                                </td>
                                                                <td rowspan="6"></td>
                                                                <td class="fc-event-container" colspan="2">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable fc-resizable">
                                                                        <div class="fc-content"> <span class="fc-title">Conference</span></div>
                                                                        <div class="fc-resizer fc-end-resizer"></div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="5"></td>
                                                                <td rowspan="5"></td>
                                                                <td class="fc-event-container" rowspan="5">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable">
                                                                        <div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div>
                                                                    </a>
                                                                </td>
                                                                <td rowspan="5"></td>
                                                                <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable">
                                                                        <div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable">
                                                                        <div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable">
                                                                        <div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable">
                                                                        <div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable">
                                                                        <div class="fc-content"><span class="fc-time">8p</span> <span class="fc-title">Dinner</span></div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content" style="height: 171px;">
                                                    <div class="fc-bg">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-12-13"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-12-14"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-12-15"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-12-16"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-12-17"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-12-18"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-12-19"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-past" data-date="2015-12-13">13</td>
                                                                <td class="fc-day-number fc-mon fc-past" data-date="2015-12-14">14</td>
                                                                <td class="fc-day-number fc-tue fc-past" data-date="2015-12-15">15</td>
                                                                <td class="fc-day-number fc-wed fc-past" data-date="2015-12-16">16</td>
                                                                <td class="fc-day-number fc-thu fc-past" data-date="2015-12-17">17</td>
                                                                <td class="fc-day-number fc-fri fc-past" data-date="2015-12-18">18</td>
                                                                <td class="fc-day-number fc-sat fc-past" data-date="2015-12-19">19</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable">
                                                                        <div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div>
                                                                    </a>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end green fc-draggable">
                                                                        <div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div>
                                                                    </a>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content" style="height: 171px;">
                                                    <div class="fc-bg">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-12-20"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-12-21"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-12-22"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-12-23"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-12-24"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-12-25"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-12-26"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-past" data-date="2015-12-20">20</td>
                                                                <td class="fc-day-number fc-mon fc-past" data-date="2015-12-21">21</td>
                                                                <td class="fc-day-number fc-tue fc-past" data-date="2015-12-22">22</td>
                                                                <td class="fc-day-number fc-wed fc-past" data-date="2015-12-23">23</td>
                                                                <td class="fc-day-number fc-thu fc-past" data-date="2015-12-24">24</td>
                                                                <td class="fc-day-number fc-fri fc-past" data-date="2015-12-25">25</td>
                                                                <td class="fc-day-number fc-sat fc-past" data-date="2015-12-26">26</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content" style="height: 171px;">
                                                    <div class="fc-bg">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-12-27"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-12-28"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-12-29"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-12-30"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-12-31"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2016-01-01"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2016-01-02"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-past" data-date="2015-12-27">27</td>
                                                                <td class="fc-day-number fc-mon fc-past" data-date="2015-12-28">28</td>
                                                                <td class="fc-day-number fc-tue fc-past" data-date="2015-12-29">29</td>
                                                                <td class="fc-day-number fc-wed fc-past" data-date="2015-12-30">30</td>
                                                                <td class="fc-day-number fc-thu fc-past" data-date="2015-12-31">31</td>
                                                                <td class="fc-day-number fc-fri fc-other-month fc-past" data-date="2016-01-01">1</td>
                                                                <td class="fc-day-number fc-sat fc-other-month fc-past" data-date="2016-01-02">2</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end white fc-draggable fc-resizable" href="http://google.com/">
                                                                        <div class="fc-content"> <span class="fc-title">Click for Google</span></div>
                                                                        <div class="fc-resizer fc-end-resizer"></div>
                                                                    </a>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="fc-row fc-week fc-widget-content" style="height: 174px;">
                                                    <div class="fc-bg">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2016-01-03"></td>
                                                                <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2016-01-04"></td>
                                                                <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2016-01-05"></td>
                                                                <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2016-01-06"></td>
                                                                <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2016-01-07"></td>
                                                                <td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2016-01-08"></td>
                                                                <td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2016-01-09"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="fc-content-skeleton">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2016-01-03">3</td>
                                                                <td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2016-01-04">4</td>
                                                                <td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2016-01-05">5</td>
                                                                <td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2016-01-06">6</td>
                                                                <td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2016-01-07">7</td>
                                                                <td class="fc-day-number fc-fri fc-other-month fc-past" data-date="2016-01-08">8</td>
                                                                <td class="fc-day-number fc-sat fc-other-month fc-past" data-date="2016-01-09">9</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Foot-->
<?php include 'common/foot.php' ?>

<script src="<?php echo base_url() ?>assets/libs/jquery/moment/moment.js"></script>
<script src="<?php echo base_url() ?>assets/libs/jquery/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/plugins/calendar.js"></script>
</body>
</html>