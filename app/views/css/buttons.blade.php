<section id='buttons'>
  <div class='page-header'>
    <h1>Buttons</h1>
  </div>

  <table class='table table-bordered table-striped'>
    <thead>
      <tr>
        <th>
          Button
        </th>
        <th>
          Function
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
	  {{ Button::normal('Normal') }}
        </td>
        <td>
          <code>
            public static function normal($value, $attributes = array(), $hasDropdown = false)
          </code>
        </td>
      </tr>
      <tr>
        <td>
          {{ Button::primary_normal('Primary') }}
        </td>
        <td>
          <code>
            public static function primary($value, $attributes = array(), $hasDropdown = false)
          </code>
        </td>
      </tr>
      <tr>
        <td>
          {{ Button::info_normal('Info') }}
        </td>
        <td>
          <code>
            public static function info_normal($value, $attributes = array(), $hasDropdown = false)
          </code>
        </td>
      </tr>
      <tr>
        <td>
          {{ Button::success_normal('Success') }}
        </td>
        <td>
          <code>
            public static function success_normal($value, $attributes = array(), $hasDropdown = false)
          </code>
        </td>
      </tr>
      <tr>
        <td>
          {{ Button::warning_normal('Warning') }}
        </td>
        <td>
          <code>
            public static function warning_normal($value, $attributes = array(), $hasDropdown = false)
          </code>
        </td>
      </tr>
      <tr>
        <td>
          {{ Button::danger_normal('Danger') }}
        </td>
        <td>
          <code>
            public static function danger_normal($value, $attributes = array(), $hasDropdown = false)
          </code>
        </td>
      </tr>
      <tr>
        <td>
          {{ Button::link('#', 'Link')->deemphasize() }}
        </td>
        <td>
          <code>
            public static function link($url, $value, $attributes = array(), $hasDropdown = false)->deemphasize()
          </code>
        </td>
      </tr>
    </tbody>
  </table>

  <div class='row'>
    <div class='col-md-6'>
      <h3>
        Sizing
      </h3>
      <p>
        {{ Button::lg_primary('Large') }}
        {{ Button::lg_normal('Large') }}
      </p>
      <p>
        {{ Button::sm_primary('Small') }}
        {{ Button::sm_normal('Small') }}
      </p>
      <p>
        {{ Button::xs_primary('Extra Small') }}
        {{ Button::xs_normal('Extra Small') }}
      </p>
    </div>
    <div class='col-md-6'>
      <h3>
        Sizing Calls
      </h3>
      <p>
        Need a different size button? Add <code>lg_</code>,
        <code>sm_</code>, or <code>xs_</code> to the standard button
        function to change the size.
      </p>
      <pre class='prettyprint linenums'>
//Large buttons
Button::lg_primary('Large')
Button::lg_normal('Large')

//Small buttons
Button::sm_primary('Small')
Button::sm_normal('Small')

//Extra small buttons
Button::xs_primary('Extra Small')
Button::xs_normal('Extra Small')
</pre>
    </div>
  </div>

  <div class='row'>
    <div class='col-md-6'>
      <h3>
	Disabled State
      </h3>
      <p>
	 {{ Button::lg_disabled_primary_link('#', 'Primary link') }}
	 {{ Button::lg_disabled_link('#', 'Link') }}
      </p>
      <p>
	{{ Button::lg_disabled_primary_normal('Primary button') }}
	{{ Button::lg_disabled_normal('Button') }}
    </div>
    <div class='col-md-6'>
      <h3>
	Disabled State Calls
      </h3>
      <p>
	For disabled buttons, add the <code>disabled_</code> to your
	button function call.
      </p>
      <pre class='prettyprint linenums'>
Button::lg_disabled_primary_link('#', 'Primary link')
Button::lg_disabled_link('#', 'Link')
	
Button::lg_disabled_primary('Primary button')
Button::lg_disabled_normal('Button')
</pre>
    </div>
  </div>

  <div class='row'>
    <div class='col-md-6'>
      <h3>
	With Icons
      </h3>
      <p>
	{{ Button::normal('Prepend Icon')->prepend_with_icon('ok') }}
	{{ Button::normal('Append Icon')->append_with_icon('ok') }}
      </p>
    </div>
    
    <div class='col-md-6'>
      <h3>
	With Icons Calls
      </h3>
      <p>
	Use a chained method
	<code>with_icon($icon, $attributes = array(), $prependIcon = true)</code>
	to add an icon, or use the shortcut methods <code>prepend_with_icon($icon, $attributes = array())</code> and <code>append_with_icon($icon, $attributes = array())</code>
      </p>
      <pre class='prettyprint linenums'>
Button::normal('Prepend Icon')->with_icon('ok')
Button::normal('Prepend Icon')->prepend_with_icon('ok')

Button::normal('Append Icon')->with_icon('ok', null, false)
Button::normal('Append Icon')->append_with_icon('ok')
</pre>
    </div>
  </div>

  <h3>
    Buttons and Link Buttons
  </h3>
  <p>
    All colour types and sizes work for both standard buttons and link
    buttons.
  </p>
  <pre class='prettyprint linenums'>
//Default link button
Button::link('#', 'Primary link')
     
Warning link button
Button::warning_link('#', 'Warning link')
     
//Mini danger link button
Button::xs_danger_link('#', 'Mini Danger link')
     
//Large disabled primary color link button
Button::lg_disabled_primary_link('#', 'Primary link')
  </pre>

  <div class='row'>
    <div class='col-md-6'>
       <h3>Block Buttons</h3>
       <div class="well">
	 {{ Button::large_primary_normal('Block level button')->block() }}
	 {{ Button::large_normal('Block level button')->block() }}
       </div>
    </div>
    <div class='col-md-6'>
      <h3>Block Buttons Calls</h3>
      <p>
	Just add the chained method <code>block()</code> to whatever
	button you want to make it a block (and fill out the entire
	width of a parent).
      </p>
      <pre class="prettyprint linenums">
//Block buttons
echo Button::lg_primary('Block level button')->block();
echo Button::lg_normal('Block level button')->block();
</pre>
    </div>
  </div>
  
</section>
