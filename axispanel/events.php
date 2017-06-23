<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<?php include_once('includes/auth.php'); ?>
<?php include_once('includes/logout.php'); ?>

<?php $pagename="Events"; ?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Axis Panel</title>
    <meta name="keywords" content="" />
    <meta name="description" content="AxisPanel">
    <meta name="author" content="AxisMEA">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>

    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

    <!-- Datatables Addons CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/datatables/media/css/dataTables.plugins.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Select2 Plugin CSS  -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/select2/css/core.css">

    <!-- toastr -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/toaster/toastr.min.css">

    <!-- Modal -->
    <link rel="stylesheet" href="vendor/plugins/modal/remodal.css">
    <link rel="stylesheet" href="vendor/plugins/modal/remodal-default-theme.css">

    <script src="vendor/jquery/jquery-1.11.1.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page sb-l-o sb-r-c">

    <?php include_once('includes/themes.php') ?>

    <!-- Start: Main -->
    <div id="main">

        <?php include_once('includes/header.php') ?>
        <?php include_once('includes/lsidebar.php') ?>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <?php include_once('includes/topbar.php') ?>

            <section id="content" class=" animated fadeIn">
                <div class="tray tray-center">
                  <div class="col-md-12">

                    <!-- NEW RECORD -->
                    <!-- NEW RECORD -->
                    <!-- NEW RECORD -->
                    <div class="row j-hide" id="newFormContainer">
                        <div class="col-md-10">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span>Create New Event</span>
                                </div>

                        <div class="panel-body">
                                    <span class="text-danger-darker">Fields with * are required</span>
                                    <form class="form-horizontal" name="newform" id="newform" method="POST" action="" enctype="multipart/form-data" role="form">
                                        <div class="form-group admin-form">
                                            <div class="col-sm-4">
                                                <label class="control-label">Event Title*</label>
                                                <input type="text" data-validation="required" name="title" id="title" class="form-control" placeholder="Event Title" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="control-label">Project Name*</label>
                                                <select data-validation="required" name="prName" id="prName" class="select2-single form-control" required>
                                                    <option>Select Project</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="control-label">Event Date*</label>
                                                <input type="date" data-validation="required" name="eDate" id="eDate" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group admin-form">
                                            <div class="col-sm-12">
                                                <label class="control-label">Event Description*</label>
                                                <textarea data-validation="required" name="description" id="description" class="form-control textarea-grow" rows="4" placeholder="Event Description" required></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="control-label">Event Location</label>
                                                <textarea name="location" id="location" class="form-control textarea-grow" rows="4" placeholder="Event Location" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group admin-form">
                                          <div class="col-sm-6">
                                            <label class="control-label">Video Link</label>
                                            <input type="text" data-validation-optional="true" data-validation="url" name="video" id="video" class="form-control" placeholder="Write Video URl from YoutTube Here..." >
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label">Upload Event Image* (850x478)</label>
                                            <label class="field prepend-icon file">
                                                <span class="button bg-primary" style="color: white;">Choose Image</span>
                                                <input type="file" class="gui-file" name="imagefile" id="imagefile" onChange="document.getElementById('imageName').value = this.value.substr(12);" required>
                                                <input data-validation="required" type="text" class="gui-input" name="imageName" id="imageName" placeholder="Please Select An Image">
                                                <label class="field-icon"><i class="fa fa-upload"></i></label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"><br/></div>
                                    <div align="right" class="">
                                        <button type="button" class="btn btn-default" role="button" id="cancelNewForm"> Cancel </button>
                                        <button type="button" name="submitnew" class="btn btn-primary" id="saveNewForm"> Create Event</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- EDIT PROJECT -->
                <!-- EDIT PROJECT -->
                <!-- EDIT PROJECT -->
                <div class="row j-hide" id="editFormContainer">
                    <div class="col-md-10">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Edit <span class="text-info" id="nfBoxName"></span></span>
                            </div>

                            <div class="panel-body">
                                <span class="text-danger-darker">Fields with * are required</span>
                                <form class="form-horizontal" name="editform" id="editForm" method="POST" action="" enctype="multipart/form-data" role="form">
                                    <div class="form-group admin-form">
                                        <div class="col-sm-4">
                                            <label class="control-label">Event Title</label>
                                            <input type="text" data-validation="required" name="title" id="title" class="form-control" placeholder="Event Title" >
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label">Project Name*</label>
                                            <select data-validation="required" name="prName" id="prName" class="select2-single form-control" required>
                                                <option>Select Project</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="control-label">Event Date*</label>
                                            <input type="date" data-validation="required" name="eDate" id="eDate" class="form-control" placeholder="date..." required>
                                        </div>
                                    </div>
                                    <div class="form-group admin-form">
                                        <div class="col-sm-12">
                                            <label class="control-label">Event Description*</label>
                                            <textarea data-validation="required" name="description" id="description" class="form-control textarea-grow" rows="4" placeholder="Event Description" required></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="control-label">Event Location</label>
                                            <textarea name="location" id="location" class="form-control textarea-grow" rows="4" placeholder="Event Location" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group admin-form">
                                      <div class="col-sm-6">
                                        <label class="control-label">Video Link</label>
                                        <input type="text" data-validation-optional="true" data-validation="url" name="video" id="video" class="form-control" placeholder="Write Video URl from YoutTube Here..." >
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label">Change Event Image</label>
                                        <label class="field prepend-icon file">
                                            <span class="button bg-primary" style="color: white;">Choose Image</span>
                                            <input type="file" class="gui-file" name="imagefile" id="imagefile" onChange="$('.imgNme').val(this.value.substr(12));" required>
                                            <input data-validation="required" type="text" class="gui-input imgNme" name="imageName" id="imageName" placeholder="Please Select An Image">
                                            <label class="field-icon"><i class="fa fa-upload"></i></label>
                                        </label>
                                    </div>
                                </div>
                                <div class="clearfix"><br/></div>
                                <div align="right" class="">
                                    <button type="button" class="btn btn-default " role="button" id="cancelEditForm"> Cancel </button>
                                    <button type="button" name="submitedit" data-row='' class="btn btn-primary" id="saveEditForm">Save changes</button>
                                    <input type="hidden" name="Id" id="Id" value="">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>



            <div class="row">
                <div class="col-xs-2">
                    <button class="btn btn-default btn-gradient" scrollto="#newFormContainer" id="openNewRecordForm"><i class="fa fa-plus"></i> Create New Event </button>
                </div>
                <div class="col-xs-5 input-group" style="padding-left:50px;">
                    <span class="input-group-addon" id="basic-addon1">Switch Project</span>
                    <select class="select2-single form-control" id="projectFilter">
                    </select>
                </div>
                <div class="col-xs-1"></div>
            </div>

            <!-- TABLE -->
            <!-- TABLE -->
            <!-- TABLE -->
            <div class="panel panel-visible">
                <div class="panel-heading">
                    <div class="panel-title hidden-xs"><span class="glyphicon glyphicon-tags"></span><b class="text-primary" id="PDName"></b> Events list</div>
                </div>
                <div class="panel-body pn">
                    <form name="table" method="POST" action="">
                        <table class="table table-striped table-hover" id="datatable3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Project</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Project</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>

                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include_once('includes/footer.php') ?>

