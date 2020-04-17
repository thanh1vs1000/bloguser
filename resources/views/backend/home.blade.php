<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <base href="{{asset('')}}">
    <link rel="icon"  href="backend/images/favicon/boy.svg">
    <script src="backend/ckeditor/ckeditor.js"></script>
    <link href="backend/css/styles.css" rel="stylesheet" />
    <link href="backend/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="backend/fontawesome/css/all.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit-icons.min.js"></script>


</head>
<body class="sb-nav-fixed">
@include('backend.header')
@include('backend.sidebar')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
@yield('content')
    </div>
</div>



<script src="backend/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="backend/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="backend/js/scripts.js"></script>
<script src="backend/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="backend/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="backend/assets/demo/datatables-demo.js"></script>
<script src="backend/ckeditor/ckeditor.js"></script>


</body>
</html>
