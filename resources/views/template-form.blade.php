<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Import Css -->
<link rel='stylesheet' href="{{ url('res/css/template.css')}}">
<link rel="stylesheet" href="{{ url('res/css/bootstrap4custom.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body onload="firstFunction()">
<!-- START : NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="text-left" href="@yield('linkback')" style="color: #8bc440"><i class="fa fa-chevron-left"></i></a>

<a class="navbar-brand mx-auto" id="colgre" href="index.html">

INVENTARIS</a>
</nav>
<!-- <div class="row navbar-cst fixed-bottom bawah-nav">
  <div class="col set-nav" onclick="window.location='asd.html'">
    <i class="fa fa-home" id="aktif"></i><br>
    <a href="{{url('harga/1/edit')}}" id="aktif">Home</a>
  </div>
  <div class="col set-nav" onclick="window.location='info.html';">
    <i class="fa fa-info-circle"></i><br>
    <a href="{{url('datainventaris')}}">Data Inventaris</a>
  </div>
  <div class="col set-nav" onclick="window.location='chat.html';">
    <i class="fa fa-paper-plane"></i><br>
    <a href="chat.html">Keuangan</a>
  </div>
  <div class="col set-nav" onclick="window.location='profile.html';">
    <i class="fa fa-user"></i><br>
    <a href="profile.html">profile</a>
  </div>
</div> -->
<!--END bawah-nav-->
<!-- END : NAVBAR -->

<div class="clearfix"></div>
<!-- section menu utama -->
<div class="container-fluid">
  <div class="row">
  @yield('content')
  </div>
</div>
<!-- end section menu utama -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<div class="bottom-space"></div>
</body>
</html>