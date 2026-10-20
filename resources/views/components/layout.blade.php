@include("components.header")

@yield('content')

{{ $slot ?? '' }}

@include("components.header")