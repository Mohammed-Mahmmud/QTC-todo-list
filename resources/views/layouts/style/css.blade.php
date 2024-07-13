 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>@yield('title')</title>

 <!-- Favicon -->
 <link rel="shortcut icon" href="{{ asset('dashboard') }}/demos/assets/media/image/favicon.png">

 <link rel="stylesheet" href="{{ asset('dashboard') }}/dataTable/dataTables.min.css" type="text/css">
 <!-- Plugin styles -->
 <link rel="stylesheet" href="{{ asset('dashboard') }}/demos/vendors/bundle.css" type="text/css">

 <!-- quill -->
 <link href="{{ asset('dashboard') }}/demos/vendors/quill/quill.snow.css" rel="stylesheet" type="text/css">

 <!-- Clockpicker -->
 <link rel="stylesheet" href="{{ asset('dashboard') }}/demos/vendors/clockpicker/bootstrap-clockpicker.min.css"
     type="text/css">

 <!-- Datepicker -->
 <link rel="stylesheet" href="{{ asset('dashboard') }}/demos/vendors/datepicker/daterangepicker.css" type="text/css">

 <!-- Select2 -->
 <link rel="stylesheet" href="{{ asset('dashboard') }}/demos/vendors/select2/css/select2.min.css" type="text/css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- App styles -->
 <link rel="stylesheet" href="{{ asset('dashboard') }}/demos/assets/css/app.min.css" type="text/css">

 <link rel="stylesheet" href="{{ asset('dashboard') }}/demos/vendors/dataTable/datatables.min.css" type="text/css">
 @yield('style')
