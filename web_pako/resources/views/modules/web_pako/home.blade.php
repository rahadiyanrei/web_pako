@extends('modules.web_pako.layouts.app')

@section('title', 'Home - Web Pako')

@section('content')
<h1>Welcome to Web Pako</h1>
<p>This is the main company website. We provide excellent services and solutions for our clients.</p>
<p>Navigate through our menus to learn more about us:</p>
<ul>
    <li><a href="{{ route('web_pako.about') }}">About Us</a></li>
    <li><a href="{{ route('web_pako.contact') }}">Contact</a></li>
    <li><a href="{{ route('web_pako.bod') }}">Board of Directors</a></li>
</ul>
@endsection
