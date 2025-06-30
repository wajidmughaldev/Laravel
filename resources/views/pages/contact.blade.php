@extends('welcome')
@section('content')
<h2>Welcome to the Contact</h2>
<p>This is the main content area where your page content will appear.</p>
@endSection
@section('title')
contact
@endsection

@section('sidebarExtend')
    <i>Facebook</i> <br>
    <i>Instagram</i>
@parent

@endSection