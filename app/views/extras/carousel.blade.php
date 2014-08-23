<section id='carousel'>
  <div class="page-header">
    <h1>
      Carousel
      <small>
	Requires bootstrap.js
      </small>
    </h1>
  </div>

  <p>
      Create a carousel with the <code>withContents()</code> function.
  </p>

  {{ Alert::danger(Label::danger('Heads up!') . ' You <strong>must</strong> name your carousel using the <code>named()</code>. Forgetting to do so will throw a <code>Bootstrapper\Exceptions\CarouselException</code>.') }}

  <p>
  {{ Carousel::named('example')->withContents([
      [
          'image' => '//lorempixel.com/800/400/city',
          'alt' => 'something',
      ],
      [
          'image' => '//lorempixel.com/800/400/people',
          'alt' => 'something else',
      ],
  ]) }}
  </p>
  <pre class="prettyprint linenums">
Carousel::named('example')->withContents([
    [
        'image' => '//lorempixel.com/800/400/city',
        'alt' => 'something',
    ],
    [
        'image' => '//lorempixel.com/800/400/people',
        'alt' => 'something else',
    ],
])
</pre>

{{ Alert::info('The inner arrays expect the keys <code>image</code> and <code>alt</code>.') }}

<h3>
    Adding captions
</h3>

<p>
    If you want to add a caption, use the <code>caption</code> key in the inner array
</p>

  <p>
  {{ Carousel::named('captions')->withContents([
      [
          'image' => '//lorempixel.com/800/400/abstract',
          'alt' => 'something',
          'caption' => 'Here is a caption'
      ],
      [
          'image' => '//lorempixel.com/800/400/nature',
          'alt' => 'something else',
          'caption' => 'Here is a another caption!'
      ],
      [
          'image' => '//lorempixel.com/800/400/cats',
          'alt' => 'MORE CAPTIONS',
          'caption' => 'Jesus, what\'s with these captions!?'
      ]
  ]) }}
  </p>
  <pre class="prettyprint linenums">
Carousel::named('example')->withContents([
    [
        'image' => '//lorempixel.com/800/400/abstract',
        'alt' => 'something',
        'caption' => 'Here is a caption'
    ],
    [
        'image' => '//lorempixel.com/800/400/nature',
        'alt' => 'something else',
        'caption' => 'Here is a another caption!'
    ],
    [
        'image' => '//lorempixel.com/800/400/cats',
        'alt' => 'MORE CAPTIONS',
        'caption' => 'Jesus, what\'s with these captions!?'
    ]
])
</pre>


</section>
