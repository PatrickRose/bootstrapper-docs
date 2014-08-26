@extends('layout')

@section('title')
    Components
@stop

@section('sidebar')
    {{ Navigation::pills([
          [
              'title' => 'Button groups',
              'link' => '#groups'
          ],
          [
              'title'=>'Button dropdowns',
              'link'=>'#dropdown'
          ],
          [
              'title'=>'Nav, tabs, pills',
              'link'=>'#navs'
          ],
          [
              'title'=>'Navbar',
              'link'=>'#navbar'
          ],
          [
              'title'=>'Breadcrumbs',
              'link'=>'#breadcrumbs'
          ],
          [
              'title'=>'Labels',
              'link' => '#labels'
          ],
          [
              'title'=>'Badges',
              'link'=>'#badges'
          ],
          [
              'title'=>'Alerts',
              'link' => '#alerts',
          ],
          [
              'title'=>'Progress bars',
              'link'=>'#progress'
          ],
          [
              'title'=>'Media object',
              'link'=>'#mediaobject'
          ],
          [
              'title'=>'Panels',
              'link'=>'#panel'
          ],
          [
              'title'=>'Thumbnails',
              'link'=>'#thumbnails'
          ],
      ], ['data-spy' => 'affix'])->stacked() }}
@stop

@section('content')
    <div class='page-header'>
        <h1>
            Components <small>Navigation, Alerts, Pagination, and much more.</small>
        </h1>
    </div>

    @include('components.buttons')

    @include('components.dropdown')

    @include('components.icons')

    @include('components.nav')

    @include('components.navbar')

    @include('components.breadcrumbs')

    @include('components.labels')

    @include('components.badges')

    @include('components.alerts')

    @include('components.progress')

    @include('components.mediaobject')

    @include('components.panels')

    @include('components.thumbnails')

@stop
