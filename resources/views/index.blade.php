@extends('layouts.app')

@section('title', 'Home - Job Portal')
    @section('content')
        <x-carousel />
        <x-search />
        <x-category />
        <x-about />
        <x-jobs />
    {{-- @endsection --}}
@endsection