@extends('layouts.app')
@section('title')
  Home Page
@endsection

@section('content')

@include ('pages.component.navBar')
<div class="py-4">
  <div class="container">
      <div class="row">
        {{-- Main Content --}}
        @include ('pages.component.mainContent')
        
        {{-- left side bar  --}}
        @include ('pages.component.leftSideBar')
          
        {{-- Right side bar  --}}
        @include ('pages.component.rightSideBar')
      </div>
  </div>
</div>


@endsection