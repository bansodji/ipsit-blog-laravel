@include('layouts.header')

    <div>
        @yield('afterhero')
    </div>

    <main class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @yield('main-section')
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 mt-5 pt-5">
                    @yield('side-section')
                </div>
            </div>
        </div>
    </main>

@include('layouts.footer')