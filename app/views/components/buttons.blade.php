<section>
<article id='groups'>
  <div class='page-header'>
    <h2>
      Button Groups
      <small>
        Join buttons for more toolbar-like functionality
      </small>
    </h2>
  </div>

  <h3>
    Button Groups
  </h3>
  <p>
    Use button groups to join multiple buttons together as one
    composite component. Build them with an array.
  </p>
  <p>
      {{ ButtonGroup::withContents([
             Button::primary('Left'),
             Button::primary('Middle'),
             Button::primary('Right'),
           ]) }}
  </p>
      <pre class='prettyprint linenums'>
ButtonGroup::withContents([
             Button::primary('Left'),
             Button::primary('Middle'),
             Button::primary('Right'),
           ])
</pre>
{{ Alert::info(Label::info('Heads Up!') . ' We accept any thing that\'s string-like - either a string or an object with a __toString method')}}

  <h3>Checkbox and radio flavors</h3>
  <p>
    Button groups can also function as radios , where only one
    button may be active, or checkboxes, where any number of
    buttons may be active.
  </p>
  <div class="row">
  <div class="col-sm-4">
  <p>
      {{ ButtonGroup::checkbox([
             Button::primary('Left'),
             Button::primary('Middle'),
             Button::primary('Right'),
           ]) }}
           </p>
           </div>
  <div class="col-sm-8">
<pre class="prettyprint linenums">
ButtonGroup::checkbox([
             Button::primary('Left'),
             Button::primary('Middle'),
             Button::primary('Right'),
           ])
</pre>
</div>
</div>
<div class="row">
<div class="col-sm-4">
{{ ButtonGroup::radio([
                Button::primary('Left'),
                Button::primary('Middle'),
                Button::primary('Right'),
              ])
 }}
</div>
<div class="col-sm-8">
<pre class="prettyprint linenums">
//Radio  
ButtonGroup::radio([
             Button::primary('Left'),
             Button::primary('Middle'),
             Button::primary('Right'),
           ])
</pre>
</div>
</div>
{{ Alert::info(Label::info('Heads Up!') . ' We\'ll convert Button objects into checkboxes or radio buttons. We\'ll just print out anything else')}}
</article>
  <h3>Dropdowns in button groups</h3>
  <p>
     Label::info('Heads up!') 
    Buttons with dropdowns must be individually wrapped in their
    own <code>ButtonGroup</code> within a
    <code>.btn-toolbar</code> for proper rendering.
  </p>
</section>
