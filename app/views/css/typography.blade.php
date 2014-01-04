<section id='typography'>
  <div class='page-header'>
    <h1>Typography</h1>
  </div>

  <h3>Lead body copy</h3>

  {{ Typography::lead('Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.') }}

<pre class='prettyprint linenums'>
Typography::lead('Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.')
</pre>

  <h3>Emphasis classes</h3>
  {{ Typography::muted('Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.') }}
  {{ Typography::warning('Etiam porta sem malesuada magna mollis euismod.') }}
    {{ Typography::error('Donec ullamcorper nulla non metus auctor fringilla.') }}
    {{ Typography::info('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.') }}
    {{ Typography::success('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.') }}

    <pre class='prettyprint linenums'>
Typography::muted('Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.') 
Typography::warning('Etiam porta sem malesuada magna mollis euismod.') 
Typography::error('Donec ullamcorper nulla non metus auctor fringilla.') 
Typography::info('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.') 
Typography::success('Duis mollis, est non commodo luctus, nisi erat porttitor ligula.') 
    </pre>

    <h3>
      Description
    </h3>

    <p>
      A list of terms with their associated descriptions
    </p>

    {{ Typography::dl(
array(
'Description lists' => 'A description list is perfect for defining terms.',
'Euismod' => 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
Donec id elit non mi porta gravida at eget metus.',
'Malesuada porta' => 'Etiam porta sem malesuada magna mollis euismod.',
)
) }}

    <pre class='prettyprint linenums'>
Typography::dl(
    array(
        'Description lists' => 'A description list is perfect for defining terms.',
        'Euismod' => 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus.',
        'Malesuada porta' => 'Etiam porta sem malesuada magna mollis euismod.',
    )
)
    </pre>

    <h3>
      Horizontal Description
    </h3>
    
    {{ Typography::horizontal_dl(
	array(
	  'Description lists' => 'A description list is perfect for defining terms.',
	  'Euismod' => 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus.',
	  'Malesuada porta' => 'Etiam porta sem malesuada magna mollis euismod.',
	)
      )
      }}

    <pre class='prettyprint linenums'>
Typography::horizontal_dl(
    array(
        'Description lists' => 'A description list is perfect for defining terms.',
        'Euismod' => 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus.',
        'Malesuada porta' => 'Etiam porta sem malesuada magna mollis euismod.',
    )
)
    </pre>
    
  </section>
