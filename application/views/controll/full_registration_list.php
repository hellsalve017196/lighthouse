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
                    <? if(sizeof($reg)) { ?>
                        <h2>Registration List For All Events</h2>
                        <span><a href="<? echo base_url().'controlle/registration_all_to_csv/' ?>" class="btn btn-info">Export to CSV</a></span>
                        <table class="table">
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    Email
                                </td>

                                <td>
                                    Company Name
                                </td>
                                <td>
                                    Designation
                                </td>

                                <td>
                                    Phone
                                </td>

                                <td>
                                    Address
                                </td>

                                <td>
                                    Operation
                                </td>
                            </tr>
                            <?
                            foreach($reg as $r)
                            {
                                ?>
                                <tr>
                                    <td>
                                        <? echo $r['name'] ?>
                                    </td>
                                    <td>
                                        <? echo $r['email'] ?>
                                    </td>

                                    <td>
                                        <? echo $r['company_name'] ?>
                                    </td>

                                    <td>
                                        <? echo $r['designation'] ?>
                                    </td>

                                    <td>
                                        <? echo $r['phone'] ?>
                                    </td>

                                    <td>
                                        <? echo $r['address'] ?>
                                    </td>

                                    <td>
                                        <a href="<? echo base_url().'controlle/reg_delete_from_all/'.$r['r_id'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?
                            }
                            ?>
                        </table>
                    <?  } else {echo '<div class="alert alert-info" style="text-align: center"><strong>There is no event yet. Please create an event first.</strong></div>'; }  ?>
                </div>
            </div>
        </div>
    </section>
</div>