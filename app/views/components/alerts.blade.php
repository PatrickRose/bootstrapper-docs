<article id='alerts'>
    <h1 class="page-header">Alerts
        <small>
            Styles for success, warning, and error messages
        </small>
    </h1>

    <h2>Lightweight defaults</h2>

    <h3>Functions</h3>
    <dl class="dl-horizontal">
        <dt>
            success()
        </dt>
        <dd>
            {{ Alert::success('Alert::success()') }}
            <pre class="prettyprint linenums">
Alert::success('Alert::success()')
</pre>
        </dd>
        <dt>
            info()
        </dt>
        <dd>
            {{ Alert::info('Alert::info()') }}
            <pre class="prettyprint linenums">
Alert::info('Alert::info()')
</pre>
        </dd>
        <dt>
            warning()
        </dt>
        <dd>
            {{ Alert::warning('Alert::warning()') }}
            <pre class="prettyprint linenums">
Alert::warning('Alert::warning()')
</pre>
        </dd>
        <dt>
            danger()
        </dt>
        <dd>
            {{ Alert::danger('Alert::danger()') }}
            <pre class="prettyprint linenums">
Alert::danger('Alert::danger()')
</pre>
        </dd>
    </dl>
    <hr>

    <h3>
        Auto Closing With JavaScript
    </h3>

    <p>
        You can add a autoclosing &times; by using the chained method <code>close()</code>.
    </p>

    <p>
        {{ Label::info('Heads up!') }}
        The closing of the alert is dynamically handled by Bootstrap's
        <a href="http://getbootstrap.com/javascript/#alerts">javascript</a>. You don't need to add any custom javascript
        on your site for this functionality.
    </p>

    {{ Alert::warning('Holy moly! You need to close this alert right damn now!')->close() }}

    <pre class="prettyprint linenums">
Alert::warning('Holy moly! You need to close this alert right damn now!')->close()
</pre>

<p>
    We default to using a times symbol (&times;) for the closing x. Want to use something else? Just pass it into the
    close method as a parameter.
</p>

{{ Alert::warning('I prefer to use an "f" to a &times;')->close('f') }}

    <pre class="prettyprint linenums">
Alert::warning('I prefer to use an "f" to a &times;')->close('f')
</pre>

</article>
