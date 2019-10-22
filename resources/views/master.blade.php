<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <title>Document</title>
    <!-- bs4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
    <!-- my css -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/categories_responsive.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/categories_styles.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/contact_responsive.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/contact_styles.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/main_styles.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/single_responsive.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/single_styles.css">
    <!-- plugins -->
    <link rel="stylesheet" href="{{asset('')}}assets/plugins/animate.css">
    <link rel="stylesheet" href="{{asset('')}}assets/plugins/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('')}}assets/plugins/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('')}}assets/plugins/owl.theme.default.css">


</head>
<body>
    
    @include('header')
    @yield('content')
    @yield('product')
    @yield('detailproduct')
    @include('footer')
</body>
</html>