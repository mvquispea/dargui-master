<link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/css/vendors.min.css')) : secure_asset(mix('vendors/css/vendors.min.css')) }}" />
<link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/css/ui/prism.min.css')) : secure_asset(mix('vendors/css/ui/prism.min.css')) }}" />
{{-- Vendor Styles --}}
@yield('vendor-style')
{{-- Theme Styles --}}

<link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('css/core.css') : secure_asset('css/core.css') }}" />

{{-- {!! Helper::applClasses() !!} --}}
@php $configData = Helper::applClasses(); @endphp

{{-- Page Styles --}}
@if($configData['mainLayoutType'] === 'horizontal')
<link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('css/base/core/menu/menu-types/horizontal-menu.css')) : secure_asset(mix('css/base/core/menu/menu-types/horizontal-menu.css')) }}" />
@endif
<link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('css/base/core/menu/menu-types/vertical-menu.css')) : secure_asset(mix('css/base/core/menu/menu-types/vertical-menu.css')) }}" />
<!-- <link rel="stylesheet" href="{{ asset(mix('css/base/core/colors/palette-gradient.css')) }}"> -->

{{-- Page Styles --}}
@yield('page-style')

{{-- Laravel Style --}}
<link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('css/overrides.css')) : secure_asset(mix('css/overrides.css')) }}" />

{{-- Custom RTL Styles --}}

@if($configData['direction'] === 'rtl' && isset($configData['direction']))
<link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('css/custom-rtl.css')) : secure_asset(mix('css/custom-rtl.css')) }}" />
@endif

{{-- user custom styles --}}
<link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset(mix('css/style.css')) : secure_asset(mix('css/style.css')) }}" />
