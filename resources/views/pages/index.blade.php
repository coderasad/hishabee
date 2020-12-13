@extends('layouts.app')
@section('title')
  Home Page
@endsection

@section('content')
<div class="py-4">
  <div class="container">
      <div class="row">
        {{-- Main Content --}}
        @include ('pages.component.index.mainContent')
        
        {{-- left side bar  --}}
        @include ('pages.component.index.leftSideBar')
          
        {{-- Right side bar  --}}
        @include ('pages.component.index.rightSideBar')
      </div>
  </div>
</div>


@endsection