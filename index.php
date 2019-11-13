<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<<meta class="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/home.css"/>
    <link href='calendar/packages/core/main.css' rel='stylesheet' />
    <link href='calendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='calendar/packages/timegrid/main.css' rel='stylesheet' />
    <link href='calendar/packages/list/main.css' rel='stylesheet' />
    <script src='calendar/packages/core/main.js'></script>
    <script src='calendar/packages/interaction/main.js'></script>
    <script src='calendar/packages/daygrid/main.js'></script>
    <script src='calendar/packages/timegrid/main.js'></script>
    <script src='calendar/packages/list/main.js'></script>
	<title>Diinco Panel de Control</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <div class="logo">
                    <img src="img/logo.png" alt="logo">
                </div>    
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Prueba</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <form class="form-inline mr-sm-2">
                      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </ul>
          </div>
        </nav>

        <div class="container">
        	<div class="row">
        		<div class="col-md-6" id="calendar"></div>
        		<div class="col-md-6 datos"></div>
        	</div>
        </div>
</body>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</html>