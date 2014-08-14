<section id='breadcrumbs'>

  <div class="page-header">
    <h1>Breadcrumbs <small></small></h1>
  </div>
  <p>
    The Breadcrumbs requires an array of links. Pass in an associative
    array of <code>label => url</code>. Leave out the url for the
    active item.
  </p>
      <h3>
	Examples
      </h3>
      <p>
	A single example shown as it might be displayed across
	multiple pages.
      </p>

       {{ Breadcrumb::withLinks(array('Home'))  }}
       {{ Breadcrumb::withLinks(array('Home' => '#', 'Library'))  }}
       {{ Breadcrumb::withLinks(array('Home' => '#', 'Library' => '#', 'Data'))  }}

      <h3>
	Markup
      </h3>
      <pre class="prettyprint linenums">
Breadcrumb::withLinks(array('Home'))
Breadcrumb::withLinks(array('Home' => '#', 'Library'))
Breadcrumb::withLinks(array('Home' => '#', 'Library' => '#', 'Data'))
</pre>
</section>
