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
'Accordion' => 'Bootstrapper\Facades\Accordion',
'Alert' => 'Bootstrapper\Facades\Alert',
'Badge' => 'Bootstrapper\Facades\Badge',
'Breadcrumb' => 'Bootstrapper\Facades\Breadcrumb',
'Button' => 'Bootstrapper\Facades\Button',
'ButtonGroup' => 'Bootstrapper\Facades\ButtonGroup',
'Carousel' => 'Bootstrapper\Facades\Carousel',
'ControlGroup' => 'Bootstrapper\Facades\ControlGroup',
'DropdownButton' => 'Bootstrapper\Facades\DropdownButton',
'Form' => 'Bootstrapper\Facades\Form',
'Helpers' => 'Bootstrapper\Facades\Helpers',
'Icon' => 'Bootstrapper\Facades\Icon',
'InputGroup' => 'Bootstrapper\Facades\InputGroup',
'Image' => 'Bootstrapper\Facades\Image',
'Label' => 'Bootstrapper\Facades\Label',
'MediaObject' => 'Bootstrapper\Facades\MediaObject',
'Modal' => 'Bootstrapper\Facades\Modal',
'Navbar' => 'Bootstrapper\Facades\Navbar',
'Navigation' => 'Bootstrapper\Facades\Navigation',
'Panel' => 'Bootstrapper\Facades\Panel',
'ProgressBar' => 'Bootstrapper\Facades\ProgressBar',
'Tabbable' => 'Bootstrapper\Facades\Tabbable',
'Table' => 'Bootstrapper\Facades\Table',
'Thumbnail' => 'Bootstrapper\Facades\Thumbnail',
</pre>

    <p>
        Secondly, attributes are now passed in using the <code>withAttributes()</code> chained method.
    </p>

    <p>
        Finally, all objects that need to be turned into a string will now fail gracefully
        if an exception is thrown during render. This will print out the following string
    </p>

    <p class='text-danger'>An exception of type <code>$class</code> was thrown with the message: <code>$message</code></p>

    <p>
        If you wish to override this behaviour, call the <code>render()</code> method on the object
        explicitly.
    </p>

    <h2>
        Individual Component Changes
    </h2>

    Please see the components below for the full changelist. If something is not covered, please <a
        href="https://github.com/PatrickRose/bootstrapper-docs/issues"> open an issue</a>!

    <h3>
        Accordion
    </h3>

    <ul>
        <li>
            The <code>create()</code> method has now been removed in favour of the more
            descriptive <code>named()</code> method.
        </li>
        <li>
            The Accordion will throw an <code>AccordionException</code> if the accordion is
            not named using the <code>named()</code> method.
        </li>
        <li>
            <code>withContents()</code> now expects you to be explicit with your array keys.
            Instead of using <code>withContents([['First', 'Content'], ['Second', 'Content']])</code>,
            use <code>withContents([['title' => 'First', 'contents' => 'Content']])</code>
        </li>
        <li>
            <code>withContents()</code> no longer accepts a second parameter to default open
            the accordion. This should be done with the <code>open()</code>
        </li>
        <li>
            Indexing for the open method now begins at <code>0</code>, instead of <code>1</code>.
        </li>
    </ul>

    <h3>
        Alert
    </h3>

    <ul>
        <li>
            Alerts now default to the old <code>open()</code> method - that is, that if you want the
            closing &times; to be generated for you, you now <strong>must</strong> use the chainable <code>close()</code>
            method.
        </li>
        <li>
            The <code>block()</code> method has now been removed (since <code>.alert-block</code> was removed in
            Bootstrap 3).
        </li>
    </ul>

    <h3>
        Badges
    </h3>

    <ul>
        <li>
            The <code>normal()</code> method has been renamed to <code>withContents()</code>
        </li>
    </ul>

    <h3>
        Breadcrumbs
    </h3>

    <ul>
        <li>
            The <code>create()</code> method has been removed and renamed <code>withLinks()</code>
        </li>
    </ul>

    <h3>
        Buttons
    </h3>

    <ul>
        <li>
            There are no longer any magic method calls. Calls such as <code>lg_primary('content')</code> should
            now be <code>primary('content')->large()</code>.
        </li>
        <li>
            The <code>lg()</code>, <code>sm()</code> and <code>xs()</code> functions have been extended
            to their full names (<code>large()</code>, <code>small()</code>, <code>extraSmall()</code> respectively).
        </li>
        <li>
            The <code>link()</code> function now creates a button with class <code>.btn-link</code>. To create an
            <code>&lt;a&gt;</code> tag, use the <code>asLinkTo()</code> function.
        </li>
    </ul>

    <h3>
        Button Groups
    </h3>

    <ul>
        <li>
            <code>create()</code> has been renamed <code>withContents()</code>.
        </li>
        <li>
            <code>withContents()</code> no longer expects an array of arrays, instead expecting
            an array of string-like objects (usually a <code>Button</code> object).
        </li>
    </ul>

    <h3>
        Button Toolbars
    </h3>

    <ul>
        <li>
            This class has now been removed. When grouping Button Groups, wrap them with:
            <pre class="prettyprint linenums">
{{{ '<div class="btn-toolbar" role="toolbar">' }}}

