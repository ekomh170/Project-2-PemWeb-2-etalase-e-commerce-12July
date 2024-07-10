@include('admin.partials.header')

<div class="wrapper">
    @include('admin.partials.sidebar')
    <div class="main-panel">
        @include('admin.partials.navbar')

      
        
        {{-- Contents --}}
        @yield('content')
        {{-- Contents --}}

        @include('admin.partials.footer_ui')
        {{-- Custom Template --}}

    </div>
</div>
@include('admin.partials.footer_components')
