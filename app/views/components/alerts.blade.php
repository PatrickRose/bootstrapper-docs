<section id='alerts'>
  <div class="page-header">
    <h1>Alerts
      <small>
	Styles for success, warning, and error messages
      </small>
    </h1>
  </div>

  <h2>Lightweight defaults</h2>
  <div class="row">
    <div class="col-md-4">
      <h3>Functions</h3>
      <ul>
        <li>success()</li>
        <li>info()</li>
        <li>warning()</li>
        <li>error()</li>
        <li>danger()</li>
      </ul>
      <p>
	You can disable the close option by calling the open function.
        <code>Alert::info('message')->open()</code>
      </p>
      <hr>
      <h3>
	JavaScript
      </h3>
      <p>
	The closing of the alert is dynamicly handled by Bootstrap's
	javascript. You don't need to add any custom javascript on
	your site for this functionality. Want more details about
	Bootstrap Alerts click the button below.
      </p>
    </div>
    <div class="col-md-8">
      <h3>
	Example warning
      </h3>
       Alert::warning("<strong>Warning!</strong> Best check yo self, you're not looking too good.") 
      <pre class="prettyprint linenums">
Alert::warning("&lt;strong&gt;Warning!&lt;/strong&gt; Best check yo self, you're not looking too good.")
</pre>
      <p>
	If you want more padding around your alert include the
	<code>.alert-block</code> class.</p>
       Alert::warning("<strong>Warning</strong> Look at all this extra room I have to strech out in.")->block() 
      <pre class="prettyprint linenums">
Alert::warning("&lt;strong&gt;Warning!&lt;/strong&gt; Look at all this extra room I have to strech out in.")->block()
</pre>
      <p>
	If you want a block heading add <code>.alert-heading</code>
	class to your heading within the alert message.
      </p>

       Alert::warning("<h4 class=\"alert-heading\">Warning!</h4> Now I'm extra important with my block heading.")->block() 
      <pre class="prettyprint linenums">
Alert::warning("&lt;h4 class=\"alert-heading\"&gt;Warning!&lt;/h4&gt; Now I'm extra important with my block heading.")->block()
</pre>

    </div>
  </div>

  <h2>Other Alert Types</h2>
  <div class="row">
    <div class="col-md-4">
      <h3>Error or danger</h3>
       Alert::error("<strong>Oh snap!</strong> Change a few things up and try submitting again.") 
      <pre class="prettyprint linenums">
Alert::error("&lt;strong&gt;Oh snap!&lt;/strong&gt; Change a few things up and try submitting again.")
</pre>
    </div>
    <div class="col-md-4">
      <h3>Success</h3>
       Alert::success("<strong>Well done!</strong> You successfully read this important alert message.") 
      <pre class="prettyprint linenums">
Alert::success("&lt;strong&gt;Well done!&lt;/strong&gt; You successfully read this important alert message.")
</pre>
    </div>
    <div class="col-md-4">
      <h3>Information</h3>
       Alert::info("<strong>Heads up!</strong> This alert needs your attention, but it's not super important.") 
      <pre class="prettyprint linenums">
Alert::info("&lt;strong&gt;Heads up!&lt;/strong&gt; This alert needs your attention, but it's not super important.")
</pre>
    </div>
  </div>
</section>
