<section id="icons">

    <div class="page-header">
        <h1>Icons</h1>
    </div>

    <p>
        Bootstrapper provides support for creating any of the standard
        <a href="http://getbootstrap.com/components/#glyphicons">Glyphicons</a>
        included with Bootstrap. Icons can be created in two ways:
    </p>

    <ul>
        <li>
            Use the <code>create()</code> method.
            <p>{{ Icon::create('ok') }} {{ Icon::create('remove') }}</p>
            <pre class="prettyprint linenums">
Icon::create('ok')
Icon::create('remove')
</pre>
        </li>
        <li>
            Use the magic method (eg <code>Icon::ok()</code>, <code>Icon::remove()</code>)
            <p>{{ Icon::ok() }} {{ Icon::remove() }}</p>
            <pre class="prettyprint linenums">
Icon::ok()
Icon::remove()
</pre>
        </li>
    </ul>

    <p>
        Want to use a different icon set instead? Then run
        <kbd>php artisan config:publish patricktalmadge/bootstrapper</kbd>
        and edit the values in
        <code>app/config/packages/patricktalmadge/bootstrapper/config.php</code> to reflect
        the icon class you'd like to use.
    </p>



</section>