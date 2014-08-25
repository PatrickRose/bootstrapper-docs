@extends('layout')

@section('title')
  Base CSS
@stop

@section('content')
<div class='subnav'>
   Navigation::pills(
      Navigation::links(
        array(
          array('Typography', '#typography'),
          array('Tables', '#tables'),
          array('Forms', '#forms'),
          array('Buttons', '#buttons'),
          array('Images', '#images'),
        )
      )
    )
</div>
<div class='page-header'>
    <h1>Base CSS <small>Basic Bootstrap goodness from Laravel Bootstrapper</small></h1>
  </div>

  @include('css.tables')

  @include('css.forms')

  @include('css.buttons')

  @include('css.images')
  
@stop
