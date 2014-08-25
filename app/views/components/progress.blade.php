<section id='progress'>
  <div class="page-header">
    <h1>
      Progress bars
      <small>
	For loading, redirecting, or action status
      </small>
    </h1>
  </div>

  <table class="table table-striped">
      <thead>
	  <tr>
	      <th>Type</th>
	      <th>Example</th>
	      <th>Code</th>
	  </tr>
      </thead>
      <tbody>
	  @foreach(['normal', 'success', 'info', 'warning', 'danger'] as $type)
	      <tr>
		  <td>
		      <strong>{{ ucwords($type) }}</strong>
		  </td>
		  <td>
		      {{ ProgressBar::$type(20) }}
		      {{ ProgressBar::$type(40) }}
		      {{ ProgressBar::$type(60) }}
		  </td>
		  <td>
		      <pre class="prettyprint linenums">
{{ "ProgressBar::{$type}(20)\n\n" }}
{{ "ProgressBar::{$type}(40)\n\n" }}
{{ "ProgressBar::{$type}(60)" }}
</pre>
		  </td>
	      </tr>
	  @endforeach
      </tbody>
  </table>

  <h2>
      Striping and Animating
  </h2>

  <p>
      Want a striped Progress Bar? Just use the <code>striped()</code> method. You can
      also animate the stripes with the <code>animated()</code> method.
  </p>

  <p>
      {{ ProgressBar::normal(40)->striped() }}
      {{ ProgressBar::normal(40)->animated() }}
  </p>

  <pre class="prettyprint linenums">
ProgressBar::normal(40)->striped()
ProgressBar::normal(40)->animated()
</pre>

<h3>
    Visible Percentages
</h3>

  <p>
      Want to display the actual percentage? Use the <code>visible()</code> method.
  </p>

  <p>
      {{ ProgressBar::normal(40)->visible() }}
      {{ ProgressBar::normal(80)->visible() }}
  </p>

  <pre class="prettyprint linenums">
ProgressBar::normal(40)->visible()
ProgressBar::normal(80)->visible()
</pre>

  <p>
      You can override the default message. Use a string compatible with <code>sprintf()</code>,
      that has space for one parameter.
  </p>

  <p>
      {{ ProgressBar::normal(40)->visible('Here is a value! %s%%') }}
      {{ ProgressBar::normal(80)->visible('Here is a value! %s%%') }}
  </p>

  <pre class="prettyprint linenums">
ProgressBar::normal(40)->visible('Here is a value! %s%%')
ProgressBar::normal(80)->visible('Here is a value! %s%%')
</pre>

  <h3>
      Stacking
  </h3>

  <p>
      Progress bars can be stacked together if you wish, using the <code>stack()</code>
      method.
  </p>

  <p>
      {{ ProgressBar::stack(
             [
                 ['animated', 'value=20'],
                 ['success', 'value=10'],
                 ['striped', 'value=30'],
                 ['visible']
             ]
         ) }}
  </p>

  <pre class="prettyprint linenums">
ProgressBar::stack(
    [
        ['animated', 'value=20'],
        ['success', 'value=10'],
        ['striped', 'value=30'],
        ['visible']
    ]
)
</pre>

   <p>
       <code>stack()</code> accepts an array of arrays. Each inner array should have
       a list of method names and arguments that you would like to use to generate each
       progress bar.
   </p>
</section>
