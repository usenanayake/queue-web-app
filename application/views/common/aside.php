<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="aside" class="app-aside modal fade nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk" layout="column">
        <div class="navbar no-radius">
            <!--            Brand-->
            <a class="navbar-brand">
                <div ui-include="'<?php echo base_url() ?>assets/images/logo.svg'"></div>
                <img src="<?php echo base_url() ?>assets/images/logo.png" alt="." class="hide">
                <span class="hidden-folded inline">Queue</span>
            </a>
        </div>
        <!--            Side bar profile-->
        <div flex-no-shrink="">
            <div class="nav-fold"><a href="<?php echo site_url('Profile/index'); ?>" ui-sref="app.page.profile"><span
                            class="pull-left"><img src="<?php echo base_url() ?>assets/images/a2.jpg" alt="..."
                                                   class="w-40 r"></span> <span
                            class="clear hidden-folded p-x"><span class="block _500">Jack Perez</span> <small
                                class="block text-muted">Administrator</small></span></a></div>
        </div>
        <!--            Side bar items-->
        <div flex class="hide-scroll">
            <nav class="scroll nav-light">
                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Main</small>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Dashboard/index'); ?>">
                           <span class="nav-icon">
                           <i class="material-icons">&#xe3fc;
                           <span ui-include="'<?php echo base_url() ?>assets/images/i_0.svg'"></span>
                           </i>
                           </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Reservations/index'); ?>">
                           <span class="nav-icon">
                           <i class="material-icons">&#xe3fc;
                           <span ui-include="'<?php echo base_url() ?>assets/images/i_0.svg'"></span>
                           </i>
                           </span>
                            <span class="nav-text">Reservations</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Calendar/index'); ?>">
                           <span class="nav-icon">
                           <i class="material-icons">&#xe3fc;
                           <span ui-include="'<?php echo base_url() ?>assets/images/i_0.svg'"></span>
                           </i>
                           </span>
                            <span class="nav-text">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Administration</small>
                    </li>
                    <li>
                        <a>
                           <span class="nav-caret">
                           <i class="fa fa-caret-down"></i>
                           </span>
                            <span class="nav-icon">
                           <i class="material-icons">&#xe5c3;
                           <span ui-include="'<?php echo base_url() ?>assets/images/i_1.svg'"></span>
                           </i>
                           </span>
                            <span class="nav-text">Employees</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="<?php echo site_url('New_employee/index'); ?>">
                                    <span class="nav-text">New employee</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Manage_employees/index'); ?>">
                                    <span class="nav-text">Manage employees</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                           <span class="nav-caret">
                           <i class="fa fa-caret-down"></i>
                           </span>
                            <span class="nav-icon">
                           <i class="material-icons">&#xe5c3;
                           <span ui-include="'<?php echo base_url() ?>assets/images/i_1.svg'"></span>
                           </i>
                           </span>
                            <span class="nav-text">Patients</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="<?php echo site_url('New_patient/index'); ?>">
                                    <span class="nav-text">New patient</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Manage_patients/index'); ?>">
                                    <span class="nav-text">Manage patients</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Connect</small>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Messenger/index'); ?>">
                           <span class="nav-icon">
                           <i class="material-icons">&#xe3fc;
                           <span ui-include="'../assets/images/i_0.svg'"></span>
                           </i>
                           </span>
                            <span class="nav-text">Messenger</span>
                        </a>
                    </li>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Summary</small>
                    </li>
                    <li class="hidden-folded">
                        <a href="docs.html">
                            <span class="nav-text">XXXX</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--            Side bar actions-->
        <div flex-no-shrink="">
            <nav ui-nav="">
                <ul class="nav">
                    <li>
                        <div class="b-b b m-v-sm"></div>
                    </li>
                    <li class="no-bg"><a class="auto"><span class="nav-icon"><i class="material-icons inline"></i> <i
                                        class="material-icons text-warn none"></i></span> <span
                                    class="nav-text">Notifications</span></a>
                    </li>
                    <li>
                        <div class="b-b b m-t-sm"></div>
                    </li>
                    <li class="no-bg"><a href="<?php echo site_url('Sign_in/index'); ?>"><span class="nav-icon"><i
                                        class="material-icons"></i></span> <span
                                    class="nav-text">Logout</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
