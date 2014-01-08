<section id='images'>

  <div class='page-header'>
    <h2>
      Images
    </h2>
  </div>

  <div class='row'>
    <div class='col-md-6'>
      {{ Image::rounded('http://placehold.it/140x140', 'rounded') }}
      {{ Image::circle('http://placehold.it/140x140', 'circle') }}
      {{ Image::polaroid('http://placehold.it/140x140', 'polaroid') }}
    </div>
    <div class='col-md-6'>
      <p>
	Use the function <code>public static function [SHAPE]($url, $alt = '', $attributes = array())</code>
      </p>
      <p>
	{{ Label::info('Heads up!') }} <code>.img-rounded</code> and
	<code>.img-circle</code> do not work in IE7-8 due to lack of
	<code>border-radius</code> support.
      </p>
      <pre class='prettyprint linenums'>
Image::rounded('http://placehold.it/140x140')
Image::circle('http://placehold.it/140x140')
Image::polaroid('http://placehold.it/140x140')	
</pre>	
    </div>
  </div>
  <div class='row'>
    <div class='col-md-6'>
      <h3>
	Responsive Images
      </h3>
      <p>
	{{ Image::rounded('http://placehold.it/140x140')->responsive() }}
	{{ Image::circle('http://placehold.it/140x140')->responsive() }}
	{{ Image::polaroid('http://placehold.it/140x140')->responsive() }}
      </p>
    </div>
    <div class='col-md-6'>
      <h3>
	Responsive Image Calls
      </h3>
      <p>
	Use the chained method <code>responsive()</code> to make your
	images responsive
      </p>
      <pre class='prettyprint linenums'>
Image::rounded('http://placehold.it/140x140')->responsive()
Image::circle('http://placehold.it/140x140')->responsive()
Image::polaroid('http://placehold.it/140x140')->responsive()
</pre>
    </div>
  </div>
</section>
