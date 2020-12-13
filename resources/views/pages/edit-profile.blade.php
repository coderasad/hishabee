@extends('layouts.app')
@section('title')
  Edit Profile Page
@endsection

@section('content')
<div class="py-4">
  <div class="container">
      <div class="row">
        {{-- edit profile Content --}}
        @include ('pages.component.edit-profile.leftComponent')
        @include ('pages.component.edit-profile.rightComponent')
      </div>
  </div>
</div>


@endsection