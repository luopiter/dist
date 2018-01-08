<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/paper-kit.css?v=2.1.0" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    <link href="css/nucleo-icons.css" rel="stylesheet" />


  </head>
<body style="background:#000;">
    <nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <a href="/" class="navbar-brand" ><big style="font-family:Roboto:400,500;">Devpit.</big><small style="font-family:Shadows Into Light;">ga</small></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Home" data-placement="bottom" href="#">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="product" data-placement="bottom" href="#">
                            <i class="fa fa-archive"></i> Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="contact" data-placement="bottom" href="#">
                          <i class="fa fa-phone"></i> Contact
                        </a>
                    </li>
                    <li class="nav-item ">
						<a href="#" class="btn btn-primary btn-round"> Login </a>
					</li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

<!-- Core JS Files -->
<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="js/popper.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!-- Switches -->
<script src="js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="js/nouislider.js"></script>

<!--  Plugins for DateTimePicker -->
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>

<!--  Paper Kit Initialization and functons -->
<script src="js/paper-kit.js?v=2.1.0"></script>

</html>
