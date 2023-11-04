{{--
Layout: Dashboard Main
--}}
@includeIf('layouts.admin.base.header')
@includeIf('layouts.admin.partials.nav.sidebar-left')
@includeIf('layouts.admin.partials.wrapper.header')
@includeIf('layouts.admin.partials.headers.sub-header')
@yield('content')
@includeIf('layouts.admin.partials.wrapper.footer')
@includeIf('layouts.admin.base.footer')
