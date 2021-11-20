<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Message Confirmation</title>
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
<div style="user-select: none !important;font-size: 42px;font-weight: 500;">RC TURİZM DANIŞMANLIK</div>
<br>
<hr style="width: 80%;">
<br>
<div style="font-size: 22px;font-weight: 600;margin-bottom: 2px"> Mesajınız için teşekkürler {{request('name')}}</div>
<div style="font-size: 17px;font-weight: 700;margin:10px 0px 0px 0px">Size en yakın zamanda dönüş yapacağız!</div>
<br>

<div style="margin-right: auto; margin-left: auto; ">
    <div style="display:inline-block; vertical-align: top;text-align: left;margin:20px;width: 200px"><b style="font-size: 17px">Mesaj Bilgileriniz</b>
        <div>{{request('name')}}</div>
        <br>
        <div>{{request('email')}}</div>   <br>
        <div>{{request('subject')}}</div>   <br>
        <div>{{request('message')}}</div>
    </div>
</div>
<br>
<hr style="width: 80%;">
<br>

<div style="padding: 20px">Herhangi bir sorunuzda lütfen <a href="https://www.rcturizmdanismanlik.com/#contact">bize ulaşın.</a> </div>
<div>Saygılarımızla,</div>
<p><b>RC Turizm Danışmanlık</b></p>
<br>

</body>
</html>
