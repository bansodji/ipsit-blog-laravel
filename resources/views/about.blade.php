@extends('layouts.main')

@section('main-section')
<div>
    <h1 class='fw-700 lh-base text-center mb-4'>Powerful Digital <br> Solution With iPsit</h1>
    <h5 class="lh-base text-center muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, quisquam quo esse expedita soluta molestias?</h5>

    <div class='row my-5'>
        <div class="col-lg-3">
            <div class="blog-card-light hover-border-theme2 d-flex flex-column align-items-center justify-content-center">
                <i class="fas fa-ankh fs-1 mb-3 text-gradient"></i>
                <h4 class='fs-700 text-center'>Lorem ipsum</h4>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="blog-card-light hover-border-theme2 d-flex flex-column align-items-center justify-content-center">
                <i class="fas fa-burn fs-1 mb-3 text-gradient"></i>
                <h4 class='fs-700 text-center'>dolor sit ames</h4>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="blog-card-light hover-border-theme2 d-flex flex-column align-items-center justify-content-center">
                <i class="fab fa-cc-diners-club fs-1 mb-3 text-gradient"></i>
                <h4 class='fs-700 text-center'>amet consectetur</h4>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="blog-card-light hover-border-theme2 d-flex flex-column align-items-center justify-content-center">
                <i class="fas fa-chess-knight fs-1 mb-3 text-gradient"></i>
                <h4 class='fs-700 text-center'>dolorem repudian</h4>
            </div>
        </div>
    </div>
</div>

<div class="my-5">
    <div class="row">
        <div class="col-lg-6 mt-5">
            <h3 class="mb-4">Lorem, ipsum dolor sit amet consectetu.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et facilis dolore deleniti, repudiandae
                provident
                suscipit quae nulla enim error quasi velit debitis dolores animi? Dignissimos debitis porro veritatis
                accusamus
                natus, at dolores blanditiis cupiditate animi eos ipsum optio nostrum ducimus error maiores numquam eum
                facilis
                laudantium vel pariatur inventore nobis reiciendis architecto! Delectus dignissimos culpa ullam
                praesentium
                reprehenderit, magni iste.</p>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="img-frame-wrapper">
                <div class="img-frame-2">
                    <img src="/img/about.jpg" class="size-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('side-section')

@include('layouts.searchbox')
@include('layouts.category')

@endsection