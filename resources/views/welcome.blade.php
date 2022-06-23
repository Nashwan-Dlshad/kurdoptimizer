@extends('layouts.layout')
@section('content')
<nav class="navbar navbar-expand-lg " aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active navLogo" aria-current="page" href="/">Kurd Optimizer</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<router-view></router-view>

@endsection