<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
        <style>
            .signupbar{
                background-color: #5478BA;
            }
            input[type='number'] {
                -moz-appearance:textfield;
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
            }
            .labeler{
                color: #FFF;
            }
            @media (max-width: 767) {
                /* your custom css class on a parent will increase specificity */
                /* so this rule will override Bootstrap's font size setting */
                .labeler { font-size: 12px; }
            }

            @media (min-width: 768px) and (max-width: 991px) {
                .labeler { font-size: 14px; }
            }

            @media (min-width: 992px) and (max-width: 1199px) {
                .labeler { font-size: 16px; }
            }

            @media (min-width: 1200px) {
                .labeler { font-size: 18px; }
            }
            body {
                padding-top: 70px; 
            }
            li+li { 
                border-left: 2px solid #FFF;
            }
            .topbar{
                background-color: #F63F48 !important;
            }
            .topbar1{
                background-color: #F63F48 !important;
            }
            .topbar:hover{
                background-color: #5478BA !important;
            }
            body {
                position: relative; 
            }
            .textcolor{
                color: #FFF !important;
                font-weight: 700;
            }
            @media (min-width: 768px) {
                .navbar-nav.navbar-center {
                    position: absolute;
                    left: 50%;
                    transform: translatex(-50%);
                }
            }
            @media (min-width: 768px) {
                .navbar-nav.navbar-left {
                    position: absolute;
                    left: 10%;
                    transform: translatex(-75%);
                }
            }
            @media (min-width: 768px) {
                .navbar-nav.navbar-right {
                    position: absolute;
                    right: 1.8%;
                    transform: translatex(-50%);
                }
            }
            #aboutrcv {
                padding-top:50px;
                height:650px;
            }
            #socialmedia {
                padding-top:50px;
                height:350px;
            }

        </style>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $('document').ready(function () {
                $('li').hover(function () {
                    $(this).css("background-color", "#5478BA");
                }, function () {
                    $(this).css("background-color", "#F63F48");
                });
                $('.collapse').on('shown.bs.collapse', function () {
                    $(this).parent().find(".glyphicon-chevron-down").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
                }).on('hidden.bs.collapse', function () {
                    $(this).parent().find(".glyphicon-chevron-up").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
                });
            });
        </script>
    </head>
    <body data-spy="scroll" data-target=".topbar1" data-offset="50">
        <nav class="topbar1 navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header navbar-nav navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">put logo here</span>
                </button>
                <a class="navbar-brand textcolor" href="#">put logo here</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-center">
                    <li><a class="topbar textcolor" href="#aboutrcv">About RCV</a></li>                    
                    <li><a class="topbar textcolor" href="#socialmedia">On Social Media</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="topbar textcolor" href="#contribute">Contribute</a></li>
                </ul>
            </div>
        </nav>
        <nav class="navbar signupbar" role="navigation">
            <div class="container-fluid">
                <form class="navbar-form form-inline">
                    <div class="row">
                        <div class="col-xs-offset-2 col-xs-3">
                            <div class="form-group">
                                <label class="control-label labeler">Pledge your support to the cause:</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-xs-offset-2 col-xs-2">
                            <div class="form-group">                                 
                                <input type="email" class="input-lg form-control" name="emailAddress" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input type="number" class="input-lg form-control" name="zipCode" placeholder="Zip Code" required>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <button class="input-lg btn btn-default">Support</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
        <div class="jumbotron" id="aboutrcv">
            <div class="container">
                <div class="container">
                    <h1>About RCV</h1><br />
                    <p>RCV is an elections system that allows the voter to rank their choice of candidate.</p>
                </div>
                <div class="well">
                    <h2>Problems RCV Solves</h2>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" aria-expanded="false" aria-controls="collapseOne">
                                        Lack of Real Choice
                                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"  id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" aria-expanded="false" aria-controls="collapseTwo">
                                        Difficulty of new ideas getting into government
                                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"  id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" aria-expanded="false" aria-controls="collapseThree">
                                        The Spoiler Effect
                                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron" id="socialmedia">
            <div class="row">
                <div class="col-xs-offset-3 col-xs-9">
                    <a target="_blank" style="color:#333333; text-decoration:none" href="https://www.facebook.com/electionreformnewyork/"><h3><i style="color:#3B5998; font-size: 100px" class="fi-social-facebook"></i>   Follow us on Facebook!</h3></a>
                </div> 
            </div>
            <div class="row">
                <div class="col-xs-offset-3 col-xs-9">
                    <a target="_blank" style="color:#333333; text-decoration:none" href="https://groups.google.com/forum/#!topic/ranked-choice-voting/XaTkp7BlCiQ"><h3><i style="color:#72A0EE; font-size: 100px" class="fi-torsos-all"></i>   Volunteer on Google Groups</h3></a>
                </div>
            </div>
        </div>
        <div class="container" id="contribute"></div>

    </body>
</html>