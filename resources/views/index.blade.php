<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 50px;
        }

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="main-content">
                <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
                <label for="select-city"></label>
                <select id="select-city">
                    <option>Chọn thành phố</option>
                    <option value="America-Chihuahua">Chihuahua, Mexico</option>
                    <option value="America-Costa_Rica">Costa Rica</option>
                    <option value="America-Havana">La Habana, Cuba</option>
                    <option value="Asia-Hong_Kong">Hồng Kông</option>
                    <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
                </select>
            </div>
            <br>
            <div class="clearfix">

            </div>
            @if(isset($time))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Time Local : {{$timezone}} - {{$time}}</strong>
                </div>
            @endif
        </div>

    </div>


</div><!-- /.container -->
<script>
    document.getElementById("select-city").onchange = function () {
        ChooseCity()
    };

    function ChooseCity() {
        var time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
