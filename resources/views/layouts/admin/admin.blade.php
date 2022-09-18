@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php
$configData = Helper::applClasses();
@endphp

<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}" class="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VTE0BQ0WFB"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VTE0BQ0WFB');
  </script>

  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ env('APP_ENV') === 'local' ? asset('images/logo/favicon.ico') : secure_asset('images/logo/favicon.ico') }}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  {{-- Include core + vendor Styles --}}
  @include('panels/styles')
  @stack('styles')
</head>

@isset($configData["mainLayoutType"])
    @extends('layouts.admin.verticalLayout')
@endisset