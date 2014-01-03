@extends('layout')

@section('title')
  Welcome!
@stop

@section('content')
  <div class="jumbotron masthead">
    <div class="container">
      <h1>Bootstrapper for Laravel</h1>
      <p>This site uses a design similar to <a href="http://getbootstrap.com/">Twitter Bootstrap</a> to allow you to refer back and forth between the two sites if needed.</p>

      <p>View the {{ link_to('installation', 'install docs') }} to enable Bootstrapper in your Laravel project.</p>

      <p class="download-info">
        <a href="https://github.com/patricktalmadge/bootstrapper/tree/develop" class="btn btn-primary btn-large">View project on GitHub</a>
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
@stop
