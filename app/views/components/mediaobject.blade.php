<section id='mediaobject'>
  <div class="page-header">
    <h1>
      Media Object
    </h1>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h3>
	Basic Example
      </h3>
       {{ MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.', 'http://placehold.it/64x64') }}
    </div>
    <div class="col-md-6">
      <h3>
	&nbsp;
      </h3>
      <pre class="prettyprint linenums">
//Simple form
MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')

//With detailed image
MediaObject::create('Cras sit amet...')
	->with_image('http://placehold.it/64x64', 'alt text')
</pre>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h3>
	With Title
      </h3>
      {{ MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.', 'http://placehold.it/64x64')
      ->with_h4('Media heading') }}
    </div>
    <div class="col-md-6">
      <h3>
	&nbsp;
      </h3>
      <pre class="prettyprint linenums">
// Add a title to the media object
MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_title('&lt;h4 class="media-heading"&gt;Media heading&lt;/h4&gt;')

// Automatic titles wrapping
MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
</pre>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h3>Nested</h3>
{{ MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'http://placehold.it/64x64')
      ->with_h4('Media heading')
      ->nest(
      MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'http://placehold.it/64x64')
      ->with_h4('Media heading')
      ->nest(
      MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.', 'http://placehold.it/64x64')
      ->with_h4('Media heading')
      )
      )->nest(
      MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'http://placehold.it/64x64')
      ->with_h4('Media heading')
      )->nest(
      MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'http://placehold.it/64x64')
      ->with_h4('Pull Right')
      ->pull_right()
      ) }}
    </div>
    <div class="col-md-6">
      <h3>&nbsp;</h3>
      <pre class="prettyprint linenums">
// Add a title to the media object
MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
        ->nest(
        MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
        ->nest(
        MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
        )
        )->nest(
        MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
        )->nest(
        MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Pull Right')
        ->pull_right()
        )
</pre>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h3>As List</h3>
      {{ MediaObject::open_list() }}
      {{ MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.', 'http://placehold.it/64x64')
	->with_h4('Media heading') }}
      {{ MediaObject::create('Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.', 'http://placehold.it/64x64')
	->with_h4('Media heading') }}
      {{ MediaObject::close_list() }}
    </div>
    <div class="col-md-6">
      <h3>&nbsp;</h3>
      <pre class="prettyprint linenums">
MediaObject::open_list()
MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
MediaObject::create('Cras sit amet...', 'http://placehold.it/64x64')
        ->with_h4('Media heading')
MediaObject::close_list()
</pre>
    </div>
  </div>
</section>
