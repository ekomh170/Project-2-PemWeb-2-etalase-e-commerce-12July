@include('landing.partials.header')
        @include('landing.partials.navbar')        
        
        {{-- Contents --}}
        @yield('content')
        {{-- Contents --}}
    
        @include('landing.partials.footer_ui')
@include('landing.partials.footer_components')
