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

    var urlPath   = "php/activities/";

    $(".select2-single").select2();

    ////////////////////////////////////////////////////

    ////////////////////////////////////////////////////

    //---------------------
    //      SERVICES
    //---------------------

    var services = {
        getProjectsNewForm: function() {
            $.ajax({
                url: 'php/projects/get.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    $('#newFormContainer #prName').find('option').remove().end().append('<option value="" selected="selected">Select Type</option>').attr("selected", "selected").change()

                    $.each(data.data, function(key, value) {
                        $('#newFormContainer').find('#prName')
                            .append($("<option></option>").attr("value", value.prname).text(value.prname));
                    });
                }
            });
        },
        getProjectsEditForm: function(selectedValue) {
                    $.ajax({
                        url: 'php/projects/get.php',
                        method: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#editFormContainer #prName').find('option').remove()
                            $.each(data.data, function(key, value) {
                                if (value.prname == selectedValue) {
                                    $('#editFormContainer').find('#prName')
                                        .append($("<option></option>").attr("value", value.prname).text(value.prname).attr("selected", "selected")).change();

                                } else {
                                    $('#editFormContainer').find('#prName')
                                        .append($("<option></option>").attr("value", value.prname).text(value.prname));
                                }
                            })

                        }
                    });

                },
        getProjectsInitializer: function() {
                    $.ajax({
                        url: 'php/projects/get.php',
                        method: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#projectFilter').find('option').remove().end().append('<option value="" selected="selected">All</option>').attr("selected", "selected").change()

                            $.each(data.data, function(key, value) {
                                $('#projectFilter')
                                .append($("<option></option>").attr("value", value.prname).text(value.prname));
                            });
                        }
                    });

                },
    }


    //---------------------
    //      CTRL
    //---------------------

    services.getProjectsInitializer();
    
    //Get all records
    $.ajax({
        url: urlPath + 'get.php',
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
                    {'data':'prName'},
                    {'data':'actDate'},
                    {'data':'location'},
                    {'data':null,
                     'render': function ( data, type, full, meta ) {
                            //set data-row attr as the datatable row -> give access the save changes to update row data localy
                            return "<button class='btn btn-xs btn-success' scrollto='#editFormContainer' id='editRecord' data-row='"+meta.row+"' data-record='"+JSON.stringify(full)+"'  > <i class='fa fa-edit'></i> </button> "+
                                   "<a class='btn btn-xs btn-danger' id='deleteRecord' data-row='"+meta.row+"' record-id='"+full.Id+"' href='#'> <i class='fa fa-trash'></i> </a> "
                        },
                    }
                ]
            })    

               

            var table = $('#datatable3').DataTable();
            table.columns().eq(0).each( function () {
                var that = this;

                $( '#projectFilter' ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that.column(1)
                            .search( this.value )
                            .draw();
                    }else if(this.value == '') {
                        that.search( '' ).columns()
                            .search( '' )
                            .draw()
                    }
                });
            });

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

        $('#newFormContainer').hide(700);
        $('#editFormContainer').show(700);
        
                    
        
        //var product = JSON.parse($(this).attr('record-id')) 
        var mainRecord = $(this).attr('data-record');
        mainRecord = JSON.parse(mainRecord);
       
       console.log(mainRecord)
        //INIT
        services.getProjectsEditForm(mainRecord.prName)

        var datatableRow = $(this).attr('data-row');
        
        //set datatable row in data-row attr to for saveEditForm(Save button) to have the access for datatable row
        $('#editFormContainer').find('#saveEditForm').attr("data-row",datatableRow)
        // $('#editFormContainer').find('#nfBoxName').html(datatableRow)
        $('#editFormContainer').find('#nfBoxName').html(mainRecord.title)
        $('#editFormContainer').find('#title').val(mainRecord.title)
        $('#editFormContainer').find('#actDate').val(mainRecord.actDate)
        $('#editFormContainer').find('#description').val(mainRecord.description)
        $('#editFormContainer').find('#location').val(mainRecord.location)
        $('#editFormContainer').find('#video').val(mainRecord.video)
        $('#editFormContainer').find('#imageName').val(mainRecord.imageName )
        $('#editFormContainer').find('#Id').val(mainRecord.Id)
        // $('#editFormContainer').find('#prName').val(mainRecord.prName).prop("selected","selected").change()
    });

    // Edit RECORD form submited
    $('#saveEditForm0').click(function(){
       if( !$('#editForm').isValid(conf.language, conf, true) ) {
            // displayErrors( errors );
           } else {

                var fd = new FormData(document.getElementById("editForm"));
                $.ajax({
                    url: urlPath + 'update.php',
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
                    //
                    // console.log(localRecord,data)
                    myDataTable.row(row).data(response.data).draw();
                    $('#editFormContainer').hide(700);

                    toastr.success('Record updated successfully', 'Notification', {timeOut: 5000})
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



            //DROPZONE FOR EDIT ACTIVITIY
            //DROPZONE FOR EDIT ACTIVITIY
            //DROPZONE FOR EDIT ACTIVITIY
            //DROPZONE FOR EDIT ACTIVITIY
            var myDropzoneEdit = new Dropzone("div#dropzoneEdit", {
                url: "php/actimages/upload.php",
                paramName: "file",
                uploadMultiple: true,
                maxFiles: 10,
                parallelUploads: 1,
                autoProcessQueue: false,
                addRemoveLinks: false,
                acceptedFiles: "image/jpeg,image/jpg,image/png,image/gif",
                init: function() {

                    var submitButton = document.querySelector("#saveEditForm");
                    var myDropzoneEdit = this; //closure
                    var idz;
                    var actTitle;

                    //GET FILES FROM SERVER -> FILES TO DROPZONE 
                    $('#datatable3 tbody').on('click', '#editRecord', function(event) {
                        myDropzoneEdit.removeAllFiles(true);

                        var actTitle_ = $('#editFormContainer').find('#title').val()
                        $.get('php/actimages/get.php?actTitle=' + actTitle_, function(data) {

                            var images = JSON.parse(data)
                            if(images.length){
                                $.each(images, function(key, value) {
                                var mockFile = {
                                    name: value.imageName,
                                    Id: value.Id,
                                    size : ''
                                };
                                // myDropzoneEdit.options.addedfile.call(myDropzoneEdit, mockFile);
                                myDropzoneEdit.emit("addedfile", mockFile);
                                // myDropzoneEdit.options.thumbnail.call(myDropzoneEdit, mockFile, "images/"+value.imageName);
                                myDropzoneEdit.emit("thumbnail", mockFile, "../images/activity/" + value.imageName);
                                myDropzoneEdit.files.push(mockFile);
                            });
                            }
                        });
                    });

                    // SAVE EDIT FORM CHANGES
                    submitButton.addEventListener("click", function() {

                        if (    $('#editForm').isValid(conf.language, conf, true)   ) {

                            var fd = new FormData(document.getElementById("editForm"));

                            $.ajax({
                                url: "php/activities/update.php",
                                type: "POST",
                                data: fd,
                                enctype: 'multipart/form-data',
                                processData: false, // tell jQuery not to process the data
                                contentType: false // tell jQuery not to set contentType
                            }).done(function(data) {

                                var response = JSON.parse(data)

                                // // Serialize the form to Json 
                                var localRecord = $('#editForm').serializeFormJSON()

                                //Get the datatable row from the button attr and emit changes
                                var datatableRow_ = $('#saveEditForm').attr("data-row");
                                // //get the dt instance
                                var myDataTable = $('#datatable3').DataTable();
                                // // get / set dt row
                                var row = myDataTable.row(datatableRow_);

                                myDataTable.row(row).data(response.data).draw();

                                actTitle = localRecord.title;
                                toastr.success("Activity updated successfully", 'Notification', {
                                    timeOut: 5000
                                });

                                myDropzoneEdit.on('sending', function(data, xhr, formData) {
                                    formData.append("actTitle", actTitle);
                                });


                                if (myDropzoneEdit.getQueuedFiles().length > 0) {
                                    myDropzoneEdit.processQueue(); //tell Dropzone to process all queued files
                                } else {
                                    $('#editFormContainer').hide(700);
                                    //CLEAR THE FORM INPUTS
                                    $('#editForm').find("input[type=text],input[type=file],select, textarea").val("")
                                }

                            }).fail(function(jqXHR, textStatus, errorThrown) {
                                console.log(jqXHR,textStatus,errorThrown)
                                toastr.error("Something went wrong", 'Notification', {
                                    timeOut: 5000
                                })
                            });

                        } else { //VALIDATION
                            toastr.warning("Some fields are required", 'Notification', {
                                timeOut: 5000
                            })
                        }
                    }); //EVENT CLICK

                }
            });

            myDropzoneEdit.on("queuecomplete", function(file, res) {
                if (myDropzoneEdit.files[0].status != Dropzone.SUCCESS) {
                    toastr.error("Failed to upload images", 'Notification', {timeOut: 5000})
                    $('#editFormContainer').hide(700);
                    myDropzoneEdit.removeAllFiles(true);
                    $('#editForm').find("input[type=text],input[type=file],select, textarea").val("")
                } else {
                    toastr.success("Activity images uploaded successfully", 'Notification', {
                        timeOut: 5000
                    });
                    $('#editFormContainer').hide(700);
                    myDropzoneEdit.removeAllFiles(true);
                    $('#editForm').find("input[type=text],input[type=file],select, textarea").val("").change()
                }
            });        

            // LOOP OVER QUEUE -> Good when parallelUploads is less than max files 
            myDropzoneEdit.on('success', myDropzoneEdit.processQueue.bind(myDropzoneEdit));

            // ADD  REMOVE BTN MANUALLY
            myDropzoneEdit.on("addedfile", function(file) {
                var _this = this;

                if (file.Id) {
                    var removeButtonForServer = Dropzone.createElement("<button data-dz-remove " +
                        "class='del_thumbnail btn btn-default btn-xs btn-block m-t-xxs' " +
                        " style='cursor:pointer;color:#C5350A;' image-id=" + file.Id + ">Delete <span style='cursor:pointer;' class='fa fa-cloud'></span></button>");

                    removeButtonForServer.addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        $.ajax({
                            url: 'php/actimages/delete.php',
                            method: 'POST',
                            data: {
                                Id: file.Id
                            },
                            success: function(data) {
                                toastr.success('Image deleted successfully', 'Notification', {
                                    timeOut: 5000
                                })
                                _this.removeFile(file);
                            },
                            error: function() {
                                toastr.error('Could not delete this image', 'Notification', {
                                    timeOut: 5000
                                })
                            }
                        })
                    });
                    file.previewElement.appendChild(removeButtonForServer);
                } else {
                    /* Maybe display some more file information on your page */
                    var removeButton = Dropzone.createElement("<button data-dz-remove " +
                        "class='del_thumbnail btn btn-default btn-xs btn-block m-t-xxs' " +
                        " style='cursor:pointer;color:#C5350A;'><span style='cursor:pointer;' class='fa fa-trash'></span></button>");
                    removeButton.addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();

                        _this.removeFile(file);
                    });
                    file.previewElement.appendChild(removeButton);
                }
            });













    // ----------------------------------------------------------------
    //          NEW FORM
    //------------------------------------------------------------------

    // New brand btn clicked -> show the form
    $('#openNewRecordForm').click(function(){
        myDropzone.removeAllFiles(true);
        $('#newform').find("input[type=text],input[type=file],select, textarea").val("")
        services.getProjectsNewForm()
        // services.getProjectNamesNewForm()
        $('#newform').find("input[type=text],input[type=file],select, textarea input[type=number]").val("").change()
        $('#newform').get(0).reset();

        $('#editFormContainer').hide(700);
        $('#newFormContainer').show(800);

    });

    // New brand canceled
    $('#cancelNewForm').click(function(){
        $('#newFormContainer').hide(700);
    });

        
    //CREATE NEW brand IN PROCESS
    $('#saveNewForm0').click(function(){
            
            var frm = $('#newform').serializeFormJSON();
            // console.log(frm.prdetailsType)
           if( !$('#newform').isValid(conf.language, conf, true) ) {
            // displayErrors( errors );
                toastr.warning('Some fields are required', 'Notification', {timeOut: 5000})
           } else {
           // The form is valid
           var fd = new FormData(document.getElementById("newform"));


            $.ajax({
                url: urlPath + 'post.php',
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
                    toastr.success('Record created successfully', 'Notification', {timeOut: 5000})
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



            Dropzone.autoDiscover = false;

            //DROPZONE FOR NEW ACTIVITIY
            //DROPZONE FOR NEW ACTIVITIY
            //DROPZONE FOR NEW ACTIVITIY
            //DROPZONE FOR NEW ACTIVITIY
            var myDropzone = new Dropzone("div#myId", {
                url: "php/actimages/upload.php",
                paramName: "file",
                uploadMultiple: true,
                maxFiles: 10,
                parallelUploads: 1,
                autoProcessQueue: false,
                addRemoveLinks: false,
                acceptedFiles: "image/jpeg,image/jpg,image/png,image/gif",
                init: function() {
                    var submitButton = document.querySelector("#saveNewForm");
                    var myDropzone = this; //closure
                    var actTitle;
                    submitButton.addEventListener("click", function() {

                        if ($('#newform').isValid(conf.language, conf, true)) {

                            var fd = new FormData(document.getElementById("newform"));

                            $.ajax({
                                url: "php/activities/post.php",
                                type: "POST",
                                data: fd,
                                enctype: 'multipart/form-data',
                                processData: false, // tell jQuery not to process the data
                                contentType: false // tell jQuery not to set contentType
                            }).done(function(data) {
                                console.log(data);

                                data = JSON.parse(data)

                                var _newRecord = data

                                var myDataTable = $('#datatable3').DataTable();

                                myDataTable.row.add(_newRecord).draw(false);

                                actTitle = data.title;

                                toastr.success("Activity created successfully", 'Notification', {timeOut: 5000});

                                myDropzone.on('sending', function(data, xhr, formData) {
                                    formData.append("actTitle", actTitle);
                                });

                                
                                if (myDropzone.getQueuedFiles().length > 0) {
                                    myDropzone.processQueue(); //tell Dropzone to process all queued files
                                } else {
                                    $('#newFormContainer').hide(700);
                                    $('#newform').find("input[type=text],input[type=file],select, textarea").val("")
                                }


                            }).fail(function(jqXHR, textStatus, errorThrown) {
                                toastr.error(jqXHR.responseText, 'Notification', {
                                    timeOut: 5000
                                })
                            });
                            //  myDropzone.processQueue();

                        } else {
                            toastr.warning("Some fields are required", 'Notification', {
                                timeOut: 5000
                            })
                        } //Validation
                    }); //event click
                }
            });


        myDropzone.on("queuecomplete", function(file, res) {
            if (myDropzone.files[0].status != Dropzone.SUCCESS) {
                toastr.error("Failed to upload images", 'Notification', {timeOut: 5000})
                $('#newFormContainer').hide(700);
                myDropzone.removeAllFiles(true);
                $('#newform').find("input[type=text],input[type=file],select, textarea").val("")
            } else {
                toastr.success("Activity images uploaded successfully", 'Notification', {timeOut: 5000});
                $('#newFormContainer').hide(700);
                myDropzone.removeAllFiles(true);
                $('#newform').find("input[type=text],input[type=file],select, textarea").val("")
            }
        });


            // LOOP OVER QUEUE -> Good when parallelUploads is less than max files 
            myDropzone.on('success', myDropzone.processQueue.bind(myDropzone));

            // ADD  REMOVE BTN MANUALLY
            myDropzone.on("addedfile", function(file) {
                var _this = this;

                /* Maybe display some more file information on your page */
                var removeButton = Dropzone.createElement("<button data-dz-remove " +
                    "class='del_thumbnail btn btn-default btn-xs btn-block m-t-xxs' " +
                    " style='cursor:pointer;color:#C5350A;'><span style='cursor:pointer;' class='fa fa-trash'></span></button>");

                removeButton.addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    _this.removeFile(file);
                });
                file.previewElement.appendChild(removeButton);
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
                    url: urlPath + 'delete.php',
                    method:'POST',
                    data: {Id:RecordId},
                    success:function(data){ 

                    //get the dt instance
                    var myDataTable= $('#datatable3').DataTable();

                    // get / set dt row
                    var row = myDataTable.row($(thisDeleteBtn).parents('tr')).remove().draw();
                    $('#newFormContainer').hide(700);
                    $('#editFormContainer').hide(700);
                    
                    inst.close();
                    toastr.success('Record deleted successfully', 'Notification', {timeOut: 5000})
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

