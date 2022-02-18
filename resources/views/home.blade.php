@extends('layouts.main')

@section('afterhero')

    @include('layouts.afterhero')

@endsection

@section('main-section')

    @include('layouts.blogs')

@endsection

@section('side-section')

    @include('layouts.searchbox')
    @include('layouts.category')

@endsection