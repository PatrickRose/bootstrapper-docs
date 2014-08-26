@extends('layout')

@section('title')
  Base CSS
@stop

@section('sidebar')
    {{ Navigation::pills([
        [
            'title' => 'Tables',
            'link' => '#tables'
        ],
        [
             'title' => 'Forms',
             'link' => '#forms'
        ],
        [
             'title' => 'Buttons',
             'link' => '#buttons'
        ],
        [
             'title' => 'Images',
             'link' => '#images'
        ],
    ], ['data-spy' => 'affix'])->stacked()->render() }}
@stop

@section('content')
<div class='page-header'>
    <h1>Base CSS <small>Basic Bootstrap goodness from Laravel Bootstrapper</small></h1>
  </div>

  @include('css.tables')

  @include('css.forms')

  @include('css.buttons')

  @include('css.images')
  
@stop
