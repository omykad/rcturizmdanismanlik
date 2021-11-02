<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Order Confirmation</title>
    <style>
        img{border-radius: 10px}
        .bc-white {border-color: white}
        h3{padding: 0px 20px;}
        hr {border-color: #e5e5e5;opacity: 0.3}
        .total {font-weight:bold;font-size:15px;}
        body, div , p , h4  {font-family: Montserrat, sans-serif  !important;}
    </style>
</head>
<body style="overflow-wrap:break-word;text-align: center;margin-right: auto;margin-left: auto;">
<div style="user-select: none !important;font-size: 42px;font-weight: 500;">RC TURIZM DANISMANLIK</div>
<br>
<hr style="width: 80%;">
<br>
<div style="font-size: 22px;font-weight: 600;margin-bottom: 2px"> Mesajiniz icin tesekkurler {{$order->name}} </div>
<div style="font-size: 17px;font-weight: 700;margin:10px 0px 0px 0px">Size en yakin zamanda donuz yapacagiz!</div>
<br>

<div style="margin-right: auto; margin-left: auto; ">
    <div style="display:inline-block; vertical-align: top;text-align: left;margin:20px;width: 200px"><b style="font-size: 17px">Mesaj Bilgileriniz</b>
        <div>{{$order->name}}</div>
        <div>{{$order->email}}</div>
        <div>{{$order->subject}}</div>
        <div>{{$order->message}}</div>
    </div>
</div>
<br>
<hr style="width: 80%;">
<br>

<div style="padding: 20px">Herhangi bir sorunuzda lutfen <a href="https://www.rcturizmdanismanlik.com/#contact">bize ulasin.</a> </div>
<div>Saygilarimizla,</div>
<p><b>RC Turizm Danismanlik</b></p>

<br>
<div>
    <a href="www.rcturizmdanismanlik.com">Kadio</a>
</div>
<br>
<br>

</body>
</html>
