<section class="content">
    <div class="container">
        <div class="inner-page clearfix">
            <? if(sizeof($event_detail)>0)  {

                ?>
                <!--OPEN OF SLIDER-->
                <div class="slider row col-lg-12 padding-left-none padding-right-none padding-bottom-20">
                    <img src="<? echo base_url().'uploads/'.$event_detail['image_banner'] ?>" alt="Event Image" >
                </div>

                <!--CLOSE OF SLIDER-->
                <!--Slider End-->

                <div class="row padding-bottom-40">
                    <div class="col-lg-12 col-md-12 col-sm-12 left-content padding-left-none">
                        <div class="right_site_job">
                            <div class="job margin-top-30 sm-padding-bottom-40 xs-padding-bottom-40">
                                <h2 style="font-size:25px"><? echo $event_detail['name'] ?><small> CONDUCTED BY <? echo $event_detail['conduct_by'] ?></small></h2><small>
                                </small></div><small>
                            </small></div><small>
                        </small></div><small>

                        <div class="row padding-bottom-40">
                            <div class="col-lg-8 col-md-8 col-sm-8 left-content padding-left-none">
                                <div class="right_site_job">
                                    <div class="job margin-top-10 sm-padding-bottom-40 xs-padding-bottom-40">
                                        <h2>Description of Event</h2>
                                        <p><? echo $event_detail['long_description'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none xs-padding-left-none">
                                <div class="right_site_job">
                                    <div class="project_details margin-top-10">
                                        <h2>Event Details</h2>
                                        <ul class="margin-bottom-none" style="font-size: 20px">
                                            <li><i class="fa fa-calendar fa-lg"></i> Date: <? if(strcmp($event_detail['date_start'],$event_detail['date_end']) == 0) {  echo $event_detail['date_start'];  } else {  echo $event_detail['date_start'].'-'.$event_detail['date_end'];  } ?></li><br>
                                            <li><i class="fa fa-clock-o fa-lg"></i> Time: <? echo $event_detail['time_start'] ?> – <? echo $event_detail['time_end'] ?></li><br>
                                            <li><i class="fa fa-map-marker fa-lg"></i> Location: <? echo $event_detail['location'] ?></li><br>
                                            <?    if(!empty($event_detail['fees'])) {  ?> <li><i class="fa fa-money fa-lg"></i> Registration Fees: <? echo $event_detail['fees'] ?></li><br> <?  }      ?>

                                            <!------ cicking this button means modal registration form------>
                                            <!------ Also this button must check the database status of the event

                                                    if status=0 (event closed)
                                                    then display modal error "Registration closed. Sorry we are SOLD OUT"
                                                    else
                                                    load registration form.

                                            ------>
                                            <?
                                                if($event_detail['status'] == 0)
                                                {
                                                    ?>
                                                    <a class="btn btn-danger" data-target="#myModal" data-toggle="modal" href="#"><i class="fa fa-sign-in fa-lg"></i> Click Here To Register</a>
                                                    <?
                                                }
                                            ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row padding-bottom-40">
                            <div class="col-lg-8 col-md-8 col-sm-8 left-content padding-left-none">
                                <div class="right_site_job">
                                    <div class="job margin-top-10 sm-padding-bottom-40 xs-padding-bottom-40">
                                        <h2><? echo $event_detail['conduct_by'] ?></h2>
                                        <p>
                                            <? echo $event_detail['profile'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none xs-padding-left-none">
                            </div>
                        </div>


                        <div class="row padding-bottom-40">
                            <div class="col-lg-8 col-md-8 col-sm-8 left-content padding-left-none">
                                <div class="right_site_job">
                                    <?

                                        if(strlen($event_detail['details']) != 4)
                                        {
                                            ?>
                                            <div class="job margin-top-10 sm-padding-bottom-40 xs-padding-bottom-40">
                                                <h2>Other Details</h2>
                                                <p>
                                                    <? echo $event_detail['details'] ?>
                                                </p>
                                            </div>
                                            <?
                                        }
                                    ?>
                                </div>
                            </div>
                            <?
                                if((strlen($event_detail['profile_file']) != 4) or (strlen($event_detail['event_leaflet']) != 4))
                                {
                                    ?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none xs-padding-left-none">
                                        <div class="right_site_job">
                                            <div class="project_details margin-top-10">
                                                <h2>Download Details</h2>
                                                <?  if(strlen($event_detail['profile_file']) != 4) {   ?><a class="btn btn-primary" href="<? echo base_url().'uploads/'.$event_detail['profile_file'] ?>" download=""><i class="fa fa-download fa-lg"></i> Download Profile</a><? } ?>
                                                <? if(strlen($event_detail['event_leaflet']) != 4) {  ?><a class="btn btn-primary" href="<? echo base_url().'uploads/'.$event_detail['event_leaflet'] ?>" download=""><i class="fa fa-download fa-lg"></i> Download Brocheure</a><? } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?
                                }
                            ?>

                        </div>



                    </small></div>

                <div class="row margin-top-30">
                    <div class="project_wrapper clearfix">
                        <h4 class="related_project_head margin-bottom-10 padding-bottom-15 margin-top-none">Related Projects</h4>
                        <div class="related_post margin-top-30 clearfix">
                            <?
                                if(sizeof($related_events) > 0)
                                {
                                    foreach($related_events as $w)
                                    {
                                        ?>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 scroll_effect fadeInLeft animated" style="visibility: visible;">
                                            <div class="car-block margin-bottom-10"><a href="<? echo base_url().'site/event_details/'.$w['e_id'] ?>">
                                                    <div class="img-flex"> <span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span> <img src="<? echo base_url().'uploads/'.$w['image_banner'] ?>" alt="" class="img-responsive"> </div>
                                                    <div class="car-block-bottom">
                                                        <h2><? echo $w['name'] ?></h2>

                                                    </div>
                                                </a> </div>
                                        </div>
                                        <?
                                    }
                                }
                                else
                                {
                                    echo "<h5>There is no related events currently</h5>";
                                }
                            ?>

                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Registration</h4>
                            </div>
                            <div class="modal-body" id="res">
                                <table align="center" id="arkham" style="width: 100%">
                                    <tr>
                                        <td colspan="2" id="min_res"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Full name*</strong></td>
                                        <td><input size="500" type="text" id="full_name" placeholder="Full name" style="width: 100%" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Phone*</strong></td>
                                        <td><input size="500" type="text" id="phone" placeholder="Phone"  style="width: 100%" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email*</strong></td>
                                        <td><input size="500" type="text" id="email" style="width: 100%" placeholder="Email"  class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Address*</strong></td>
                                        <td><input size="500" type="text" id="address" style="width: 100%" placeholder="Address"  class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Company name*</strong></td>
                                        <td><input size="500" type="text" id="c_name" placeholder="Company name"  style="width: 100%" class="form-control"/></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Designation*</strong></td>
                                        <td><input size="500" type="text" id="des" placeholder="Designation"  style="width: 100%" class="form-control"/></td>
                                    </tr>
                                    <tr><td colspan="2"><div class="col-md-5"></div><div class="col-md-4"><button id="reg" class="btn btn-success">Register</button></div><div class="col-md-3"></div></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?

            }  else { echo "invalid event"; }?>

            <small>

            </small>
        </div>
            <small>
            <!--container ends-->
        </small></div></section>

        <script type="text/javascript">
            //for registration purpose
            $("#reg").on('click',function() {
                e_id = '<? echo $event_detail['e_id']; ?>';
                full_name = $("#full_name").val();
                phone = $("#phone").val();
                email = $("#email").val();
                address = $("#address").val();
                c_name = $("#c_name").val();
                des = $("#des").val();

                if(($.trim(full_name) != '') && ($.trim(phone) != '') && ($.trim(email) != '') && ($.trim(address) != '') && ($.trim(c_name) != '') && ($.trim(des) != ''))
                {
                    if(email.indexOf('@') != '-1')
                    {
                        trozan = {'event_id':e_id,'name':full_name,'email':email,'address':address,'company_name':c_name,'designation':des,'phone':phone};

                        http = '<? echo base_url().'site/registration' ?>';

                        $.ajax({
                            url:http,
                            method:'POST',
                            data:{'trozan':JSON.stringify(trozan)},
                            success:function(data)
                            {
                                if(data == '0')
                                {
                                    $("#res").html('<div class="alert alert-success" role="alert">Successfully Registered</div>');
                                }
                                else
                                {
                                    $("#res").html('<div class="alert alert-danger" role="alert">Please try again laiter</div>');
                                }
                            }
                        });
                    }
                    else
                    {
                        alert("give a valid email address");
                    }
                }
                else
                {
                    $("#min_res").html('<div class="alert alert-danger" role="alert">Please fill up the form properly</div>');
                }
            });
        </script>