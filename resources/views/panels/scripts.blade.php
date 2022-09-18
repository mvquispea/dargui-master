{{-- Vendor Scripts --}}
<script src="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/js/vendors.min.js')) : secure_asset(mix('vendors/js/vendors.min.js')) }}"></script>
<script src="{{ env('APP_ENV') === 'local' ? asset(mix('vendors/js/ui/prism.min.js')) : secure_asset(mix('vendors/js/ui/prism.min.js')) }}"></script>
@yield('vendor-script')
{{-- Theme Scripts --}}
<script src="{{ env('APP_ENV') === 'local' ? asset(mix('js/core/app-menu.js')) : secure_asset(mix('js/core/app-menu.js')) }}"></script>
<script src="{{ env('APP_ENV') === 'local' ? asset(mix('js/core/app.js')) : secure_asset(mix('js/core/app.js')) }}"></script>
@if($configData['blankPage'] === false)
<script src="{{ env('APP_ENV') === 'local' ? asset(mix('js/scripts/customizer.js')) : secure_asset(mix('js/scripts/customizer.js')) }}"></script>
@endif
{{-- page script --}}
@yield('page-script')
{{-- page script --}}
