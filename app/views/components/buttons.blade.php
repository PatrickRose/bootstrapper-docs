<section id='buttons'>
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
    composite component. Build them with a series of
    <code>Button</code> elements
  </p>
  <p>
      ButtonGroup::radio(array(
	array(ButtonGroup::NORMAL, 'Left'),
	array(ButtonGroup::NORMAL, 'Middle'),
	array(ButtonGroup::NORMAL, 'Right')
      ))
  </p>
      <pre class='prettyprint linenums'>
ButtonGroup::open()
Button::normal('Left')
Button::normal('Middle')
Button::normal('Right')
ButtonGroup::close()
</pre>
  <h3>Checkbox and radio flavors</h3>
  <p>
    Button groups can also function as radios , where only one
    button may be active, or checkboxes, where any number of
    buttons may be active.
  </p>
  <p>
      ButtonGroup::checkbox(array(
	array(ButtonGroup::DANGER, 'Left'),
	array(ButtonGroup::DANGER, 'Middle'),
	array(ButtonGroup::DANGER, 'Right')
      ))
     ButtonGroup::radio(array(
	array(ButtonGroup::PRIMARY, 'Left'),
	array(ButtonGroup::PRIMARY, 'Middle'),
	array(ButtonGroup::PRIMARY, 'Right')
      )) 
  </p>
<pre class="prettyprint linenums">
//Checkbox  
ButtonGroup::checkbox(array(
	array(ButtonGroup::DANGER, 'Left'),
	array(ButtonGroup::DANGER, 'Middle'),
	array(ButtonGroup::DANGER, 'Right')
	))

//Radio  
ButtonGroup::radio(array(
	array(ButtonGroup::PRIMARY, 'Left'),
	array(ButtonGroup::PRIMARY, 'Middle'),
	array(ButtonGroup::PRIMARY, 'Right')
	))
</pre>
  <h3>
    Toolbar example
  </h3>
  You can combine sets of <code>ButtonGroup</code> into a
  <code>ButtonToolbar</code> for more complex components.
  <p>
     ButtonToolbar::open()
      ButtonGroup::radio(array(
	array(ButtonGroup::NORMAL, '1'),
	array(ButtonGroup::NORMAL, '2'),
	array(ButtonGroup::NORMAL, '3'),
	array(ButtonGroup::NORMAL, '4'),
      ))       
      ButtonGroup::radio(array(
	array(ButtonGroup::NORMAL, '5'),
	array(ButtonGroup::NORMAL, '6'),
	array(ButtonGroup::NORMAL, '7'),
      ))       
      ButtonGroup::radio(array(
	array(ButtonGroup::NORMAL, '8'),
      ))       
     ButtonToolbar::close() 
  </p>
  <pre class="prettyprint linenums">
ButtonToolbar::open();
ButtonGroup::radio(array(
...
)

ButtonGroup::radio(array(
...
)

ButtonGroup::radio(array(
...
)
ButtonToolbar::close()
</pre>
  <h3>Dropdowns in button groups</h3>
  <p>
     Label::info('Heads up!') 
    Buttons with dropdowns must be individually wrapped in their
    own <code>ButtonGroup</code> within a
    <code>ButtonToolbar</code> for proper rendering.
  </p>

</section>
