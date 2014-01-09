<section id='progress'>
  <div class="page-header">
    <h1>
      Progress bars
      <small>
	For loading, redirecting, or action status
      </small>
    </h1>
  </div>

  <h2>Examples and markup</h2>
  <div class="row">
    <div class="col-md-4">
      <h3>
	Basic
      </h3>
      <p>
	Default progress bar with a vertical gradient.
      </p>
      {{ Progress::normal(60) }}
      <pre class="prettyprint linenums">
Progress::normal(60)
</pre>
    </div>
    <div class="col-md-4">
      <h3>
	Striped
      </h3>
      <p>
	Uses a gradient to create a striped effect (no IE).
      </p>
      {{ Progress::normal_striped(20) }}
      <pre class="prettyprint linenums">
Progress::normal_striped(20);
</pre>
    </div>
    <div class="col-md-4">
      <h3>
	Animated
      </h3>
      <p>
	Takes the striped example and animates it (no IE).
      </p>
      {{ Progress::normal_striped_active(40) }}
      <pre class="prettyprint linenums">
Progress::normal_striped_active(40)
</pre>
    </div>
  </div>

  <h2>
    Options and browser support
  </h2>
  <div class="row">
    <div class="col-md-4">
      <h3>
	Additional colors
      </h3>
      <p>
	Progress bars use some of the same button and alert classes for
	consistent styles.
      </p>

      {{ Progress::info(20, array('style' => 'margin-bottom: 9px;')) }}

      {{ Progress::success(40, array('style' => 'margin-bottom: 9px;')) }}

      {{ Progress::warning(60, array('style' => 'margin-bottom: 9px;')) }}

      {{ Progress::danger(80, array('style' => 'margin-bottom: 9px;')) }}

    </div>
    <div class="col-md-4">
      <h3>
	Striped bars
      </h3>
      <p>
	Similar to the solid colors, we have varied striped progress
	bars.
      </p>
      {{ Progress::info_striped(20, array('style' => 'margin-bottom: 9px;')) }}

      {{ Progress::success_striped(40, array('style' => 'margin-bottom: 9px;')) }}

      {{ Progress::warning_striped(60, array('style' => 'margin-bottom: 9px;')) }}

      {{ Progress::danger_striped(80, array('style' => 'margin-bottom: 9px;')) }}
    </div>
    <div class="col-md-4">
      <h3>
	Functions
      </h3>
      <ul>
        <li>info()</li>
        <li>success()</li>
        <li>warning()</li>
        <li>danger()</li>
      </ul>
      <p>
	You can add <code>_striped</code> and <code>_active</code>
	to any of the core functions to added these features.
      </p>
      <p>
	Examples: <code>Progress::info_striped(75)</code>,
	<code>Progress::warning_striped_active(40)</code>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <h3>Stacked</h3>
      {{ Progress::normal(
      array(
      35 => 'success',
      20 => 'warning',
      10 => 'danger',
      )
      ) }}
      <pre class="prettyprint linenums">
Progress::normal(array(35 => 'success', 20 => 'warning', 0 => 'danger'))
</pre>
    </div>
    <div class="col-md-4">
      <h3>
	More info
      </h3>
      <p>
	Check out the Bootstrap documentation for more information
	about the progress bars and browser support.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h3>
	Automatic
      </h3>
    </div>
    <div class="col-md-6">
      {{ Progress::automatic(20) }}
      {{ Progress::automatic(40) }}
      {{ Progress::automatic_striped(60) }}
      {{ Progress::automatic_striped_active(80) }}
    </div>
    <div class="col-md-6">
      <pre class="prettyprint linenums">
Progress::automatic(20)
Progress::automatic(40)
Progress::automatic_striped(60)
Progress::automatic_striped_active(80)
</pre>
    </div>
  </div>

</section>
