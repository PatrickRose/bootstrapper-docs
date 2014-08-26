<section id="dropdown">
  <div class="page-header">
    <h1>
      Button dropdown menus <small>Built on button groups to provide contextual menus</small>
    </h1>
  </div>

  <h2>Button dropdowns</h2>
      <h3>
        Overview and examples
      </h3>

      <p>
          Create a dropdown button with any of the following methods, then add the contents
          with <code>withContents()</code>
      </p>

      <table class="table table-responsive">
      <thead>
      <tr>
      <th>Type</th>
      <th>Example</th>
      <th>Code</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td>
      <strong>Normal</strong>
      </td>
      <td>
      {{ DropdownButton::normal('Normal')->withContents([['url' => '#', 'label' => 'First'],['url' => '#', 'label' => 'Second']]) }}
      </td>
      <td>
      <pre class="prettyprint">
DropdownButton::normal('Normal')
              ->withContents([
                    ['url' => '#', 'label' => 'First'],
                    ['url' => '#', 'label' => 'Second']
      ])</pre>
      </td>
      </tr>
      <tr>
      <td>
      <strong>Primary</strong>
      </td>
      <td>
      {{ DropdownButton::primary('Primary')->withContents([['url' => '#', 'label' => 'First'],['url' => '#', 'label' => 'Second']]) }}
      </td>
      <td>
      <pre class="prettyprint linenums">
DropdownButton::primary('Warning')
              ->withContents([
                    ['url' => '#', 'label' => 'First'],
                    ['url' => '#', 'label' => 'Second']
              ])</pre>
      </td>
      </tr>
      <tr>
      <td>
      <strong>Danger</strong>
      </td>
      <td>
      {{ DropdownButton::danger('Danger')->withContents([['url' => '#', 'label' => 'First'],['url' => '#', 'label' => 'Second']]) }}
      </td>
      <td>
      <pre class="prettyprint linenums">
DropdownButton::danger('Danger')
              ->withContents([
                    ['url' => '#', 'label' => 'First'],
                    ['url' => '#', 'label' => 'Second']
      ])</pre>
      </td>
      </tr>
      <tr>
      <td>
      <strong>Warning</strong>
      </td>
      <td>
      {{ DropdownButton::warning('Warning')->withContents([['url' => '#', 'label' => 'First'],['url' => '#', 'label' => 'Second']]) }}
      </td>
      <td>
      <pre class="prettyprint linenums">
DropdownButton::warning('Warning')
              ->withContents([
                    ['url' => '#', 'label' => 'First'],
                    ['url' => '#', 'label' => 'Second']
      ])</pre>
      </td>
      </tr>
      <tr>
      <td>
      <strong>Success</strong>
      </td>
      <td>
      {{ DropdownButton::success('Success')->withContents([['url' => '#', 'label' => 'First'],['url' => '#', 'label' => 'Second']]) }}
      </td>
      <td>
      <pre class="prettyprint linenums">
DropdownButton::success('Success')
              ->withContents([
                    ['url' => '#', 'label' => 'First'],
                    ['url' => '#', 'label' => 'Second']
      ])</pre>
      </td>
      </tr>
      </tbody>
      </table>

      {{ Alert::info(Label::info('Heads up!') . ' We expect an array with the keys <code>url</code> and <code>label</code>') }}
      <h3>
	    Sizing
      </h3>
      <p>
	     Sizing is handled using one of the following chained methods
	  </p>

      <table class="table">
      <thead>
      <tr>
      <th>Size</th>
      <th>Example</th>
      <th>Code</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td>
      <strong>Large</strong>
      </td>
      <td>
      {{ DropdownButton::normal('Large')->withContents([['url' => '#', 'label' => 'First'],['url' => '#', 'label' => 'Second']])->large() }}
      </td>
      <td>
      <pre class="prettyprint linenums">
DropdownButton::normal('Large')
              ->withContents([
                  ['url' => '#', 'label' => 'First'],
                  ['url' => '#', 'label' => 'Second']
])
->large()</pre>
      </td>
      </tr>
      <tr>
      <td>
      <strong>Standard</strong>
      </td>
      <td>
      {{ DropdownButton::normal('Standard')->withContents([['url' => '#', 'label' => 'First'],['url' => '#', 'label' => 'Second']]) }}
      </td>
      <td>
      <pre class="prettyprint linenums">
DropdownButton::normal('Standard')
              ->withContents([
                    ['url' => '#', 'label' => 'First'],
                    ['url' => '#', 'label' => 'Second']
])</pre>
      </td>
      </tr>
      <tr>
      <td>
      <strong>Small</strong>
      </td>
      <td>
      {{ DropdownButton::normal('Small')->withContents([['url' => '#', 'label' => 'First'],['url' => '#', 'label' => 'Second']])->small() }}
      </td>
      <td>
      <pre class="prettyprint linenums">
DropdownButton::normal('Small')
              ->withContents([
                   ['url' => '#', 'label' => 'First'],
                   ['url' => '#', 'label' => 'Second']
])
->small()</pre>
      </td>
      </tr>
      <tr>
      <td>
      <strong>Extra Small</strong>
      </td>
      <td>
      {{ DropdownButton::normal('Extra Small')->withContents([['url' => '#', 'label' => 'First'],['url' => '#', 'label' => 'Second']])->extraSmall() }}
      </td>
      <td>
      <pre class="prettyprint linenums">
DropdownButton::normal('Extra Small')
              ->withContents([
                    ['url' => '#', 'label' => 'First'],
                    ['url' => '#', 'label' => 'Second']
])
->extraSmall()</pre>
      </td>
      </tr>
      </tbody>
      </table>

  <h3>
    Split button dropdowns
  </h3>
      <p>
	You can create Split button dropdowns just like normal
	Dropdown Buttons, just use the chained method
	<code>split()</code>
      </p>
      <div class="row">
      <div class="col-sm-2">
      <p>
      {{ DropdownButton::normal('Split')
           ->withContents([
               ['url' => '#', 'label' => 'First'],
               ['url' => '#', 'label' => 'Second']
           ])
           ->split() }}
      </p>
      </div>
      <div class="col-sm-10">
      <pre class="prettyprint linenums">
DropdownButton::normal('Split')
           ->withContents([
               ['url' => '#', 'label' => 'First'],
               ['url' => '#', 'label' => 'Second']
           ])
           ->split()
      </pre>
      </div>
      </div>

       <h3>
	 Dropup menus
       </h3>
      <p>
	 If you want your dropdown menu to go above the button (dropup)
	 you can simply call <code>dropup()</code>.
       </p>
      <div class="row">
      <div class="col-sm-2">
       <p>
	    {{ DropdownButton::normal('Dropup')
                      ->withContents([
                          ['url' => '#', 'label' => 'First'],
                          ['url' => '#', 'label' => 'Second']
                      ])
                      ->dropup() }}
       </p>
       </div>
       <div class="col-sm-10">
       <pre class='prettyprint linenums'>
DropdownButton::normal('Dropup')
                      ->withContents([
                          ['url' => '#', 'label' => 'First'],
                          ['url' => '#', 'label' => 'Second']
                      ])
                      ->dropup()->split()
</pre>
</div>
</div>
</section>
