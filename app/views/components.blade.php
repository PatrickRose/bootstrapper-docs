@extends('layout')

@section('title')
  Components
@stop

@section('content')
  <div class='page-header'>
    <h1>
      Components <small>Navigation, Alerts, Pagination, and much more.</small>
    </h1>
  </div>
  <div class="subnav">
    {{ Navigation::pills(
        array(
          array('label'=>'Buttons',
                'url'=>'#',
                'items'=> array(
              array('label' => 'Button groups',
                    'url' => '#groups'
                    ),
              array('label'=>'Button dropdowns',
                    'url'=>'#dropdown'
                    ),
            )
                ),
          array('label'=>'Navigation',
                'url'=>'#',
                'items'=> array(
              array(
                'label'=>'Nav, tabs, pills',
                'url'=>'#navs'
              ),
              array(
                'label'=>'Navbar',
                'url'=>'#navbar'
              ),
              array('label'=>'Breadcrumbs',
                    'url'=>'#breadcrumbs'
                    ),
              array('label'=>'Pagination',
                    'url'=>'#pagination'
                    ),
            )
                ),
          array('label'=>'Labels', 'url' => '#labels'),
          array('label'=>'Badges', 'url'=>'#badges'),
          array('label'=>'Alerts', 'url' => '#alerts'),
          array('label'=>'Progress bars', 'url'=>'#progress'),
          array('label'=>'Media object', 'url'=>'#mediaobject'),
        )
      ) }}
  </div>

  @include('components.buttons')

  @include('components.dropdown')

  @include('components.nav')

  @include('components.navbar')

  @include('components.breadcrumbs')

  @include('components.pagination')

  @include('components.labels')

  @include('components.badges')

  @include('components.alerts')

  @include('components.progress')

  @include('components.mediaobject')

@stop
