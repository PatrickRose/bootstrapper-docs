@extends('layout')

@section('title')
  Installation
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

  <div class='subnav'>
    {{
      Navigation::pills(
        array(
          array('label'=>'Quick', 'url'=>'#quick'),
          array('label'=>'Detailed', 'url'=>'#detailed'),
        )
      )
      }}
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
  "patricktalmadge/bootstrapper": "dev-develop"
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
'Alert' => 'Bootstrapper\\Alert',
'Badge' => 'Bootstrapper\\Badge',
'Breadcrumb' => 'Bootstrapper\\Breadcrumb',
'Button' => 'Bootstrapper\\Button',
'ButtonGroup' => 'Bootstrapper\\ButtonGroup',
'ButtonToolbar' => 'Bootstrapper\\ButtonToolbar',
'Carousel' => 'Bootstrapper\\Carousel',
'DropdownButton' => 'Bootstrapper\\DropdownButton',
'Form' => 'Bootstrapper\\Form',
'Helpers' => 'Bootstrapper\\Helpers',
'Icon' => 'Bootstrapper\\Icon',
'Image' => 'Bootstrapper\\Image',
'Label' => 'Bootstrapper\\Label',
'MediaObject' => 'Bootstrapper\\MediaObject',
'Navbar' => 'Bootstrapper\\Navbar',
'Navigation' => 'Bootstrapper\\Navigation',
'Paginator' => 'Bootstrapper\\Paginator',
'Progress' => 'Bootstrapper\\Progress',
'Tabbable' => 'Bootstrapper\\Tabbable',
'Table' => 'Bootstrapper\\Table',
'Thumbnail' => 'Bootstrapper\\Thumbnail',
'Typeahead' => 'Bootstrapper\\Typeahead',
'Typography' => 'Bootstrapper\\Typography',
</pre>

  <p>
    And you're good to go!
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
  "patricktalmadge/bootstrapper": "dev-develop"
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
    This bit's optional, but it does make life a lot easier in the long run so it's advised. <em>If you don't want to do this, that's fine - but since it saves you writing <code>Bootstrapper\Navbar::create()</code> (and lets you write <code>Navbar::create()</code>) with no performance hit...</em>. Add the following to your aliases array:
  </p>

<pre class="prettyprint linenums lang-php">
'aliases' => array(
  'Alert' => 'Bootstrapper\\Alert',
  'Badge' => 'Bootstrapper\\Badge',
  'Breadcrumb' => 'Bootstrapper\\Breadcrumb',
  'Button' => 'Bootstrapper\\Button',
  'ButtonGroup' => 'Bootstrapper\\ButtonGroup',
  'ButtonToolbar' => 'Bootstrapper\\ButtonToolbar',
  'Carousel' => 'Bootstrapper\\Carousel',
  'DropdownButton' => 'Bootstrapper\\DropdownButton',
  'Form' => 'Bootstrapper\\Form',
  'Helpers' => 'Bootstrapper\\Helpers',
  'Icon' => 'Bootstrapper\\Icon',
  'Image' => 'Bootstrapper\\Image',
  'Label' => 'Bootstrapper\\Label',
  'MediaObject' => 'Bootstrapper\\MediaObject',
  'Navbar' => 'Bootstrapper\\Navbar',
  'Navigation' => 'Bootstrapper\\Navigation',
  'Paginator' => 'Bootstrapper\\Paginator',
  'Progress' => 'Bootstrapper\\Progress',
  'Tabbable' => 'Bootstrapper\\Tabbable',
  'Table' => 'Bootstrapper\\Table',
  'Thumbnail' => 'Bootstrapper\\Thumbnail',
  'Typeahead' => 'Bootstrapper\\Typeahead',
  'Typography' => 'Bootstrapper\\Typography',
)
</pre>

  <p>
    And you're good to go! Enjoy creating with Bootstrap!
  </p>
    
  </section>

@stop
