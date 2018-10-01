@extends('layouts.main')
@section('header')
<nav class="cm-navbar cm-navbar-primary">
    <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
    <div class="cm-flex">
        <h1>Agenda</h1> 
    </div>
    <div class="dropdown pull-right">
        <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
        <ul class="dropdown-menu">
            <li class="disabled text-center">
                <a style="cursor:default;"><strong>John Smith</strong></a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a>
            </li>
            <li>
                <a href="login.html"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
            </li>
        </ul>
    </div>
</nav>
@endsection
@section('content')
    <div style="margin-top: 2%"></div>
    <script type="text/javascript">
        document.body.classList.add('cm-menu-toggled');
    </script>
    @yield('sub-content')
@endsection