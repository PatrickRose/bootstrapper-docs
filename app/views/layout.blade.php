<!doctype html>
<html>
  <head>
    {{ Bootstrapper\Helpers::get_CSS() }}
    <title>@yield('title') - Bootstrapper</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    {{ HTML::style('app.css') }}
  </head>
  <body data-spy="scroll" data-target=".subnav">

    <div class='container'>
      {{
        Navbar::create(array('role'=>'navigation'), Navbar::FIX_TOP)
        ->with_brand('Bootstrapper', url(''))
        ->with_menus(
          Navigation::links(
            array(
              array('Home', url('')),
              array('Installation', url('installation')),
              array('Base CSS', url('css')),
	      array('Components', url('components')),
	      array('Extras', url('extras')),
	      array('Migration', url('migration')),
            ))
        )
        ->collapsible()
        ->render()
        }}

      @yield('content')

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
    {{ Bootstrapper\Helpers::get_JS() }}
    {{ HTML::script('app.js') }}
  </body>
</html>
