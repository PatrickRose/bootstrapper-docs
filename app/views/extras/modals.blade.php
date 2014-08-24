<section id='modals'>

    <div id='page-header'>
        <h1>
            Modals
        </h1>
    </div>

    <h2>
        Modal Call
    </h2>

    <p>
        Build up a modal bit by bit, by using the <code>withTitle()</code>,
        <code>withBody()</code> and <code>withFooter()</code> methods. Then,
        create a button to open the modal.
    </p>

    <p>
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#demo-modal">
          Launch demo modal
        </button>
        {{ Modal::named('demo-modal')
                ->withTitle('Example modal title')
                ->withBody('Example modal body')
                ->withFooter('Example modal footer') }}
    </p>

<pre class="prettyprint linenums lang-php">
Modal::named('demo-modal')
     ->withTitle('Example modal title')
     ->withBody('Example modal body')
     ->withFooter('Example modal footer')
</pre>

    {{ Alert::info('The <code>named()</code> method will give the modal an id. This is optional,
    unless you wish to automatically generate a button.') }}

    <h2>
        Automatic Button Creation
    </h2>

    <p>
        You can create a button to launch the modal automatically by using the
        <code>withButton()</code> element.
    </p>

    {{ Alert::warning('You <strong>must</strong> give the modal an id attribute,
    either by using <code>named()</code>, or by using <code>withAttributes()</code>') }}

    <p>{{ Modal::named('button-1')
               ->withTitle('Example automatic button modal title')
               ->withBody('Example automatic button modal body')
               ->withFooter('Example automatic button modal footer')
               ->withButton()}}</p>
    <pre class="prettyprint linenums">
Modal::named('button-1')
     ->withTitle('Example automatic button modal title')
     ->withBody('Example automatic button modal body')
     ->withFooter('Example automatic button modal footer')
     ->withButton()
</pre>

    <p>
        Pass in an instance of <code>Bootstrapper\Button</code> to the
        <code>withButton()</code> method if you want to customise the button.
    </p>

    <p>{{ Modal::named('button-2')
               ->withTitle('Example automatic button modal title 2')
               ->withBody('Example automatic button modal body 2')
               ->withFooter('Example automatic button modal footer 2')
               ->withButton(Button::primary('I changed this button')->large())}}</p>
    <pre class="prettyprint linenums">
Modal::named('button-2')
     ->withTitle('Example automatic button modal title')
     ->withBody('Example automatic button modal body')
     ->withFooter('Example automatic button modal footer')
     ->withButton(Button::primary('I changed this button')->large())
</pre>

</section>
