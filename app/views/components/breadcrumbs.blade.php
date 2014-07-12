<section id='breadcrumbs'>
  <div class="page-header">
    <h1>Breadcrumbs <small></small></h1>
  </div>
  <h3>Breadcrumbs create function</h3>
  <p>
    The Breadcrumbs requires an array of links. Pass in an associative
    array of <code>label => url</code>. Leave out the url for the
    active item.
  </p>
  <pre class="prettyprint linenums">
public static function create($links, $attributes = array())
</pre>
  <div class="row">
    <div class="col-md-6">
      <h3>
	Examples
      </h3>
      <p>
	A single example shown as it might be displayed across
	multiple pages.
      </p>

       Breadcrumb::create(array('Home')) 

       Breadcrumb::create(array('Home' => '#', 'Library')) 

       Breadcrumb::create(array('Home' => '#', 'Library' => '#', 'Data')) 

    </div>
    <div class="col-md-6">
      <h3>
	Markup
      </h3>
      <pre class="prettyprint linenums">
Breadcrumb::create(array('Home'))
Breadcrumb::create(array('Home' => '#', 'Library'))
Breadcrumb::create(array('Home' => '#', 'Library' => '#', 'Data'))
</pre>
    </div>
  </div>
</section>
