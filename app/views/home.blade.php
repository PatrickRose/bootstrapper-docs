<!doctype html>
<html>
  <head>
    <title>Welcome! - Bootstrapper</title>

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
                'link' => route('installation'),
                'title' => 'Installation'
            ],
            [
                'link' => route('css'),
                'title' => 'Base CSS'
            ],
            [
                'link' => route('components'),
                'title' => 'Components'
            ],
            [
                'link' => route('extras'),
                'title' => 'Extras'
            ],
            [
                'link' => route('migration'),
                'title' => 'Migration'
            ]
        ])
    ) }}
    <div class='container'>

  <div class="jumbotron masthead">
    <div class="container">
      <h1>Bootstrapper for Laravel</h1>
      <p>This site uses a design similar to <a href="http://getbootstrap.com/">Twitter Bootstrap</a> to allow you to refer back and forth between the two sites if needed.</p>

      <p>View the {{ link_to('installation', 'install docs') }} to enable Bootstrapper in your Laravel project.</p>

      <p class="download-info">
        <a href="https://github.com/patricktalmadge/bootstrapper" class="btn btn-primary btn-large">View project on GitHub</a><br />
        <a href="https://github.com/PatrickRose/bootstrapper-docs/tree/v4" class="btn btn-default">Need the old docs? Build them from GitHub here</a>
      </p>
    </div>

    <div class="bs-links">
      <ul class="quick-links">
        <li class="follow-btn">
          <a href="https://twitter.com/DrugCrazed" class="twitter-follow-button" data-show-count="false">Follow @DrugCrazed</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </li>
        <li class="tweet-btn">
          <a href="https://twitter.com/share" class="twitter-share-button" data-via="DrugCrazed">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </li>
      </ul>
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
          Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.
        </p>
      </footer>
    </div>
    {{ HTML::script('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js') }}
    {{ HTML::script('jquery.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('app.js') }}
  </body>
</html>
