@extends('layouts.app')
@section('title')
  Edit Profile Page
@endsection

@section('content')

@include ('pages.component.navBar')
<div class="py-4">
  <div class="container">
      <div class="row">
        {{-- edit profile Content --}}
        @include ('pages.component.editProfileLeftComponent')
        @include ('pages.component.editProfileMainComponent')
      </div>
  </div>
</div>


@endsection