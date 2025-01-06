@include('layouts.header')
       @include('layouts.nav')
        <div id="layoutSidenav">
            @include('layouts.side-nav')
            <div id="layoutSidenav_content">
                <main>
                 @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div
                            class="d-flex align-items-center justify-content-between small"
                        >
                            <div class="text-muted">
                                Copyright &copy; Your Website 2023
                            </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        @include('layouts.footer')