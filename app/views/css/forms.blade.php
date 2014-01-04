<section id='forms'>

  <div class='page-header'>
    <h1>Forms</h1>
  </div>


  <h2>Four types of forms</h2>
  <p>Bootstrapper extends the Laravel Form class to provide the correct styles for Bootstrap. You can
    open a form the normal Laravel Form way and just pass in the correct constant.</p>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Vertical (default)</th>
        <td><code>Form::vertical_open()</code></td>
        <td>Stacked, left-aligned labels over controls</td>
      </tr>
      <tr>
        <th>Inline</th>
        <td><code>Form::inline_open()</code></td>
        <td>Left-aligned label and inline-block controls for compact style</td>
      </tr>
      <tr>
        <th>Search</th>
        <td><code>Form::search_open()</code></td>
        <td>Extra-rounded text input for a typical search aesthetic</td>
      </tr>
      <tr>
        <th>Horizontal</th>
        <td><code>Form::horizontal_open()</code></td>
        <td>Float left, right-aligned labels on same line as controls</td>
      </tr>
    </tbody>
  </table>
  <p>
    Just like the standard Laravel Form you can use <code>{type}_open_secure()</code>,
    <code>{type}_open_for_files()</code>, or <code>{type}_open_secure_for_files()</code>
    for all form types.
  </p>

  <h2>
    Example Forms <small>using just form controls, no extra markup</small>
  </h2>

  <div class='row'>
    <div class='col-md-6'>
      <h3>
        Basic Form
      </h3>
      <p>You could use the default <code>Form::open()</code> or a more descriptive <code>Form::vertical_open()</code></p>
      {{ Form::vertical_open(null,'POST', array('class' => 'well')) }}
      {{ Form::label('something', 'Label name') }}
      {{ Form::span3_text('something', 'Type something...') }}
      {{ Form::block_help('Example block-level help text here.') }}
      {{ Form::labelled_checkbox('checker', 'Check me out') }}
      {{ Form::submit('Submit') }}
      {{ Form::close() }}
      <pre class="prettyprint linenums">
        Form::vertical_open()
        Form::label('something', 'Label name')
        Form::span3_text('something', 'Type something...')
        Form::block_help('Example block-level help text here.')
        Form::labelled_checkbox('checker', 'Check me out')
        Form::submit('Submit')
        Form::close()
      </pre>
    </div>
    <div class='col-md-6'>

      <h3>Search Form</h3>

      <p>
        Using <code>Form::search_open()</code> and <code>Form::search_box()</code>.
        You could also use the standard open and pass in <code>array('class' => Form::TYPE_SEARCH)</code>
      </p>

      {{ Form::search_open(null,'POST', array('class' => 'well')) }}
      {{ Form::search_box('search',null, array('class' => 'input-medium')) }}
      {{ Form::submit('Search') }}
      {{ Form::close() }}

      <pre class="prettyprint linenums">
        Form::search_open()
        Form::search_box('search',null, array('class' => 'input-medium'))
        Form::submit('Search')
        Form::close()
      </pre>

      <h3>Inline form</h3>
      <p>Using <code>Form::inline_open()</code></p>
      {{ Form::inline_open(null,'POST', array('class' => 'well')) }}
      {{ Form::text('email', null, array('class' => 'input-small', 'placeholder' => 'Email')) }}
      {{ Form::password('pass', array('class' => 'input-small', 'placeholder' => 'Password')) }}
      {{ Form::labelled_checkbox('checkme', 'Remember me') }}
      {{ Form::submit('Sign in') }}
      {{ Form::close() }}

      <pre class="prettyprint linenums">
        Form::inline_open()
        Form::text('email', null, array('class' => 'input-small', 'placeholder' => 'Email'))
        Form::password('pass', array('class' => 'input-small', 'placeholder' => 'Password'))
        Form::labelled_checkbox('checkme', 'Remember me')
        Form::submit('Sign in')
        Form::close()
      </pre>

    </div>
  </div>

  <h3>Horizontal Form</h3>
  <div class='row'>
    <div class='col-md-6'>
      <p>Shown on the right are all the default form controls we support. Here's the bulleted list:</p>
      <ul>
        <li>text inputs (text, password, email, etc)</li>
        <li>checkbox</li>
        <li>radio</li>
        <li>select</li>
        <li>multiple select</li>
        <li>file input</li>
        <li>textarea</li>
      </ul>
      <p><em>Note that with a Horizontal form you need to wrap your controls in a <code>Form::control_group</code>
        for the form to layout correctly. See the example for more details</em></p>
    </div>
    <div class='col-md-6'>
      {{ Form::horizontal_open() }}

      {{ Form::control_group(Form::label('input01', 'Text input'),
                             Form::xlarge_text('input01'), '',
                             Form::block_help('In addition to freeform text, any HTML5 text-based input appears like so.')) }}

      {{ Form::control_group(Form::label('optionsCheckbox', 'Checkbox'),
                             Form::labelled_checkbox('optionsCheckbox', 'Option one is this and that—be sure to include why it\'s great', 'option1')) }}

      {{ Form::control_group(Form::label('select01', 'Select list'),
                             Form::select('select01', array('something', '2', '3', '4', '5'))) }}

      {{ Form::control_group(Form::label('multiSelect', 'Select list'),
                             Form::multiselect('multiSelect', array('1', '2', '3', '4', '5'))) }}

      {{ Form::control_group(Form::label('fileInput', 'File input'),
                             Form::file('fileInput')) }}

      {{ Form::control_group(Form::label('textarea', 'Textarea'),
                             Form::xlarge_textarea('textarea', '', array('rows' => '3'))) }}

      {{ Form::actions(array(Button::primary_submit('Save changes'), Form::button('Cancel'))) }}

      {{ Form::close() }}
    </div>
  </div>

  <h3>
    Example Form
  </h3>

  <pre class='prettyprint linenums'>
    Form::horizontal_open()
    Form::control_group(Form::label('input01', 'Text input'),
    Form::xlarge_text('input01'), '',
    Form::block_help('In addition to freeform text, any HTML5 text-based input appears like so.'))
    Form::control_group(Form::label('optionsCheckbox', 'Checkbox'),
    Form::labelled_checkbox('optionsCheckbox', 'Option one is this and that—be sure to include why it\'s great', 'option1'))
    Form::control_group(Form::label('select01', 'Select list'),
    Form::select('select01', array('something', '2', '3', '4', '5')))
    Form::control_group(Form::label('multiSelect', 'Select list'),
    Form::multiselect('multiSelect', array('1', '2', '3', '4', '5')))
    Form::control_group(Form::label('fileInput', 'File input'),
    Form::file('fileInput'))
    Form::control_group(Form::label('textarea', 'Textarea'),
    Form::xlarge_textarea('textarea', '', array('rows' => '3')))
    Form::actions(array(Button::primary_submit('Save changes'), Form::button('Cancel')))
    Form::close()
  </pre>

  <h2>Form control states</h2>
  <div class='row'>
    <div class='col-md-6'>
      <form class="form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="focusedInput">Focused input</label>
            <div class="controls">
              {{ Form::xlarge_text('focusedInput', 'This is focused...', array('class' => 'focused')) }}
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Uneditable input</label>
            <div class="controls">
              {{ Form::xlarge_uneditable('Some value here') }}
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="disabledInput">Disabled input</label>
            <div class="controls">
              {{ Form::xlarge_text('disabledInput', 'Disabled input here...', array('class' => 'disabled', 'disabled' => 'disabled')) }}
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
            <div class="controls">
              {{ Form::labelled_checkbox('optionsCheckbox2', 'This is a disabled checkbox', 'option1', false, array('disabled' => 'disabled')) }}
            </div>
          </div>

          <pre class="prettyprint linenums">
            //Focused
            echo Form::xlarge_text('focusedInput', 'This is focused...', array('class' => 'focused'));

            //Uneditable
            echo Form::xlarge_uneditable('Some value here');

            //Disabled
            echo Form::xlarge_text('disabledInput', 'Disabled input here...', array('class' => 'disabled', 'disabled' => 'disabled'));

            //Disabled Checkbox
            echo Form::labelled_checkbox('optionsCheckbox2', 'This is a disabled checkbox', 'option1', false, array('disabled' => 'disabled'));
          </pre>
        </fieldset>
      </form>
    </div>
    <div class='col-md-6'>
      <h3>Form validation</h3>
      <form class="form-horizontal">
        <fieldset>
          {{ Form::control_group(Form::label('inputWarning', 'Input with warning'),
                                 Form::text('inputWarning'), 'has-warning',
                                 Form::block_help('Something went wrong')) }}

          {{ Form::control_group(Form::label('inputError', 'Input with error'),
                                 Form::text('inputError'), 'has-error',
                                 Form::block_help('Please correct the error')) }}

          {{ Form::control_group(Form::label('inputSuccess', 'Input with success'),
                                 Form::text('inputSuccess'), 'has-success',
                                 Form::block_help('Woohoo!')) }}

          {{ Form::control_group(Form::label('inputSuccess', 'Select with success'),
                                 Form::select('select01', array('1', '2', '3', '4', '5')), 'has-success',
                                 Form::block_help('Woohoo!')) }}


          <pre class="prettyprint linenums">
            Form::control_group(Form::label('inputWarning', 'Input with warning'),
            Form::text('inputWarning'), 'warning',
            Form::block_help('Something went wrong'))

            Form::control_group(Form::label('inputError', 'Input with error'),
            Form::text('inputError'), 'error',
            Form::block_help('Please correct the error'))

            Form::control_group(Form::label('inputSuccess', 'Input with success'),
            Form::text('inputSuccess'), 'success',
            Form::block_help('Woohoo!'))

            Form::control_group(Form::label('inputSuccess', 'Select with success'),
            Form::select('select01', array('1', '2', '3', '4', '5')), 'success',
            Form::block_help('Woohoo!'))
          </pre>
        </fieldset>
      </form>
    </div>
  </div>

  <div class='page-header'>
    <h2>
      Extending Form Controls
    </h2>
  </div>

  <div class='row'>
    <div class='col-md-5'>

      <h3>
	Height Sizing
      </h3>
  
      {{ Form::lg_text('t_lg', 'large') }}
      {{ Form::text('t_default', "default") }}
      {{ Form::sm_text('t_sm', 'small') }}

      {{ Form::lg_select('s_span1', array('large select', '2', '3', '4', '5')) }}
      {{ Form::select('s_span2', array('default select', '2', '3', '4', '5')) }}
      {{ Form::sm_select('s_span3', array('small select', '2', '3', '4', '5')) }}
    </div>
    <div class='col-md-7'>

      <h3>
	Height Sizing Calls
      </h3>
      
      You can size input fields by making your standard call with <code>lg_</code> or <code>sm_</code> in front of the function name.

