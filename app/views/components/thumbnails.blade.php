<section id="thumbnails">

    <div class="page-header">
        <h1>
            Thumbnails
        </h1>
    </div>

    <p>
        Thumbnails allow you to render images and similar inside
        the Bootstrap grid system.
    </p>

    <div class="row">
        <div class="col-md-3">
            {{ Thumbnail::image('//placehold.it/350x350') }}
        </div>
        <div class="col-md-3">
            {{ Thumbnail::image('//placehold.it/350x350') }}
        </div>
        <div class="col-md-3">
            {{ Thumbnail::image('//placehold.it/350x350') }}
        </div>
        <div class="col-md-3">
            {{ Thumbnail::image('//placehold.it/350x350') }}
        </div>
    </div>

<pre class="prettyprint linenums">
Thumbnail::image('//placehold.it/350x350')
</pre>

    <p>
        You can give the thumbnail a caption with the <code>caption()</code>
        method.
    </p>

    <div class="row">
        <div class="col-md-3">
            {{ Thumbnail::image('//placehold.it/350x350')->caption('Lorem ipsum dolor sit amet, nemore deterruisset te has, usu ea urbanitas assentior. An summo omnium abhorreant vim, cum libris legimus eligendi an. Ea nec habeo cotidieque efficiantur, mea vide exerci ex. In nam enim delectus complectitur. Eu sea ridens hendrerit consectetuer, in cum vitae voluptua, usu at tritani feugiat.') }}
        </div>
        <div class="col-md-3">
            {{ Thumbnail::image('//placehold.it/350x350')->caption('Lorem ipsum dolor sit amet, nemore deterruisset te has, usu ea urbanitas assentior. An summo omnium abhorreant vim, cum libris legimus eligendi an. Ea nec habeo cotidieque efficiantur, mea vide exerci ex. In nam enim delectus complectitur. Eu sea ridens hendrerit consectetuer, in cum vitae voluptua, usu at tritani feugiat.') }}
        </div>
        <div class="col-md-3">
            {{ Thumbnail::image('//placehold.it/350x350')->caption('Lorem ipsum dolor sit amet, nemore deterruisset te has, usu ea urbanitas assentior. An summo omnium abhorreant vim, cum libris legimus eligendi an. Ea nec habeo cotidieque efficiantur, mea vide exerci ex. In nam enim delectus complectitur. Eu sea ridens hendrerit consectetuer, in cum vitae voluptua, usu at tritani feugiat.') }}
        </div>
        <div class="col-md-3">
            {{ Thumbnail::image('//placehold.it/350x350')->caption('Lorem ipsum dolor sit amet, nemore deterruisset te has, usu ea urbanitas assentior. An summo omnium abhorreant vim, cum libris legimus eligendi an. Ea nec habeo cotidieque efficiantur, mea vide exerci ex. In nam enim delectus complectitur. Eu sea ridens hendrerit consectetuer, in cum vitae voluptua, usu at tritani feugiat.') }}
        </div>
    </div>

<pre class="prettyprint linenums">
Thumbnail::image('//placehold.it/350x350')->caption('Lorem ipsum dolor sit amet, nemore deterruisset te has, usu ea urbanitas assentior. An summo omnium abhorreant vim, cum libris legimus eligendi an. Ea nec habeo cotidieque efficiantur, mea vide exerci ex. In nam enim delectus complectitur. Eu sea ridens hendrerit consectetuer, in cum vitae voluptua, usu at tritani feugiat.')
</pre>

</section>