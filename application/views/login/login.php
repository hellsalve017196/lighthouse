<section class="section-account">
    <div class="img-backdrop" style="background-image: url('<? echo base_url() ?>files/Admin/assets/img/img16.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <span id="res" class="text-lg text-bold text-primary">Lighthouse Bangladesh ADMIN</span>
                    <br><br>
                    <form class="form floating-label" action="../../html/dashboards/dashboard.html" accept-charset="utf-8" method="post">
                        <div class="form-group">
                            <input size="500" type="text" class="form-control" id="email" name="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-group">
                            <input size="500" type="password" class="form-control" id="password" name="password">
                            <label for="password">Password</label>
                            <p class="help-block"><a href="<? echo base_url().'login/forgot' ?>">Forgotten?</a></p>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <input class="btn btn-primary btn-raised" type="button" id="log" value="Log In"/>
                                <a class="btn btn-primary btn-raised" href="<? echo base_url() ?>">Back</a>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->

            </div><!--end .card -->
        </div></div></section>
<script type="text/javascript">
    $(document).ready(function() {
        $("#log").on('click',function() {
            user = $("#email").val();
            pass = $("#password").val();

            if(($.trim(user) != '') && ($.trim(pass) != ''))
            {
                if(user.indexOf('@') != '-1')
                {
                    data = JSON.stringify({'email':user,'password':pass});

                    http = '<? echo base_url().'login/entering' ?>';

                    xml = new XMLHttpRequest();
                    xml.onreadystatechange = function()
                    {
                        if(xml.status == 200 && xml.readyState == 4)
                        {
                            if(xml.responseText == '0')
                            {
                                $("#res").html("Invalid Email or password");
                            }
                            else
                            {
                                window.location = '<? echo base_url().'controlle/' ?>';
                            }
                        }
                    }

                    packet = 'trozan='+data;

                    xml.open('POST',http,false);
                    xml.setRequestHeader('Content-type','application/x-www-form-urlencoded');
                    xml.send(packet);

                }
                else
                {
                    $("#res").html('Please give valid email address');
                }
            }
            else
            {
                $("#res").html('Please give email and password properly');
            }

        });
    });
</script>