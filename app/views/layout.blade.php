<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <title>@yield('title') - Bootstrapper</title>
    {{ HTML::style('app.css') }}
  </head>
  <body data-spy="scroll" data-target=".subnav" data-offset="50">

    <div class='container'>
      {{
        Navbar::create(array('role'=>'navigation'), Navbar::FIX_TOP)
        ->with_brand('Bootstrapper', url(''))
        ->with_menus(
          Navigation::links(
            array(
              array('Home', url('')),
              array('Installation', url('installation')),
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
        <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>. Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
      </footer>
    </div>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    {{ HTML::script('app.js') }}
  </body>
</html>
