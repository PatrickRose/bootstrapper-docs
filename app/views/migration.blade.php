@extends('layout')

@section('title')
  Migration
@stop

@section('content')

      @include('migration.v5')

  @include('migration.bootstrap')


@stop

@section('sidebar')

{{ Navigation::pills(
[
[
'link' => '#v5',
'title' => 'Version 5'
],
[
'link' => '#bootstrap2',
'title' => 'Version 4.1'
]
], ['data-spy' => 'affix'])->stacked() }}
@stop
