<section id='accordions'>

  <h2 class='page-title'>
    Accordions <small>for hiding expandable content</small>
  </h2>

  <h3>
    Basic Usage
  </h3>

  <p>
    Create an accordion using <code>Accordion::named($name)</code> and then
    use the chained method <code>->withContents()</code> to fill it with the
    contents.
  </p>
  
  {{ Alert::warning(Label::info('Heads Up!') . ' The $name parameter will be the id of the created accordion object, and the different sections will have the form $name-0 etc.') }}

      {{ Accordion::named("basic")->withContents([
	    [
	        'title' => 'First Panel',
	        'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit',
	    ],
	    [
	        'title' => 'Second Panel',
	        'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'
	    ],
	    [
	        'title' => 'Third Panel',
	        'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit',
	    ],
	  ]) }}
      <pre class='prettyprint'>
Accordion::named("basic")->withContents([
	[
	    'title' => 'First Panel',
	    'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit',
	],
	[
	    'title' => 'Second Panel',
	    'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'
	],
	[
	    'title' => 'Third Panel',
	    'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit',
	],
])
</pre>
      {{ Alert::info("The format for the contents is an array of arrays. The inner arrays should be of the form:<br /><code>array('title' => 'Title', 'contents' => 'Content')</code>") }}

    <h3>
        Setting a panel to open by default
    </h3>

    <p>
      Setting a default panel to be open is simple! Just pass in the number
      that you want opened as the second parameter to
      <code>->withContent()</code>
    </p>

    {{ Accordion::named("opening")->withContents([
   	    [
   	        'title' => 'First Panel',
   	        'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit',
   	    ],
        [
            'title' => 'Second Panel',
            'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'
        ],
        [
            'title' => 'Third Panel',
            'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit',
        ],
    ])->open(0) }}
      <pre class='prettyprint'>
Accordion::named("basic")->withContents([
	[
	    'title' => 'First Panel',
	    'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit',
	],
	[
	    'title' => 'Second Panel',
	    'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit'
	],
	[
	    'title' => 'Third Panel',
	    'contents' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit',
	],
])->open(0)
</pre>

<h3>
    Styling
</h3>

<p>
    As with most Bootstrapper objects, the <code>Accordion</code> has a
    <code>withAttributes(array $attributes)</code> method. You can also pass attributes
    to each of the accordion panels with the <code>attributes</code> key
</p>

{{
    Accordion::named('yorkshire')->withContents([
        [
            'title' => 'Attributes',
            'contents' => 'What\'s that when it\'s at ooam. Is that thine will \'e \'eckerslike tintintin any rooad chuffin\' nora gerritetten. Ah\'ll gi\' thee a thick ear gerritetten nobbut a lad. Ee by gum eeh face like a slapped arse. Is that thine wacken thi sen up ah\'ll gi\' thi summat to rooer abaht any rooad wacken thi sen up. Face like a slapped arse. A pint \'o mild. Gi\' o\'er gerritetten that\'s champion face like a slapped arse face like a slapped arse. A pint \'o mild. Face like a slapped arse tha what ne\'ermind.',
            'attributes' => ['class' => 'yorkshire panel-info', 'data-foo' => 'bar'],
        ]
    ])->withAttributes(['data-foo' => 'bar'])
}}
<pre class="prettyprint">
Accordion::named('yorkshire')->withContents([
    [
        'title' => 'Attributes',
        'contents' => 'What\'s that when it\'s at ooam. Is that thine will \'e \'eckerslike tintintin any rooad chuffin\' nora gerritetten. Ah\'ll gi\' thee a thick ear gerritetten nobbut a lad. Ee by gum eeh face like a slapped arse. Is that thine wacken thi sen up ah\'ll gi\' thi summat to rooer abaht any rooad wacken thi sen up. Face like a slapped arse. A pint \'o mild. Gi\' o\'er gerritetten that\'s champion face like a slapped arse face like a slapped arse. A pint \'o mild. Face like a slapped arse tha what ne\'ermind.',
        'attributes' => ['class' => 'yorkshire panel-info', 'data-foo' => 'bar'],
    ]
])->withAttributes(['data-foo' => 'bar'])
</pre>
{{ Alert::info(Label::info('Heads Up!') . ' Want to use <code>.panel-warning</code> etc instead of the default <code>.panel-default</code>? Go ahead! <code>.panel-*</code> have priority over <code>.panel-default</code>') }}
</section>
