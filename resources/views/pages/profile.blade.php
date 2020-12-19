@extends('layouts.app')
@section('title')
  Profile Page
@endsection

@section('content')
<div class="py-4">
  <div class="container">
      <div class="row">
        {{-- Main Content --}}
        @include ('pages.component.profile.mainContent')
        
        {{-- left side bar  --}}
        @include ('pages.component.profile.leftSideBar')
          
        {{-- Right side bar  --}}
        @include ('pages.component.index.rightSideBar')
      </div>
  </div>
</div>


@endsection