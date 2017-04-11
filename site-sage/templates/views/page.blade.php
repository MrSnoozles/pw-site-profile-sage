@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('views.partials.page-header')
    @include('views.partials.content-page')
  @endwhile
@endsection