...
{{{'</div>' }}}</pre>
        </li>
    </ul>

    <h3>
        Carousels
    </h3>

    <ul>
        <li>
            The <code>create()</code> method has been renamed <code>withContents()</code>
        </li>
        <li>
            Carousels should be named using the <code>named()</code> method. Failure to
            do so will throw a <code>Bootstrapper\Exceptions\CarouselException</code>.
        </li>
        <li>
            The inner arrays for <code>withContents()</code> should use the keys
            <code>image</code>, <code>caption</code> and <code>alt</code>.
        </li>
    </ul>

    <h3>
        Dropdown Buttons
    </h3>

    <ul>
        <li>
            There are no longer any magic method calls. Calls such as <code>lg_primary()</code> should
            now be <code>primary()->large()</code>.
        </li>
        <li>
            The <code>lg()</code>, <code>sm()</code> and <code>xs()</code> functions have been extended
            to their full names (<code>large()</code>, <code>small()</code>, <code>extraSmall()</code> respectively).
        </li>
        <li>
            <code>primary()</code>, <code>danger()</code>, <code>warning()</code>,
            <code>success()</code>, <code>info()</code> and <code>normal()</code>
            no longer accept 3 arguments. Use <code>withContents()</code> and
            <code>withAttributes()</code>.
        </li>
    </ul>

    <h3>
        Form
    </h3>

    <ul>
        <li>
            <code>*_open()</code> methods have been removed.
        </li>
        <li>
             <code>*_open_for_files()</code>, <code>*_open_secure()</code>,
             <code>*_open_secure_for_files()</code> have been removed. Use the standard
             <a href="http://laravel.com/docs/html#opening-a-form">Laravel methods for secure or file forms</a>.
        </li>
        <li>
            <code>horizontal_model()</code> etc have been renamed <code>horizontalModel</code>.
        </li>
        <li>
            <code>*_append_with_button</code> etc have been removed. Use the <code>InputGroup</code> class instead.
        </li>
    </ul>

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
        Icons
    </h3>

    <ul>
        <li>
            Icons work exactly the same as before. Woo!
        </li>
    </ul>

    <h3>
        Images
    </h3>

    <ul>
        <li>
            Images work exactly the same as before. Woo!
        </li>
    </ul>

    <h3>
        Label
    </h3>

    <ul>
        <li>
             Labels work the same as before. Woo!
        </li>
    </ul>

    <h3>
        Media Objects
    </h3>

    <ul>
        <li>
            <code>create()</code> has been renamed <code>withContents()</code> and expects
            an array of arrays.
        </li>
        <li>
            All old chained methods have now been removed. Use the inner arrays in
            <code>withContents()</code> instead.
        </li>
        <li>
            <code>open_list()</code> and <code>close_list()</code> have been removed. Use
            the <code>asList()</code> chained method instead.
        </li>
    </ul>

    <h3>
       Modals
    </h3>

    <ul>
        <li>
            <code>create()</code> has been removed.
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
            Similarly, <code>Navbar::inverse()</code> now has the signature <code>Navbar::inverse($position,
                $attributes)</code>
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
            There is no longer a boolean flag in <code>pills()</code> or <code>tabs()</code> method
            signatures to make the result stacked. Instead, use the chained method <code>stacked()</code>.
        </li>
        <li>
            The array arguments for <code>pills()</code> or <code>tabs()</code> must be explicit.
            Instead of using <code>['Home', url('home')]</code>, you must use
            <code>['title' => 'Home', 'link' => url('home')</code>.
            {{ Label::info('Support for the older shorthand method may return, depending on requests. If you feel it
            important, please <a href="http://github.com/patricktalmadge/bootstrapper/issues">open an issue</a>.') }}
        </li>
    </ul>

    <h3>
        Pagination
    </h3>

    <div class="alert alert-danger">
        <p>
            This class has now been <strong>removed</strong>. Use the standard Laravel paginator instead.
        </p>
    </div>

    <h3>
        Typography
    </h3>

    <div class="alert alert-danger">
        <p>
            This class has now been <strong>removed</strong>. Use the
            <a href="http://getbootstrap.com/css/#helper-classes">standard Bootstrap classes</a>
            for the relevant tags.
        </p>
    </div>

</section>