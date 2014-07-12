<section id='navs'>

  <div class='page-header'>
    <h1>
      Nav, tabs, and pills
      <small>
        Highly customizable list-style navigation
      </small>
    </h1>
  </div>

  <h2>
    Lightweight defaults
    <small>
      Same object, different function calls
    </small>
  </h2>
  <div class="row">
    <div class='col-md-6'>
      <h3>
	Basic tabs
      </h3>
      <p>
	Pass an array of links to <code>Navigation::tabs()</code>:
      </p>
      <p>
	 Navigation::tabs(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            )
          ) 
      </p>
      <pre class='prettyprint linenums'>
Navigation::tabs(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            )
          )
</pre>	
    </div>
    <div class='col-md-6'>
      <h3>
	Basic pills
      </h3>
      <p>
	Pass an array of links to <code>Navigation::pills()</code>:
      </p>
      <p>
	 Navigation::pills(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            )
          ) 
      </p>
      <pre class='prettyprint linenums'>
Navigation::pills(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            )
          )
</pre>	
    </div>
  </div>

  <h2>
    Stackable
    <small>
      Make tabs or pills vertical
    </small>
  </h2>
  <div class="row">
    <div class="col-md-4">
       <h3>
	 How to stack 'em
       </h3>
       <p>
	 As tabs and pills are horizontal by default. Pass a
	 <code>true</code> as the second paramenter, to make them
	 appear vertically stacked.
       </p>
    </div>
    <div class='col-md-4'>
      <h3>
	Tabs Example
      </h3>
      <p>
	 Navigation::tabs(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            ), true
        ) 
      </p>
      <pre class='prettyprint linenums'>
Navigation::tabs(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            )
          )
</pre>	
    </div>
    <div class='col-md-4'>
      <h3>
	Pills Example
      </h3>
      <p>
	 Navigation::pills(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            ), true
        ) 
      </p>
      <pre class='prettyprint linenums'>
Navigation::pills(
            Navigation::links(
              array(
                array('Home', '#', true),
                array('Profile', '#'),
                array('Messages', '#'),
              )
            )
          )
</pre>	
    </div>
  </div>

</section>
