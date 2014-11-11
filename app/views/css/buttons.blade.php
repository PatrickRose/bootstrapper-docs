<section id='buttons'>
    <div class='page-header'>
        <h1>Buttons</h1>
    </div>

    <p>
        All the standard Bootstrap button types are supported. See the table below for the
        full list.
    </p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Button Type
                </th>
                <th>
                    Output
                </th>
                <th>
                    Function
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Normal
                </td>
                <td>
                    {{ Button::normal('Normal') }}
                </td>
                <td>
                    <code>Button::withValue('normal')</code>
                </td>
            </tr>
            <tr>
                <td>
                    Primary
                </td>
                <td>
                    {{ Button::primary('Primary') }}
                </td>
                <td>
                    <code>Button::primary('Primary')</code>
                </td>
            </tr>
            <tr>
                <td>
                    Success
                </td>
                <td>
                    {{ Button::success('Success') }}
                </td>
                <td>
                  <code>Button::success('Success')</code>
                </td>
            </tr>
            <tr>
                <td>
                    Info
                </td>
                <td>
                    {{ Button::info('Info') }}
                </td>
                <td>
                    <code>Button::info('Info')</code>
                </td>
            </tr>
            <tr>
                <td>
                    Warning
                </td>
                <td>
                    {{ Button::warning('Warning') }}
                </td>
                <td>
                    <code>Button::warning('Warning')</code>
                </td>
            </tr>
            <tr>
                <td>
                    Danger
                </td>
                <td>
                    {{ Button::danger('Danger') }}
                </td>
                <td>
                    <code>Button::danger('Danger')</code>
                </td>
            </tr>
            <tr>
                <td>
                    Link
                </td>
                <td>
                    {{ Button::link('Link') }}
                </td>
                <td>
                    <code>Button::link('Link')</code>
                </td>
            </tr>
        </tbody>
    </table>

    <h3>
                Sizing
            </h3>

            <p>
                Buttons can be sized by using one of the various chained methods:
            </p>



    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Button Size
                </th>
                <th>
                    Output
                </th>
                <th>
                    Function
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Large
                </td>
                <td>
                    {{ Button::normal('Large')->large() }}
                </td>
                <td>
                    <code>Button::normal('Large')->large()</code>
                </td>
            </tr>
            <tr>
                <td>
                    Standard
                </td>
                <td>
                    {{ Button::normal('Standard') }}
                </td>
                <td>
                    <code>Button::normal('Standard')</code>
                </td>
            </tr>
            <tr>
                <td>
                    Small
                </td>
                <td>
                    {{ Button::normal('Small')->small() }}
                </td>
                <td>
                    <code>Button::normal('Small')->small()</code>
                </td>
            </tr>
            <tr>
                <td>
                    Extra Small
                </td>
                <td>
                    {{ Button::normal('Extra Small')->extraSmall() }}
                </td>
                <td>
                    <code>Button::normal('Extra Small')->extraSmall()</code>
                </td>
            </tr>
        </tbody>
    </table>

    <h3>
        Disabled State
    </h3>

    <p>
        Buttons can be easily disabled using the chained method <code>disable()</code>
    </p>

    <div class="row">
        <div class="col-md-3">
            <p>
                {{ Button::primary('Oh noes! I am disabled')->disable() }}
            </p>
        </div>

        <div class="col-md-9">
            <pre class="prettyprint linenums">
Button::primary('Oh noes! I am disabled')->disable()
</pre>
        </div>
    </div>

    <h3>
        With Icons
    </h3>

    <p>
        Adding icons is simple. You can either just pass the icon HTML directly to the <code>withValue()</code> method
        (or any of the shortcut methods) or use the <code>withIcon()</code>, <code>prependIcon()</code>
        or <code>appendIcon()</code> methods to add an icon.
    </p>

    <div class="row">
        <div class="col-md-3">
            <p>
                {{ Button::withIcon(Icon::ok()) }}
            </p>
            <p>
                {{ Button::normal('Append Icon')->appendIcon(Icon::ok()) }}
            </p>
            <p>
                {{ Button::normal('Prepend Icon')->prependIcon(Icon::ok()) }}
            </p>
        </div>
        <div class="col-md-9">
            <pre class="prettyprint linenums">
Button::withIcon(Icon::ok())

Button::normal('Append Icon')->appendIcon(Icon::ok())

Button::normal('Prepend Icon')->prependIcon(Icon::ok())
</pre>
        </div>
    </div>

    <h3>
         Buttons as Links
    </h3>
    <p>
         Want to use a button as a link to somewhere? Use the <code>asLinkTo()</code> chained method to
         create an <code>&lt;a&gt;</code> tag instead of a <code>&lt;button&gt;</code>.
    </p>

    <div class="row">
        <div class="col-md-3">
    <p>
         {{ Button::normal('Normal Link')->asLinkTo('#') }}
    </p>

    <p>
        {{ Button::warning('Warning Link')->asLinkTo('#') }}
    </p>

    <p>
         {{ Button::danger('Danger Link')->asLinkTo('#') }}
    </p>
        </div>
        <div class="col-md-9">

    <pre class='prettyprint linenums'>
Button::normal('Normal Link')->asLinkTo('#')

Button::warning('Warning Link')->asLinkTo('#')

Button::danger('Danger Link')->asLinkTo('#')
</pre>
        </div>
    </div>

    <h3>
        Block Buttons <small>To take up the full width</small>
    </h3>

    <p>
        Use the <code>block()</code> function to add the <code>.btn-block</code> class and take up the full
        width of the parent.
    </p>
    <p>
                {{ Button::primary('Block level button')->block() }}
                </p>
<pre class="prettyprint linenums">
Button::primary('Block level button')->block()
</pre>

    <h3>
        Submit Buttons
    </h3>

    <p>
        Use the <code>submit()</code> method to create a submit button.
    </p>

    <p>
        {{ Button::primary('Submit Me!')->submit() }}
    </p>

<pre class="prettyprint linenums">
Button::primary('Submit Me!')->submit()
</pre>

</section>
