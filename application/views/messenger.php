<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--    Head-->
    <?php include 'common/head.php' ?>
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
            <div class="row-col">
                <div class="col-sm w w-auto-xs light lt bg-auto">
                    <div class="padding pos-rlt">
                        <div>
                            <button class="btn btn-sm white pull-right hidden-sm-up" ui-toggle-class="show"
                                    target="#inbox-menu"><i class="fa fa-bars"></i></button>
                            <a href="" class="btn btn-sm white w-xs">Compose</a>
                        </div>
                        <div class="hidden-xs-down m-t" id="inbox-menu">
                            <div class="nav-active-primary">
                                <div class="nav nav-pills nav-sm">
                                    <a class="nav-link active">
                                        Inbox
                                    </a>
                                    <a class="nav-link">
                                        Trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div ui-view="" class="padding pos-rlt">
                        <a href="" class="md-btn md-fab md-fab-bottom-right pos-fix red">
                            <i class="material-icons i-24 text-white"></i>
                        </a>
                        <div>
                            <!-- header -->
                            <div class="m-b">
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-sm white"><i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm white"><i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                                <div class="btn-toolbar">
                                    <div class="btn-group dropdown">
                                        <button class="btn white btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <span class="dropdown-label">Filter</span>
                                            <span class="caret"></span>
                                        </button>
                                        <div class="dropdown-menu text-left text-sm">
                                            <a class="dropdown-item" href="">All</a>
                                            <a class="dropdown-item" href="">Unread</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-sm white" data-toggle="tooltip" data-placement="bottom"
                                                data-title="Refresh" data-original-title="" title=""><i
                                                    class="fa fa-refresh"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- / header -->

                            <!-- list -->
                            <div class="list white">
                                <div class="list-item b-l b-l-2x b-info">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a0.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">5, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">Bootstrap components written in pure AngularJS</a>
                                            <span class="label label-xs m-l-sm text-u-c">Bootstrap</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Retur adipiscing elit. Morbi id
                                            neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum
                                            ullamcorper Neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item b-l b-l-2x b-warning">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a1.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">5, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">Nesting view in Angular</a>
                                            <span class="label label-xs m-l-sm text-u-c">AngularJS</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Neque quam. Aliquam sollicitudin
                                            venenatis ipsum ac feugiat.
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item b-l b-l-2x b-primary">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a2.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">2, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">What a hot day </a>
                                            <span class="label label-xs m-l-sm text-u-c">Client</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Duis non malesuada est, quis
                                            congue nibh.
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item b-l b-l-2x b-warn">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a3.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">5, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">Lazy loading Angular controllers, directives and
                                                services</a>
                                            <span class="label label-xs m-l-sm text-u-c">AngularJS</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Morbi id neque quam
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item b-l b-l-2x b-info">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a4.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">5, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">Oho!</a>
                                            <span class="label label-xs m-l-sm text-u-c">Bootstrap</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Turpis egestas lorem ipsum dolor
                                            sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item b-l b-l-2x">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a5.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">3, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">Meeting</a>
                                            <span class="label label-xs m-l-sm text-u-c">Work</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Vestibulum ullamcorper Neque quam.
                                            Aliquam sollicitudin venenatis ipsum ac feugiat.
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item b-l b-l-2x b-warn">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a6.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">2, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">Product version released</a>
                                            <span class="label label-xs m-l-sm text-u-c">Bootstrap</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Consectetur adipiscing elit. Morbi
                                            id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item b-l b-l-2x">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a7.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">1, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">Hi, What's up</a>
                                            <span class="label label-xs m-l-sm text-u-c">Bootstrap</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Aliquam sollicitudin venenatis
                                            ipsum ac feugiat.
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item b-l b-l-2x b-success">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a8.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">5, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">Kick-off meeting at 5:00 pm</a>
                                            <span class="label label-xs m-l-sm text-u-c">Bootstrap</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Aliquam sollicitudin venenatis
                                            ipsum ac feugiat.
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item b-l b-l-2x">
                                    <div class="list-left">
              <span class="w-40 avatar">
                <img src="<?php echo base_url() ?>assets/images/a9.jpg">
              </span>
                                    </div>
                                    <div class="list-body">
                                        <div class="pull-right text-muted text-xs">
                                            <span class="hidden-xs">5, July</span>
                                            <i class="fa fa-paperclip m-l-sm"></i>
                                        </div>
                                        <div>
                                            <a href="" class="_500">Bootstrap 4 Coming</a>
                                            <span class="label label-xs m-l-sm text-u-c">Bootstrap</span>
                                        </div>
                                        <div class="text-ellipsis text-muted text-sm">Aww yeah, Bootstrap 4 is coming!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / list -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Foot-->
<?php include 'common/foot.php' ?>
</body>
</html>