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
                    <a target="_blank" href="<? echo base_url().'controlle/newsletter_csv' ?>" class="btn btn-info" style="float: left">Export to CSV</a>

                    <?
                        if(sizeof($newsletter))
                        {
                            ?>
                            <table class="table">
                                <tr>
                                    <td>ID</td><td>Email</td><td>Operation</td>
                                </tr>

                                <?

                                    foreach($newsletter as $n)
                                    {
                                        ?>
                                        <tr>
                                            <td><? echo $n['e_id'] ?></td><td><? echo $n['email'] ?></td><td><a href="<? echo base_url().'controlle/newsletter_delete/'.$n['e_id'] ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <?
                                    }

                                ?>
                            </table>
                            <?
                        }
                        else
                        {
                            echo 'there is no data to display';
                        }
                    ?>


                </div>
            </div>
        </div>
        </section>
</div>