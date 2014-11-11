<section id='mediaobject'>
  <div class="page-header">
    <h1>
      Media Object
    </h1>
  </div>

    <p>
        Creating media objects is simple! Just pass an array into the <code>withContents()</code> method.
    </p>
    {{ MediaObject::withContents(
            [
                'image' => '//placehold.it/64x64',
                'link' => '#',
                'heading' => 'Cras sit amet',
                'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.'
            ]
        )}}

      <pre class="prettyprint linenums">
MediaObject::withContents(
    [
        'image' => '//placehold.it/64x64',
        'link' => '#',
        'heading' => 'Cras sit amet',
        'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.'
    ]
)
</pre>

   {{ Alert::info('You <strong>must</strong> provide an <code>image</code> and <code>body</code> key.
                      The <code>link</code> and <code>heading</code> keys are optional.') }}

      <h3>Nested</h3>

      <p>
          Nesting of media objects is supported by using the <code>nest</code> array key.
          This array will be passed into a <code>withContents()</code> method, so
          use the keys you would use there.
      </p>

      <p>
      {{ MediaObject::withContents(
          [
              'image' => '//placehold.it/64x64',
              'link' => '#',
              'heading' => 'Nesting a Media Object',
              'body' => 'Oh boy, here comes a nested object!',
              'nest' => [
                      'image' => '//placehold.it/64x64',
                      'link' => '#',
                      'heading' => 'Cras sit amet',
                      'body' => 'I am all nested and other things like that'
              ]
          ]
          ) }}
      </p>
      <pre class="prettyprint linenums">
MediaObject::withContents(
    [
        'image' => '//placehold.it/64x64',
        'link' => '#',
        'heading' => 'Nesting a Media Object',
        'body' => 'Oh boy, here comes a nested object!',
        'nest' => MediaObject::withContents(
            [
                'image' => '//placehold.it/64x64',
                'link' => '#',
                'heading' => 'Cras sit amet',
                'body' => 'I am all nested and other things like that'
            ])
    ]
)
</pre>

    <h3>
        Floating Right
    </h3>

    <p>
        If you instead want the image to appear on the right, then use the <code>position</code>
        array key.
    </p>

    <p>
          {{ MediaObject::withContents(
              [
                  'image' => '//placehold.it/64x64',
                  'link' => '#',
                  'heading' => 'Media Object on the right',
                  'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.',
                  'position' => 'right'
              ]
              ) }}
          </p>
          <pre class="prettyprint linenums">
MediaObject::withContents(
    [
        'image' => '//placehold.it/64x64',
        'link' => '#',
        'heading' => 'Media Object on the right',
        'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.',
        'position' => 'right'
    ]
)
</pre>

    <h3>As List</h3>
         <p>
             We automatically turn a multiple MediaObjects into a list. You can also
             force a list by using the <code>asList()</code> method (if, for example, you
             only have one object).
         </p>

         <div class="row">
         <div class="col-md-6">
             <h4>
                 Using <code>asList()</code>
             </h4>

         <p>
             {{
                 MediaObject::withContents([
                     [
                         'image' => '//placehold.it/64x64',
                         'link' => '#',
                         'heading' => 'Cras sit amet',
                         'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.'
                     ]
                 ])->asList()
             }}
         </p>
         </div>

         <div class="col-md-6">
             <h4>
                 Passing in multiple arrays
             </h4>

         <p>
             {{
                 MediaObject::withContents([
                     [
                         'image' => '//placehold.it/64x64',
                         'link' => '#',
                         'heading' => 'Cras sit amet',
                         'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.'
                     ],
                     [
                         'image' => '//placehold.it/64x64',
                         'link' => '#',
                         'heading' => 'Cras sit amet',
                         'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.'
                     ],
                 ])
             }}
         </p>
         </div>
         </div>

      <pre class="prettyprint linenums">
// Using asList
MediaObject::withContents([
    [
        'image' => '//placehold.it/64x64',
        'link' => '#',
        'heading' => 'Cras sit amet',
        'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.'
    ]
)->asList()

// Multiple Inner Arrays
MediaObject::withContents([
    [
        'image' => '//placehold.it/64x64',
        'link' => '#',
        'heading' => 'Cras sit amet',
        'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.'
    ],
    [
        'image' => '//placehold.it/64x64',
        'link' => '#',
        'heading' => 'Cras sit amet',
        'body' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.'
    ],
])
</pre>
</section>
