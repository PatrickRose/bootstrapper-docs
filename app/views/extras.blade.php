@extends('layout')

@section('title')
  Extras
@stop

@section('content')
  <h1>
    Extras
  </h1>
  <p class="lead">
    More Bootstrap goodness from Laravel Bootstrapper.
  </p>
  <div class="subnav">
    {{ Navigation::pills(
        array(
          array('label'=>'Carousel', 'url'=>'#carousel'),
	  array('label'=>'Modals', 'url'=>'#modals'),
	  array('label'=>'Accordions', 'url'=>'#accordions'),
        )
      ) }}
  </div>

  @include("extras.carousel")

  @include("extras.modals")

  @include("extras.accordions")

@stop
