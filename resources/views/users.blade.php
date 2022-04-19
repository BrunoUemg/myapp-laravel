@extends('layouts.default')

@section('title', 'Usuarios')


@push('css')

<link rel="stylesheet" href="{{ asset('css/user.css')}}">

@endpush


@section('content')

@foreach($users as $user)

{{$user->name}}<br>

@endforeach


@endSection

@push('script')
<script src="{{asset('js/user.js')}}"></script>
@endpush


