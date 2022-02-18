@extends('layouts.main')

@section('main-section')

    @include('layouts.services')

@endsection

@section('side-section')

    @include('layouts.searchbox')
    @include('layouts.category')

@endsection