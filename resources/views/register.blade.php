@include ('layouts.head')

<div class="register-page">
    <div class="container d-flex justify-content-center align-items-center size-100">
       
            <div class="form-box">
                @if ($login == 'login')
                    @include('layouts.login')
                @elseif ($login == 'signup')
                    @include('layouts.signup')
                @endif
            </div>


       
    </div>
</div>

@include ('layouts.foot')