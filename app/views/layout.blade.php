<!doctype html>
<html>
  <head>
    <title>@yield('title') - Bootstrapper</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
      {{ HTML::style('css/bootstrap.css') }}
      {{ HTML::style('css/bootstrap-theme.css') }}
    {{ HTML::style('app.css') }}
  </head>
  <body data-spy="scroll" data-target=".subnav">

   {{ Navbar::top()
    ->withBrand('Bootstrapper')
    ->withContent(
        Navigation::links([
            [
                'link' => url('installation'),
                'title' => 'Installation'
            ],
            [
                'link' => url('css'),
                'title' => 'Base CSS'
            ],
            [
                'link' => url('components'),
                'title' => 'Components'
            ],
            [
                'link' => url('extras'),
                'title' => 'Extras'
            ],
            [
                'link' => url('migration'),
                'title' => 'Migration'
            ]
        ])
    ) }}
    <div class='container'>

        <div class="row">
        <div class="col-md-8">
        @yield('content')
        </div>
        <div class="col-md-4">
            <div class="subnav">
                @yield('sidebar')
            </div>
        </div>
        </div>
      <footer class="footer">
        <p class="pull-right">
          <a href="#">Back to top</a>
        </p>
        <p>
          Created by Patrick Talmadge <a href="http://twitter.com/patricktalmadge" target="_blank">@patricktalmadge</a>.
        </p>
        <p>
          Maintained by Patrick Rose <a href="http://twitter.com/DrugCrazed" target="_blank">@DrugCrazed</a>.
        </p>
        <p>
          Package for <a href="http://laravel.com/">Laravel</a> to output <a href="http://getbootstrap.com">Twitter Bootstrap</a> markup.
        </p>
        <p>
          Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>.
          Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
      </footer>
    </div>
    {{ HTML::script('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js') }}
    {{ HTML::script('jquery.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('app.js') }}
  </body>
</html>
