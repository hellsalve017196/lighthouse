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
                    <? if(sizeof($list)) { ?>
                    <table class="table">
                        <tr>
                            <td>
                                Event Name
                            </td>
                            <td>
                                Start Date
                            </td>

                            <td>
                                End Date
                            </td>

                            <td>
                                Operation
                            </td>
                        </tr>
                        <?
                            foreach($list as $l)
                            {
                                ?>
                                <tr>
                                    <td>
                                        <? echo $l['name'] ?>
                                    </td>
                                    <td>
                                        <? echo $l['date_start'] ?>
                                    </td>

                                    <td>
                                        <? echo $l['date_end'] ?>
                                    </td>

                                    <td>
                                        <a href="<? echo base_url().'controlle/edit_event_view/'.$l['e_id'] ?>" class="btn btn-warning">Edit</a>

                                        <a href="<? echo base_url().'controlle/delete_event/'.$l['e_id'] ?>" class="btn btn-danger">Delete</a>
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