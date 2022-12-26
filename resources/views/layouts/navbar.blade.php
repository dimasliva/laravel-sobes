<?php
    $route = \Illuminate\Support\Facades\Route::getCurrentRoute()->getName();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid" style="display: flex;">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{$route === 'post.index' ? 'active' : ''}}" href="{{route('post.index')}}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$route === 'post.create' ? 'active' : ''}}" href="{{route('post.create')}}">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
