@extends('layout')

@section('title')
  Extras
@stop

@section('sidebar')
{{ Navigation::pills([
    ['title'=>'Carousel', 'link'=>'#carousel'],
   	['title'=>'Modals', 'link'=>'#modals'],
   	['title'=>'Accordions', 'link'=>'#accordions'],
   	['title'=>'Tabbable', 'link'=>'#tabbables'],
 ], ['data-spy' => 'affix'])->stacked() }}
@stop

@section('content')
  <h1>
    Extras
  </h1>
  <p class="lead">
    More Bootstrap goodness from Laravel Bootstrapper.
  </p>

  @include("extras.carousel")

  @include("extras.modals")

  @include("extras.accordions")

  @include("extras.tabbable")

@stop
