<section id='accordions'>

  <h2 class='page-title'>
    Accordions <small>for hiding expandable content</small>
  </h2>

  <h3>
    Basic Usage
  </h3>

  <p>
    Create an accordion using <code>Accordion::create($name)</code> and then
    use the chained method <code>->withContents()</code> to fill it with the
    contents.
  </p>
  
  {{ Alert::warning(Label::info('Heads Up!') . ' The $name parameter will be the id of the created accordion object, and the different sections will have the form $name-1 etc.')->block()->open() }}

  <div class='row'>
    <div class='col-md-6'>
      {{ Accordion::create("basic")->withContents(
	  array(
	    array('First Panel', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'),
	    array('Second Panel', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'),
	    array('Third Panel', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'),
	  )
	) }}
    </div>
    <div class='col-md-6'>
      <pre class='prettyprint'>
Accordion::create("basic")->withContents(
	  array(
	    array('First Panel', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'),
	    array('Second Panel', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'),
	    array('Third Panel', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'),
	  )
	)
</pre>
      {{ Alert::info("The format for the contents is an array of array. The inner arrays should be of the form <code>array('Heading', 'Content')</code>")->open() }}
    </div>
  </div>

  <h3>
    Setting a panel to open by default
  </h3>

  <p>
    Setting a default panel to be open is simple! Just pass in the number
    that you want opened as the second parameter to
    <code>->withContent()</code>
  </p>

  {{ Alert::info(Label::info("Heads up") . "The numbering starts at <strong>1</strong>, not 0 since the ids of the inner panels begin at 1")->open() }}
  
</section>
