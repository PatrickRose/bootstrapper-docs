@extends('layout')

@section('title')
  Migration
@stop

@section('content')
  <div class='subnav'>
    {{ Navigation::pills(
        Navigation::links(
          array(
            array('Bootstrap 2', '#bootstrap2'),
          )
        )
      )}}
  </div>

  <div class='page-header'>
    <h1>
      Migrating <small>from an older version of Bootstrapper</small>
    </h1>
  </div>

  @include('migration.bootstrap')

@stop
