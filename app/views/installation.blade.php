@extends('layout')

@section('title')
  Installation
@stop

@section('sidebar')
    {{ Navigation::pills(
           [
                 array('title' => 'Quick', 'link' => '#quick'),
                 array('title' => 'Detailed', 'link' => '#detailed'),
           ],
           ['data-spy' => 'affix']
       )->stacked() }}
@stop

@section('content')

  <div class='page-header'>
    <h1>
      Installation
      <small>
        Nice and easy!
      </small>
    </h1>
  </div>
  <section id='quick'>
    <div class='page-header'>
      <h2>
        Quick instructions <small>For those who've done this a lot</small>
      </h2>
    </div>
    <p>
      Add the following to your <code>composer.json</code>:
    </p>
    <pre class="prettyprint linenums lang-javascript">
"require": {
    "patricktalmadge/bootstrapper": "4.1.*"
}
    </pre>

    <p>
      Register the Bootstrapper Service Provider:
    </p>

    <pre class="prettyprint linenums lang-php">
'providers' => array(
    'Bootstrapper\BootstrapperServiceProvider'
)
</pre>

    <p>
      (Optional) Add the following aliases:
    </p>

    <pre class="prettyprint linenums lang-php">
'Accordion' => 'Bootstrapper\Facades\Accordion',
'Alert' => 'Bootstrapper\Facades\Alert',
'Badge' => 'Bootstrapper\Facades\Badge',
'Breadcrumb' => 'Bootstrapper\Facades\Breadcrumb',
'Button' => 'Bootstrapper\Facades\Button',
'ButtonGroup' => 'Bootstrapper\Facades\ButtonGroup',
'Carousel' => 'Bootstrapper\Facades\Carousel',
'ControlGroup' => 'Bootstrapper\Facades\ControlGroup',
'DropdownButton' => 'Bootstrapper\Facades\DropdownButton',
'Form' => 'Bootstrapper\Facades\Form',
'Helpers' => 'Bootstrapper\Facades\Helpers',
'Icon' => 'Bootstrapper\Facades\Icon',
'InputGroup' => 'Bootstrapper\Facades\InputGroup',
'Image' => 'Bootstrapper\Facades\Image',
'Label' => 'Bootstrapper\Facades\Label',
'MediaObject' => 'Bootstrapper\Facades\MediaObject',
'Modal' => 'Bootstrapper\Facades\Modal',
'Navbar' => 'Bootstrapper\Facades\Navbar',
'Navigation' => 'Bootstrapper\Facades\Navigation',
'Panel' => 'Bootstrapper\Facades\Panel',
'ProgressBar' => 'Bootstrapper\Facades\ProgressBar',
'Tabbable' => 'Bootstrapper\Facades\Tabbable',
'Table' => 'Bootstrapper\Facades\Table',
'Thumbnail' => 'Bootstrapper\Facades\Thumbnail',
</pre>

    <p>
      Download and include the Twitter Bootstrap CSS and Javascript files and you're good to go!
    </p>

  </section>

  <section id='detailed'>
    <div class='page-header'>
      <h2>
        Detailed instructions <small>For those want to see what's going on</small>
      </h2>
    </div>

    <p>
      First, open up your <code>composer.json</code> file and add the following to your require list:
    </p>
    <pre class="prettyprint linenums lang-javascript">
"require": {
  "patricktalmadge/bootstrapper": "~5"
}
</pre>

    <p>
      Then run <code>composer update</code> in your terminal and get a coffee/tea/your beverage of choice while it updates. I find that makes the wait much nicer.
    </p>

    <p>
      Then open up <code>app/config/app.php</code> and register the Bootstrapper Service Provider in the providers array:
    </p>

    <pre class="prettyprint linenums lang-php">
'providers' => array(
  'Bootstrapper\BootstrapperServiceProvider'
)
</pre>

    <p>
      This means you'll get to use all the juicy goodness that Bootstrapper provides.
    </p>

    <p>
      This bit's optional, but it does make life a lot easier in the long run so it's advised. <em>If you don't want to do this, that's fine - but since it saves you writing <code>Navbar::create()</code>) with no performance hit...</em>. Add the following to your aliases array:
    </p>

    <pre class="prettyprint linenums lang-php">
'aliases' => array(
    'Accordion' => 'Bootstrapper\Facades\Accordion',
    'Alert' => 'Bootstrapper\Facades\Alert',
    'Badge' => 'Bootstrapper\Facades\Badge',
    'Breadcrumb' => 'Bootstrapper\Facades\Breadcrumb',
    'Button' => 'Bootstrapper\Facades\Button',
    'ButtonGroup' => 'Bootstrapper\Facades\ButtonGroup',
    'Carousel' => 'Bootstrapper\Facades\Carousel',
    'ControlGroup' => 'Bootstrapper\Facades\ControlGroup',
    'DropdownButton' => 'Bootstrapper\Facades\DropdownButton',
    'Form' => 'Bootstrapper\Facades\Form',
    'Helpers' => 'Bootstrapper\Facades\Helpers',
    'Icon' => 'Bootstrapper\Facades\Icon',
    'InputGroup' => 'Bootstrapper\Facades\InputGroup',
    'Image' => 'Bootstrapper\Facades\Image',
    'Label' => 'Bootstrapper\Facades\Label',
    'MediaObject' => 'Bootstrapper\Facades\MediaObject',
    'Modal' => 'Bootstrapper\Facades\Modal',
    'Navbar' => 'Bootstrapper\Facades\Navbar',
    'Navigation' => 'Bootstrapper\Facades\Navigation',
    'Panel' => 'Bootstrapper\Facades\Panel',
    'ProgressBar' => 'Bootstrapper\Facades\ProgressBar',
    'Tabbable' => 'Bootstrapper\Facades\Tabbable',
    'Table' => 'Bootstrapper\Facades\Table',
    'Thumbnail' => 'Bootstrapper\Facades\Thumbnail',
)
</pre>

    <p>
      Now all you need to do is include the Bootstrap files. Feel free to do this however you want:
    </p>

    <ul>
      <li>
	Download <code>bootstrap.min.js</code> from
	<a href='http://getbootstrap.com'>Bootstrap</a>, and pop them in your public folder.
	Then do the same with <a href='http://jquery.com/download/'>Jquery</a>.
	Then use the following in your views to include Bootstrap and Jquery:
	<pre class='prettyprint'>
HTML::style('css/bootstrap.min.css')
HTML::script('js/jquery.min.js')
HTML::script('js/bootstrap.min.js')
</pre>
{{ Alert::info('Since v5.0.0, we have Twitter Bootstrap as a dependency in the composer.json so these files will be included in <code>vendor/twbs/bootstrap/dist</code> (except jQuery). You\'ll still need to move them manually') }}
      </li>
      <li>
	Use the various CDNs to include the relevant files:
	<pre class='prettyprint'>
HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css')
HTML::script('http://code.jquery.com/jquery-1.10.1.min.js')
HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')
</pre>
      </li>
      <li>
	Let Bootstrapper handle it using the helper method:
	<pre class='prettyprint'>
Helpers::css()
Helpers::js()
</pre>
	This will get the latest version that we support. If you want a specific version of either,
	run <kbd>php artisan config:publish patricktalmadge/bootstrapper</kbd> and edit the values in
	<code>app/config/packages/patricktalmadge/bootstrapper/config.php</code>.
      </li>
    </ul>

  </section>

@stop
