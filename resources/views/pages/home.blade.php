@extends('layouts.app')

@section('styles')
{{-- <link rel="stylesheet" href="{{asset('')}}"> --}}
@endsection


@section('content')

<x-showcase />
@endsection

@section('scripts')
<script src="{{asset('js/slider.js')}}"></script>
@endsection