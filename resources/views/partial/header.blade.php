<?php
/* HTTP header with no cache */

// Expires some time in the past
header('Expires: Tue, 01 Jan 1980 00:00:00 GMT');
header("Expires: 0");

// Dynamic Modified date
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');

// HTTP 1.0
header('Pragma: no-cache');

// HTTP 1.1
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
?>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107920250-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-107920250-1');
  </script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Cache Control -->
  <meta http-equiv="Cache-Control" content="Cache-Control: no-cache, max-age=0, must-revalidate, no-store" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="Fri, 01 Jan 1980 00:00:00 GMT" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      ]); ?>
    </script>

    <title>VHS</title>

    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('images/index.png') }}" type="image/x-icon"/>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,‌​100italic,300,300ita‌​lic,400italic,500,50‌​0italic,700,700itali‌​c,900italic,900' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mobile.css') }}" rel="stylesheet" media="screen and (max-device-width: 767px)" />
    <link href="{{ asset('css/tablet.css') }}" rel="stylesheet" media="screen and (min-width: 767px) and (max-width: 991px)" />

  </head>
