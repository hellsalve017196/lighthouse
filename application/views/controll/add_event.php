<!-- BEGIN CONTENT-->
<div id="content">
    <section>

        <div class="section-body contain-lg">
            <!-- BEGIN INTRO -->
            <div class="row">
            </div><!--end .row -->
            <!-- END INTRO -->

            <!-- BEGIN HORIZONTAL FORM - BASIC ELEMENTS-->
            <div class="card">
                <div class="card-body">
                    <div class="progress" style="display: none">
                        <div class="progress-bar" id="res" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                        </div>
                    </div>

                    <form class="form-horizontal" method="post" action="" role="form" id="add_event" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Event Name*</label>
                            <div class="col-sm-10">
                                <input type="text" size="500" class="form-control" id="event_name" required><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Conducted By*</label>
                            <div class="col-sm-10">
                                <input type="text" size="500" class="form-control" id="conduct_by" required><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Event Banner</label>
                            <div class="col-sm-10">
                                <input type="file" id="userfile" class="form-control" required><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Short Description</label>
                            <div class="col-sm-10">
                                <div id="short_des" class="summernote"></div><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Long Description</label>
                            <div class="col-sm-10">
                                <div id="long_des" class="summernote"></div><div class="form-control-line"></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Date Start*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="start_date" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Date End*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="end_date" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Time Start*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="start_time" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Time end</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="end_time" name="end_time" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Details</label>
                            <div class="col-sm-10">
                                <div id="details" class="summernote"></div><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Profile</label>
                            <div class="col-sm-10">
                                <div id="profile" class="summernote"></div><div class="form-control-line"></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Profile Details</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="userfile1"><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Location*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="location" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Fees*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fee"><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Event Leaflet</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="userfile2"><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Invitation Only?</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="status" required=""><option value="0">No</option><option value="1">Yes</option></select><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <input type="submit" value="Add Event" class="btn btn-block btn-success"/>
                        </div>

                    </form>
                </div><!--end .card-body -->
            </div><!--end .card -->


        </div><!--end .section-body -->
    </section>
</div><!--end #content-->
<!-- END CONTENT -->
<script>
    $(document).ready(function() {
        $(".summernote").summernote();

        $("#start_date").datetimepicker({
            timepicker:false,
            format:'d M,y'
        });

        $("#end_date").datetimepicker({
            timepicker:false,
            format:'d M,y'
        });

        $("#start_time").datetimepicker({
            datepicker:false,
            format:'H:i'
        });

        $("#end_time").datetimepicker({
            datepicker:false,
            format:'H:i'
        });

        //file upload
        $("#add_event").on('submit',function(e) {


            function uploadFile() {

                var fd = new FormData();

                fd.append("event_name",$("#event_name").val());
                fd.append("conduct_by",$("#conduct_by").val());
                fd.append("short_des",$("#short_des").code());
                fd.append("long_des",$("#long_des").code());
                fd.append("start_date",$("#start_date").val());
                fd.append("end_date",$("#end_date").val());
                fd.append("start_time",$("#start_time").val());
                fd.append("end_time",$("#end_time").val());
                fd.append("details",$("#details").code());
                fd.append("profile",$("#profile").code());
                fd.append("location",$("#location").val());
                fd.append("fee",$("#fee").val());
                fd.append("status",$("#status").val());

                fd.append("userfile", document.getElementById('userfile').files[0]);

                if((document.getElementById('userfile1').files[0] != undefined) && (document.getElementById('userfile2').files[0] != undefined))
                {
                    fd.append("userfile1", document.getElementById('userfile1').files[0]);
                    fd.append("userfile2", document.getElementById('userfile2').files[0]);
                }


                $("#add_event").hide();
                $(".progress").show();

                var xhr = new XMLHttpRequest();

                xhr.upload.addEventListener("progress", uploadProgress, false);
                xhr.upload.addEventListener("load", uploadComplete, false);
                xhr.upload.addEventListener("error", uploadFailed, false);
                xhr.upload.addEventListener("abort", uploadCanceled, false);

                http = '<? echo base_url().'controlle/adding_event' ?>';
                xhr.open("POST", http);

                xhr.setRequestHeader('Cache-Control','no-cache');

                xhr.send(fd);
            }

            function uploadProgress(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = Math.round(evt.loaded * 100 / evt.total);
                    document.getElementById('res').style.width = percentComplete.toString() + '%';
                    document.getElementById('res').innerHTML = percentComplete.toString() + '%';
                }
                else {
                    document.getElementById('res').style.width = '0%';
                }
            }

            function uploadComplete(evt) {
                /* This event is raised when the server send back a response */

                window.location = '<? echo base_url().'controlle/event_list' ?>';

            }

            function uploadFailed(evt) {
                alert("There was an error attempting to upload the file.");
            }

            function uploadCanceled(evt) {
                alert("The upload has been canceled by the user or the browser dropped the connection.");
            }

            if(($.trim($("#event_name").val()) != '') && ($.trim($("#short_des").code()) != '') && ($.trim($("#long_des").code()) != '') && ($.trim($("#start_date").val()) != '') && ($.trim($("#end_date").val()) != '') && ($.trim($("#start_time").val()) != '') && ($.trim($("#end_time").val()) != '') && ($.trim($("#details").code()) != '') && ($.trim($("#profile").code()) != '') && ($.trim($("#long_des").code()) != '') && ($.trim($("#location").val()) != '') && ($.trim($("#fee").val()) != ''))
            {
                uploadFile();
            }
            else
            {
                alert("please fill up the form fields properly");
            }



            e.preventDefault()
        });

    });
</script>