<section id='bootstrap2'>
  <div class='page-header'>
    <h2>From Bootstrap 2</h2>
  </div>

  <h2>Sizing calls</h2>
    <p>
      You used to be able to size your input fields by making your standard call with <code>span*_</code> in front of the function name.
      Bootstrap 3 now requires field sizing to be done by wrapping them inside a <code>.col-xs-*</code> instead.
    </p>
  <div class='row'>
    <div class='col-md-6'>
      <h3>Old Way <small>which doesn't work</small></h3>
      <pre class="prettyprint linenums">
Form::span1_text('t_span1', 'span1')
Form::span2_text('t_span2', 'span2')
Form::span3_text('t_span3', 'span3')

Form::span1_select('s_span1', array('1', '2', '3', '4', '5'))
Form::span2_select('s_span2', array('1', '2', '3', '4', '5'))
Form::span3_select('s_span3', array('1', '2', '3', '4', '5'))
</pre>
    </div>
    <div class='col-md-6'>
      <h3>New Way</h3>
      <pre class="prettyprint linenums">
&lt;div class='col-xs-1'&gt;
  Form::text('t_span1', 'span1')
&lt;/div&gt;
&lt;div class='col-xs-2'&gt;
  Form::text('t_span2', 'span2')
&lt;/div&gt;
&lt;div class='col-xs-3'&gt;
  Form::text('t_span3', 'span3')
&lt;/div&gt;

&lt;div class='col-xs-1'&gt;
  Form::select('s_span1', array('1', '2', '3', '4', '5'))
&lt;/div&gt;
&lt;div class='col-xs-2'&gt;
  Form::select('s_span2', array('1', '2', '3', '4', '5'))
&lt;/div&gt;
&lt;div class='col-xs-3'&gt;
  Form::select('s_span3', array('1', '2', '3', '4', '5'))
&lt;/div&gt;
</pre>
    </div>
  </div>

</section>
