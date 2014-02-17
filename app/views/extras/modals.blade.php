<section id='modals'>

  <div id='page-header'>
    <h1>
      Modals
    </h1>
  </div>
  
  <h2>
    Modal Call
  </h2>
  <p>
    Just use the <code>create($label, $attributes = array())</code>
    method to open up the modal. Then just add a button to open it.
    <br />
    {{ Label::info('Heads Up!') }} The $label
    attribute makes the modal have that id.
  </p>
  <p>
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#example">
      Launch demo modal
    </button>
    {{ Modal::create('example')->header('Cras justo odio')->body('Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.')->footer('Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.') }}
  </p>
  <pre class='prettyprint linenums'>
Modal::create('example', array('id' => 'example'))
    ->header('Cras justo odio')
    ->body('Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.')
    ->footer('Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.')
</pre>
  <div class='row'>
    <div class='col-md-6'>
      <h2>
	Chained Methods
      </h2>
      <p>
	The best way of doing it is to create it using the static
	method <code>create($label, $attributes)</code>, then use the
	chained methods <code>header()</code>, <code>body()</code> and
	<code>footer()</code> to set the contents.
      </p>
    </div>
    <div class='col-md-6'>
      <h2>
	Shortcut Constructors
      </h2>
      <p>
	You can use <code>Modal::withHeader($label, $attributes)</code>,
	<code>Modal::withBody($label, $attributes)</code>,
	<code>Modal::withFooter($label, $attributes)</code> and then
	use the chained methods to set anything else
      </p>
      <p>
	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#header">
	  Header
	</button>  
	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#body">
	  Body
	</button>
	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#footer">
	  Footer
	</button>
      </p>
      {{ Modal::withHeader('header', 'header') }}
      {{ Modal::withBody('body', 'body') }}
      {{ Modal::withFooter('footer', 'footer') }}
      <pre class='prettyprint linenums'>
Modal::withHeader('header', 'header')

Modal::withBody('body', 'header')

Modal::withFooter('footer', 'header')
</pre>
    </div>
  </div>
</section>
