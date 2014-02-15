<section id='panel'>
  <h2 class='page-header'>
    Panels
    <small>for putting your DOM in a box</small>
  </h2>
  <p>
    All you need to do is call
    <code>Panel::$type($attributes)</code>
    which will give you a panel on its own. Then use the chained
    methods <code>header($header)</code>, <code>body($body)</code> and
    <code>footer($footer)</code> to fill it with the information you
    need:
  </p>
  @foreach(array('default' => "Default", 'danger' => "Danger", 'info' => "Info", 'success' => "Success", 'warning' => "Warning") as $type => $heading)
    <div class='row'>
      <div class='col-md-6'>
	  {{ Panel::$type()->header($heading)->body("Panel body")->footer("Panel footer") }}
      </div>
      <div class='col-md-6'>
      <pre class='prettyprint'>
{{ "Panel::$type()" }}
	
	{{ "->header('$heading')" }}

	{{ "->body('Panel body')" }}

	{{ "->footer('Panel footer')" }}
</pre>
      </div>
    </div>
  @endforeach

</section>
