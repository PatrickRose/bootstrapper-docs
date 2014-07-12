<section id="v5">
    <h1 class="page-header">
        Migrating from 4.1 to 5
    </h1>

    <div class="alert alert-danger">
        <p>
            Migrating from 4.1 to version 5 might include an awful lot of work. Version 4.1 will be supported for the
            foreseeable future but will only contain patch fixes. </p>
    </div>

    <h2>
        Update the <code>app.php</code> aliases
    </h2>

    <p>
        First, you'll need to update your <code>app.php</code>. Remove all Bootstrapper aliases and replace them with
        the following:
    </p>
            <pre class="prettyprint linenums lang-php">
'Alert' => 'Bootstrapper\Alert',
'Badge' => 'Bootstrapper\Badge',
'Breadcrumb' => 'Bootstrapper\Breadcrumb',
'Button' => 'Bootstrapper\Button',
'ButtonGroup' => 'Bootstrapper\ButtonGroup',
'ButtonToolbar' => 'Bootstrapper\ButtonToolbar',
'Carousel' => 'Bootstrapper\Carousel',
'DropdownButton' => 'Bootstrapper\DropdownButton',
'Form' => 'Bootstrapper\Form',
'Helpers' => 'Bootstrapper\Helpers',
'Icon' => 'Bootstrapper\Icon',
'Image' => 'Bootstrapper\Image',
'Label' => 'Bootstrapper\Label',
'MediaObject' => 'Bootstrapper\MediaObject',
'Modal'          => 'Bootstrapper\\Modal',
'Navbar' => 'Bootstrapper\Navbar',
'Navigation' => 'Bootstrapper\Navigation',
'Paginator' => 'Bootstrapper\Paginator',
'Panel' => 'Bootstrapper\Panel',
'Progress' => 'Bootstrapper\Progress',
'Tabbable' => 'Bootstrapper\Tabbable',
'Table' => 'Bootstrapper\Table',
'Thumbnail' => 'Bootstrapper\Thumbnail',
'Typeahead' => 'Bootstrapper\Typeahead',
'Typography' => 'Bootstrapper\Typography',
</pre>

    <h2>
        Individual Component Changes
    </h2>

    Please see the components below for the full changelist. If something is not covered, please <a
        href="https://github.com/PatrickRose/bootstrapper-docs/issues"> open an issue</a>!

    <h3>
        Helpers
    </h3>

    <ul>
        <li>
            <code>Bootstrapper\Helpers::get_CSS()</code> should be replaced with <code>Helpers::css()</code>.
        <li>
            <code>Bootstrapper\Helpers::get_JS()</code> should be replaced with <code>Helpers::js()</code>.
        </li>
    </ul>

    <h3>
        Navbars
    </h3>

    <ul>
        <li>
            The <code>Navbar::create()</code> call now takes parameters in the opposite order (giving
            <code>Navbar::create($position, $attributes = [])</code>. Previous calls such as
            <code>Navbar::create(['role' => 'navigation'], Navbar::FIX_TOP)</code> should now be
            <code>Navbar::create(Navbar::FIX_TOP, ['role' => 'navigation'])</code>
        </li>
        <li>
            Similarly, <code>Navbar::inverse()</code> now has the signature <code>Navbar::inverse($position, $attributes)</code>
        </li>
        <li>
            <code>with_brand()</code> has been renamed <code>withBrand()</code>.
        </li>
        <li>
            <code>with_menus()</code> has been renamed <code>withContent()</code>.
        </li>
        <li>
            <code>withContent()</code> now expects either a <code>Navigation</code> object or a string. It can
            survive being given any other object, as long as it has a <code>__toString()</code> implementation.
        </li>
    </ul>

    <h3>
        Navigation
    </h3>

    <ul>
        <li>
            <code>Navigation::links()</code> has been removed. Use <code>pills()</code> or <code>tabs()</code>
        </li>
        <li>
            <code>pills()</code> and <code>tabs()</code> now only expect an array argument, instead of the return value
            of <code>Navigation::links</code>.
        </li>
        <li>

        </li>
    </ul>

</section>