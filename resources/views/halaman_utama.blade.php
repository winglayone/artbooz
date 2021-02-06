@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <router-link to="/foo">Go to Foo</router-link>
            <router-link to="/bar">Go to Bar</router-link>

            <router-view></router-view>
          </div>
      </div>
    </div>
</div>
@endsection
