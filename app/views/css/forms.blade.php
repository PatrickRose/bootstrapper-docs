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
        <th>Inline</th>
        <td><code>Form::inline()</code></td>
        <td>Left-aligned label and inline-block controls for compact style</td>
      </tr>
      <tr>
        <th>Horizontal</th>
        <td><code>Form::horizontal()</code></td>
        <td>Float left, right-aligned labels on same line as controls</td>
      </tr>
    </tbody>
  </table>

  <p>
    The form methods take the same arguments as a standard Laravel forms, so you can make
    them secure by passing in <code>'secure' => true</code> to your array arguments.
  </p>

  <p>
      You can also use <code>inlineModel()</code> or <code>horizontalModel()</code>, which
      will add the relevant classes to a <code>Form::model()</code> call.
  </p>

  <h3>
      Inputs
  </h3>

  <p>
    We extend the standard Laravel form inputs to add the <code>.form-control</code> class,
    as well as the <code>label()</code> method to add the <code>.control-label</code> class.
    The method signatures are the same as the standard Laravel ones.
  </p>

  <h3>
      Validation messages
  </h3>

  <p>
      Validation messages can be added using the <code>success()</code>, <code>warning()</code>,
      <code>error()</code> methods
  </p>

  <p>
      {{ Form::success(Form::label('success', 'You did well!'), Form::text('success')) }}
      {{ Form::warning(Form::label('warning', 'You did something wrong maybe?'), Form::text('warning')) }}
      {{ Form::error(Form::label('error', 'You did something wrong fo sho'), Form::text('error')) }}
  </p>

  <pre class="prettyprint linenums">
Form::success(Form::label('success', 'You did well!'), Form::text('success'))
Form::warning(Form::label('warning', 'You did something wrong maybe?'), Form::text('warning'))
Form::error(Form::label('error', 'You did something wrong fo sho'), Form::text('error'))
</pre>

  <h3>
      Help blocks
  </h3>

  <p>
      Create help blocks with the <code>help()</code> method.
  </p>

  {{ Form::help('You need some help there boyo?') }}

  <pre class="prettyprint linenums">
Form::help('You need some help there boyo?')
</pre>

<h3>
    Control Groups
</h3>

<p>
    The <code>ControlGroup</code> class allows you to create a full <code>.form-group</code>
    block with a label, form input and help.
</p>

{{ ControlGroup::generate(
    Form::label('control', 'Control Group'),
    Form::text('control'),
    Form::help('Here is a help text')) }}

    <pre class="prettyprint linenums">
ControlGroup::generate(
    Form::label('control', 'Control Group'),
    Form::text('control'),
    Form::help('Here is a help text')
)
</pre>

<p>
    If you want to change the size of the form label, you can do so with the last parameter (we default to 2)
</p>

{{ ControlGroup::generate(
    Form::label('control', 'Control Group'),
    Form::text('control'),
    Form::help('Here is a help text'),
    4
    ) }}

    <pre class="prettyprint linenums">
ControlGroup::generate(
    Form::label('control', 'Control Group'),
    Form::text('control'),
    Form::help('Here is a help text'),
    4
)
</pre>

<p>
    You can also pass an array as the second argument if you several items you want to
    group together (like, for example, checkboxes)
</p>

{{ ControlGroup::generate(
    Form::label('control', 'Control Group'),
            [
                [
                    'label' => ['first', 'First'],
                    'input' => ['type' => 'checkbox', 'first', 'First']
                ],
                [
                    'label' => ['second', 'Second'],
                    'input' => ['type' => 'checkbox', 'second', 'Second']
                ]
            ],
    Form::help('Here is a help text'),
    4
    ) }}
<pre class="prettyprint linenums">
ControlGroup::generate(
    Form::label('control', 'Control Group'),
            [
                [
                    'label' => ['first', 'First'],
                    'input' => ['type' => 'checkbox', 'first', 'First']
                ],
                [
                    'label' => ['second', 'Second'],
                    'input' => ['type' => 'checkbox', 'second', 'Second']
                ]
            ],
    Form::help('Here is a help text'),
    4
    )->withAttributes(['data-foo' => 'bar'])
