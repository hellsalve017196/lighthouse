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


                    <form class="form-horizontal" method="post" action="" role="form" id="add_event" enctype="multipart/form-data">
                        <input type="text" value="<? echo $event['e_id'] ?>" id="event_id" style="display: none"/>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Event Name*</label>
                            <div class="col-sm-10">
                                <input type="text" size="500" value="<? echo $event['name'] ?>" class="form-control" id="event_name" required><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Conducted By*</label>
                            <div class="col-sm-10">
                                <input type="text" size="500" class="form-control" value="<? echo $event['conduct_by'] ?>" id="conduct_by" required><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Short Description</label>
                            <div class="col-sm-10">
                                <div id="short_des" class="summernote"><? echo $event['short_description'] ?></div><div class="form-control-line"></div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Long Description</label>
                            <div class="col-sm-10">
                                <div id="long_des" class="summernote"><? echo $event['long_description'] ?></div><div class="form-control-line"></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Date Start*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<? echo $event['date_start'] ?>" id="start_date" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Date End*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<? echo $event['date_end'] ?>" id="end_date" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Time Start*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<? echo $event['time_start'] ?>" id="start_time" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Time end</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="end_time" value="<? echo $event['time_end'] ?>" name="end_time" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Details</label>
                            <div class="col-sm-10">
                                <div id="details" class="summernote"><? echo $event['details'] ?></div><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Profile</label>
                            <div class="col-sm-10">
                                <div id="profile" class="summernote"><? echo $event['profile'] ?></div><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Location*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<? echo $event['location'] ?>" id="location" required=""><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="regular13" class="col-sm-2 control-label">Fees*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<? echo $event['fees'] ?>" id="fee"><div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textarea13" class="col-sm-2 control-label">Invitation Only?</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="status" required="">
                                    <option value="0" <? if($event['status'] == 0) { ?> selected <? } ?>>No</option>
                                    <option value="1" <? if($event['status'] == 1) { ?> selected <? } ?>>Yes</option></select>
                                <div class="form-control-line"></div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <input type="submit" value="Update Event" class="btn btn-block btn-success"/>
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
                fd.append("event_id",$("#event_id").val());
                fd.append("event_name",$("#event_name").val());
                fd.append("conduct_by",$('#conduct_by').val());
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


                $("#add_event").hide();

                var xhr = new XMLHttpRequest();



                http = '<? echo base_url().'controlle/event_edit' ?>';
                xhr.open("POST", http);
                xhr.onreadystatechange = function() {
                    if((xhr.readyState == 4) && (xhr.status == 200))
                    {
                        if(xhr.responseText == '0')
                        {
                            window.location = '<? echo base_url().'controlle/event_list' ?>';
                        }
                        else
                        {
                            alert("error occured");
                        }
                    }
                }

                xhr.setRequestHeader('Cache-Control','no-cache');

                xhr.send(fd);
            }



            if(($.trim($("#event_name").val()) != '') && ($.trim($("#short_des").code()) != '') && ($.trim($("#long_des").code()) != '') && ($.trim($("#start_date").val()) != '') && ($.trim($("#end_date").val()) != '') && ($.trim($("#start_time").val()) != '') && ($.trim($("#end_time").val()) != '')  && ($.trim($("#profile").code()) != '') && ($.trim($("#long_des").code()) != '') && ($.trim($("#location").val()) != ''))
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