</section>

</div>

<!-- MODAL TEMPLATE for delete project -->
<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
    <div>
        <h2 id="modal1Title">Notification</h2>
        <p id="modal1Desc">
            Are you sure you want to delete this Record ?
        </p>
    </div>
    <br>
    <button data-remodal-action="cancel" class="remodal-cancel">No</button>
    <button data-remodal-action="confirm" class="remodal-confirm">Yes</button>
</div>

<!-- jQuery -->
<!--<script src="vendor/jquery/jquery-1.11.1.min.js"></script>-->
<script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Simple Circles Plugin -->
<script src="vendor/plugins/circles/circles.js"></script>

<!-- Datatables -->
<script src="vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

<!-- Datatables Tabletools addon -->
<script src="vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>

<!-- Select2 Plugin Plugin -->
<script src="vendor/plugins/select2/select2.min.js"></script>

<!-- plugins -->
<script src="vendor/plugins/toaster/toastr.min.js"></script>
<script src="vendor/plugins/modal/remodal.js"></script>
<script src="vendor/plugins/jqueryFormValidator/form-validator/jquery.form-validator.js"></script>

<!-- Theme Javascript -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/controllers/events.js"></script>

<!-- Widget Javascript -->
<script src="assets/js/demo/widgets.js"></script>

<!-- END: PAGE SCRIPTS -->


</body>

</html>
