    jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();

    // Init Demo JS
    Demo.init();

    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      mobile: false,
      onStart: function() {
        // Do something before AdminPanels runs
      },
      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

        // Init the rest of the plugins now that the panels
        // have had a chance to be moved and organized.
        // It's less taxing to organize empty panels
        demoHighCharts.init();
        runVectorMaps(); // function below
      },
      onSave: function() {
        $(window).trigger('resize');
      }
    });

    //Toastr Configuration
    toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "5000",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
    //VALIDATION CONFIGURATION
    var conf = $.formUtils.defaultConfig();
    conf.language = 'en';
    conf.modules =  'security, date';
    conf.scrollToTopOnError = false;

    // Call the setup function
    $.validate({
        language:   conf.language,
        modules:    conf.modules
    });

    $(".select2-single").select2();

    ////////////////////////////////////////////////////

    ////////////////////////////////////////////////////


    //---------------------
    //      CTRL
    //---------------------

    //Get all records
    $.ajax({
        url: 'php/projects/get.php',
        method:'GET',
        dataType:'json',
        success:function(data){
            //Datatable Initializer
             $('#datatable3').dataTable({
                // With BUTTONS COPY PRINT PDF .....
                // "sDom": '<"dt-panelmenu text-center clearfix"T><"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
                "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
                "oTableTools": {
                    "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                },
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                ],
                buttons: [
                    'pageLength'
                ],
                data:data.data,
                columns:[
                    {'data':'title'},
                    {'data':'prname'},
                    {'data':'target'},
                    {'data':'doner'},
                    {'data':'startDate'},
                    {'data':'endDate'},
                    {'data':null,
                     'render': function ( data, type, full, meta ) {
                            //set data-row attr as the datatable row -> give access the save changes to update row data localy
                            return "<button class='btn btn-xs btn-success' scrollto='#editFormContainer' id='editRecord' data-row='"+meta.row+"' data-record='"+JSON.stringify(full)+"'  > <i class='fa fa-edit'></i> </button> "+
                                   "<a class='btn btn-xs btn-danger' id='deleteRecord' data-row='"+meta.row+"' record-id='"+full.Id+"' href='#'> <i class='fa fa-trash'></i> </a> "
                        },
                    }
                ]
            })
        // Add Placeholder text to datatables filter bar
        $('.dataTables_filter input').attr("placeholder", "Enter Terms...");
        }
    })



    // -----------------------------------------------------------------
    //          EDIT FORM
    //------------------------------------------------------------------

    $('#cancelEditForm').click(function(){
        $('#editFormContainer').hide(700);
    });

    //Edit brand btn Clicked
    $('#datatable3 tbody').on( 'click', '#editRecord', function (event) {

        event.preventDefault();
        event.stopPropagation();

        $('#editForm').find("input[type=text],input[type=file],select, textarea input[type=number]").val("").change()
        $('#editForm').get(0).reset();


        $('#editFormContainer').show(700);

        //var product = JSON.parse($(this).attr('record-id'))
        var mainRecord = $(this).attr('data-record');
        mainRecord = JSON.parse(mainRecord);

       console.log(mainRecord)
        //INIT
        // services.getProjectNamesEditForm(mainRecord.prdetailsName)
        // services.getProjectTypesEditForm(mainRecord.prdetailsType)

        var datatableRow = $(this).attr('data-row');

        //set datatable row in data-row attr to for saveEditForm(Save button) to have the access for datatable row
        $('#editFormContainer').find('#saveEditForm').attr("data-row",datatableRow)
        // $('#editFormContainer').find('#nfBoxName').html(datatableRow)
        $('#editFormContainer').find('#nfBoxName').html(mainRecord.prname)
        $('#editFormContainer').find('#title').val(mainRecord.title)
        $('#editFormContainer').find('#prname').val(mainRecord.prname)
        $('#editFormContainer').find('#description').val(mainRecord.description)
        $('#editFormContainer').find('#notes').val(mainRecord.notes)
        $('#editFormContainer').find('#startDate').val(mainRecord.startDate)
        $('#editFormContainer').find('#endDate').val(mainRecord.endDate)
        // $('#editFormContainer').find('#new').prop('checked', mainRecord.new == 1 ? true : false)
        $('#editFormContainer').find('#imageName').val(mainRecord.imageName )
        $('#editFormContainer').find('#Id').val(mainRecord.Id)
        $('#editFormContainer').find('#target').val(mainRecord.target)
        $('#editFormContainer').find('#doner').val(mainRecord.doner)
    });

    // Edit PRoJECT form submited
    $('#saveEditForm').click(function(){
       if( !$('#editForm').isValid(conf.language, conf, true) ) {
            // displayErrors( errors );
           } else {

                var fd = new FormData(document.getElementById("editForm"));
                $.ajax({
                    url: 'php/projects/update.php',
                    method:'POST',
                    data: fd,
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    success:function(data){
                    // Serialize the form to Json
                    var localRecord = $('#editForm').serializeFormJSON()

                    var response = JSON.parse(data)

                    console.log(localRecord,response)

                    //Get the datatable row from the button attr and emit changes
                    var datatableRow_ = $('#saveEditForm').attr("data-row");
                    //get the dt instance
                    var myDataTable= $('#datatable3').DataTable();
                    // get / set dt row
                    var row = myDataTable.row(datatableRow_);
                    //Change row.projectName
                    //
                    // console.log(localRecord,data)
                    myDataTable.row(row).data(response.data).draw();
                    $('#editFormContainer').hide(700);

                    toastr.success('Project updated successfully', 'Notification', {timeOut: 5000})
                    } ,
                    error: function(err) {
                        if(err.responseText){
                            toastr.error(err.responseText, 'Notification', {timeOut: 5000})
                       }else{
                            toastr.error("Something went wrong", 'Notification', {timeOut: 5000})
                       }
                    }
            });

           }

    });


    // ----------------------------------------------------------------
    //          NEW FORM
    //------------------------------------------------------------------

    // New brand btn clicked -> show the form
    $('#openNewRecordForm').click(function(){
        $('#newform').find("input[type=text],input[type=file],select, textarea").val("")
        // services.getProjectTypesNewForm()
        // services.getProjectNamesNewForm()
        $('#newform').find("input[type=text],input[type=file],select, textarea input[type=number]").val("").change()
        $('#newform').get(0).reset();

        $('#newFormContainer').show(800);

    });

    // New brand canceled
    $('#cancelNewForm').click(function(){
        $('#newFormContainer').hide(700);
    });


    //CREATE NEW brand IN PROCESS
    $('#saveNewForm').click(function(){

            var frm = $('#newform').serializeFormJSON();
            // console.log(frm.prdetailsType)
           if( !$('#newform').isValid(conf.language, conf, true) ) {
            // displayErrors( errors );
                toastr.warning('Some fields are required', 'Notification', {timeOut: 5000})
           } else {
           // The form is valid
           var fd = new FormData(document.getElementById("newform"));


            $.ajax({
                url: 'php/projects/post.php',
                method:'POST',
                data: fd,
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType
                success:function(data){

                    var _newRecord = JSON.parse(data);

                    // if(_newRecord.prdetailsType == typeParam){
                        // _newRecord.new = _newRecord.new==1 ? true : false;
                        var myDataTable= $('#datatable3').DataTable();
                        myDataTable.row.add(_newRecord ).draw( false )
                    // }

                    $('#newFormContainer').hide(700);
                    toastr.success('Project details created successfully', 'Notification', {timeOut: 5000})
                } ,
                error: function(err) {
                    if(err.responseText){
                            toastr.error(err.responseText, 'Notification', {timeOut: 5000})
                       }else{
                            toastr.error("Something went wrong", 'Notification', {timeOut: 5000})
                       }
                }
            });
           }
    });

    // ----------------------------------------------------------------
    //          DELETE RECORD
    //------------------------------------------------------------------

    //DELETE brand CLICKED
    $('#datatable3 tbody').on( 'click', '#deleteRecord', function (event) {
        var thisDeleteBtn = $(this);
        var RecordId = $(this).attr('record-id');
        var inst = $('[data-remodal-id=modal]').remodal();

        inst.open();

        $(document).on('confirmation', '.remodal', function () {

            $.ajax({
                    url: 'php/projects/delete.php',
                    method:'POST',
                    data: {Id:RecordId},
                    success:function(data){

                    //get the dt instance
                    var myDataTable= $('#datatable3').DataTable();

                    // get / set dt row
                    var row = myDataTable.row($(thisDeleteBtn).parents('tr')).remove().draw();;

                    inst.close();
                    toastr.success('Project details deleted successfully', 'Notification', {timeOut: 5000})
                    } ,
                    error: function(err) {
                       if(err.responseText){
                                toastr.error(err.responseText, 'Notification', {timeOut: 5000})
                           }else{
                                toastr.error("Something went wrong", 'Notification', {timeOut: 5000})
                           }
                    }
                });
        });

        $(document).on('cancellation', '.remodal', function () {
            inst.close();
        });

    });

    });//end

