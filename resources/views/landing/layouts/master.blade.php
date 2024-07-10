@include('landing.partials.header')
@include('landing.partials.navbar')

@if (!Request::is('/'))
    @include('landing.partials.pageheader')
@endif

{{-- Contents --}}
@yield('content')
{{-- Contents --}}

@include('landing.partials.footer_ui')
@include('landing.partials.footer_components')