</pre>

<p>
    Each inner array <strong>must</strong> have an <code>input</code> key that maps to an array that <strong>must</strong>
    have a <code>type</code> key. The value of that key should be the name of the method on the <code>Form</code> object.
    The rest of the array should be the arguments <em>in the order that the method expects them</em>.
</p>

<p>
   The inner array can optionally have a <code>label</code> key that should map to an array of arguments for a
   <code>Form::input</code> method call.
</p>

<p>
    And like most Bootstrapper objects, <code>withAttributes()</code> allows you to
    add custom attributes.
</p>

{{ ControlGroup::generate(
    Form::label('control', 'Control Group'),
    Form::text('control'),
    Form::help('Here is a help text'),
    4
    )->withAttributes(['data-foo' => 'bar']) }}

    <pre class="prettyprint linenums">
ControlGroup::generate(
    Form::label('control', 'Control Group'),
    Form::text('control'),
    Form::help('Here is a help text'),
    4
)->withAttributes(['data-foo' => 'bar'])
</pre>

<h3>
    Input Groups
</h3>

<p>
    Input groups allow you to wrap your input inside a <code>.input-group</code> div and
    size them, or add buttons to them. Just add contents using the <code>withContents()</code>
    method and you're away!
</p>

<p>
{{ Form::label('test', 'Example input group') }}
{{ InputGroup::withContents(Form::text('test')) }}
</p>

<pre class="prettyprint linenums">
Form::label('test', 'Example input group')
InputGroup::withContents(Form::text('test'))
</pre>

<h4>
    Addons
</h4>

<p>
    Addons can be added using either the <code>append()</code> or <code>prepend()</code> functions
</p>

<p>{{ InputGroup::withContents(Form::text('username'))->prepend('@') }}</p>
<p>{{ InputGroup::withContents(Form::text('currency'))->append('.00') }}</p>
<p>{{ InputGroup::withContents(Form::text('currency'))->prepend('$')->append('.00') }}</p>

<pre class="prettyprint linenums">
// Prepend an '@'
InputGroup::withContents(Form::text('username'))->prepend('@')
// Append a '.00'
InputGroup::withContents(Form::text('currency'))->append('.00')
// Prepend a '$' and append a '.00'
InputGroup::withContents(Form::text('currency'))->prepend('$')->append('.00')
</pre>

<p>
    You can also add buttons by using the <code>appendButton()</code> method.
</p>

<p>{{ InputGroup::withContents(Form::text('username'))->prependButton(Button::normal('Prepend')) }}</p>
<p>{{ InputGroup::withContents(Form::text('currency'))->appendButton(Button::normal('Append')) }}</p>
<p>{{ InputGroup::withContents(Form::text('currency'))->prependButton(Button::normal('Prepend'))->appendButton(Button::normal('Append')) }}</p>

<pre class="prettyprint linenums">
InputGroup::withContents(Form::text('username'))
          ->prependButton(Button::normal('Prepend'))

InputGroup::withContents(Form::text('currency'))
          ->appendButton(Button::normal('Append'))

InputGroup::withContents(Form::text('currency'))
          ->prependButton(Button::normal('Prepend'))
          ->appendButton(Button::normal('Append'))
</pre>

<h4>
    Sizing
</h4>

<p>
    Sizing is easy! Just use <code>large()</code> or <code>small</code> to size the input and
    any appended/prepended blocks
</p>

<p>{{ InputGroup::withContents(Form::text('large', null, ['placeholder' => 'Large']))->large() }}</p>
<p>{{ InputGroup::withContents(Form::text('small', null, ['placeholder' => 'Small']))->small() }}</p>

<pre class="prettyprint linenums">
InputGroup::withContents(Form::text('large'))->large()
InputGroup::withContents(Form::text('small'))->small()
</pre>

</section>
