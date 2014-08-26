<section id='images'>

  <div class='page-header'>
    <h2>
      Images
    </h2>
  </div>

  <p>
      Use the function <code>public static function [SHAPE]($url, $alt = '')</code>
  </p>


    <p>
         {{ Image::rounded('http://placehold.it/140x140', 'rounded') }}
         {{ Image::circle('http://placehold.it/140x140', 'circle') }}
         {{ Image::thumbnail('http://placehold.it/140x140', 'thumbnail') }}
    </p>

    <pre class='prettyprint linenums'>
Image::rounded('http://placehold.it/140x140', 'rounded')
Image::circle('http://placehold.it/140x140', 'circle')
Image::thumbnail('http://placehold.it/140x140', 'thumbnail')
</pre>
      <h3>
	Responsive Images
      </h3>
      <p>
	Use the chained method <code>responsive()</code> to make your
	images scale nicely to the parent element.
      </p>
      <div class="row">
          <div class="col-md-3">
              <h4>
                  Inside a <code>.col-md-3</code>
              </h4>
              <p>
     	          {{ Image::rounded('//placehold.it/1600x1600')->responsive() }}
              </p>
          </div>
          <div class="col-md-4">
              <h4>
                  Inside a <code>.col-md-4</code>
              </h4>
              <p>
                  {{ Image::rounded('//placehold.it/1600x1600')->responsive() }}
              </p>
          </div>
          <div class="col-md-5">
              <h4>
                  Inside a <code>.col-md-5</code>
              </h4>
              <p>
                  {{ Image::rounded('//placehold.it/1600x1600')->responsive() }}
              </p>
          </div>
      </div>
      <pre class='prettyprint linenums'>
Image::rounded('//placehold.it/1600x1600')->responsive()
</pre>
    </div>
  </div>
</section>