<pre class='prettyprint linenums'>
Form::lg_text('t_lg', 'large') 
Form::text('t_default', "default") 
Form::sm_text('t_sm', 'small') 

Form::lg_select('s_span1', array('large select', '2', '3', '4', '5')) 
Form::select('s_span2', array('default select', '2', '3', '4', '5')) 
Form::sm_select('s_span3', array('small select', '2', '3', '4', '5')) 
</pre>
    </div>
  </div>

  <div class='row'>
    <div class='col-md-5'>
      <h3>Prepend &amp; append inputs</h3>      
      <label>Prepended text</label>
      {{ Form::prepend(Form::text('prependedInput'), '@') }}
      <label>Appended text</label>
      {{ Form::append(Form::text('prependedInput'), '.00') }}
      <label>Append and prepend text</label>
      {{ Form::prepend_append(Form::text('prependedInput'), '$', '.00') }}
      <label>Append with button</label>
      {{ Form::append_buttons(Form::text('appendedInputButton'), Form::button('Go!')) }}
      <label>Two-buttons append</label>
      {{ Form::append_buttons(Form::text('appendedInputButton'), array(Form::button('Search'),Form::button('Options'))) }}
      <label>Prepend with button</label>
      {{ Form::prepend_buttons(Form::text('appendedInputButton'), Form::button('Go!')) }}
      <label>Two-buttons prepend</label>
      {{ Form::prepend_buttons(Form::text('appendedInputButton'), array(Form::button('Search'),Form::button('Options'))) }}

    </div>
    <div class='col-md-7'>
      <h3>Prepend &amp; append inputs</h3>
      These are simple with Bootstrapper! Just pass your control into the function and it'll handle the rest:
<pre class='prettyprint linenums'>
//Prepended text
Form::prepend(Form::text('prependedInput'), '@') 

//Appended text
Form::append(Form::text('prependedInput'), '.00') 

//Append and prepend text
Form::prepend_append(Form::text('prependedInput'), '$', '.00') 

//Append with button
Form::append_buttons(Form::text('appendedInputButton'), Form::button('Go!')) 

//Two-buttons append
Form::append_buttons(Form::text('appendedInputButton'), array(Form::button('Search'),Form::button('Options'))) 

//Prepend with button
Form::prepend_buttons(Form::text('appendedInputButton'), Form::button('Go!')) 

//Two-buttons prepend
Form::prepend_buttons(Form::text('appendedInputButton'), array(Form::button('Search'),Form::button('Options'))) 
</pre>
    </div>
  </div>

</section>
