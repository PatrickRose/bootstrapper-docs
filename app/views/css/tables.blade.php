<section id='tables'>

    <div class='page-header'>
      <h1>
	Tables
      </h1>
    </div>

    <h3>
      Basic Table
    </h3>

    {{ Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ]) }}

	<pre class='prettyprint linenums'>
Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])
</pre>

	<h3>
	  Striped
	</h3>
	<p>Use the chained method <code>striped()</code>.</p>

    {{ Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->striped() }}

	<pre class='prettyprint linenums'>
Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->striped()
</pre>

	<h3>
	  Bordered
	</h3>
	<p>Use the chained method <code>bordered()</code>.</p>

    {{ Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->bordered() }}

	<pre class='prettyprint linenums'>
Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->bordered()
</pre>

	<h3>
	  Hover
	</h3>
	<p>Use the chained method <code>hover()</code>.</p>

    {{ Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->hover() }}

	<pre class='prettyprint linenums'>
Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->hover()
</pre>

	<h3>
	  Condensed
	</h3>

	<p>Use the chained method <code>condensed()</code>.</p>

    {{ Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->condensed() }}

	<pre class='prettyprint linenums'>
Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->condensed()
</pre>

	<h3>Chainable Methods</h3>
     <p>You can prevent a column from being generated by passing the object attribute name
as a string to <code>ignore()</code> Example: </p>
<pre class="prettyprint linenums">
Table::body($body)->ignore('id', 'password')
</pre>

    <p>
        You can also only only return the contents of certain column with the
        <code>only()</code> method.
    </p>
    <pre class="prettyprint linenums">
Table::body($body)
     ->only(["foo", "bar"])
</pre>

 <p>
   You can dynamically set columns to either append columns to the table or replace
   current ones, using the <code>callback()</code> method.
 </p>
{{ Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->callback('id', function ($field, $row) { return 'This is #' . $field; })
      ->callback('Action', function ($field, $row) { return "<a href=\"#\">Edit {$row['First Name']} {$row['Last Name']}"; })}}

	<pre class='prettyprint linenums'>
Table::withContents([
        [
            'id' => 1,
            'First Name' => 'Patrick',
            'Last Name' => 'Talmadge'
        ],
        [
            'id' => 2,
            'First Name' => 'Patrick',
            'Last Name' => 'Rose'
        ],
        [
            'id' => 3,
            'First Name' => 'Maxime',
            'Last Name' => 'Fabre'
        ],
        [
            'id' => 4,
            'First Name' => 'Taylor',
            'Last Name' => 'Otwell'
        ],
        [
            'id' => 5,
            'First Name' => 'Jane',
            'Last Name' => 'Doe'
        ],
        [
            'id' => 6,
            'First Name' => 'John',
            'Last Name' => 'Smith'
        ],
    ])->callback('id', function ($field, $row) { return 'This is #' . $field; })
      ->callback('Action', function ($field, $row) { return "&lt;a href=\"#\"&gt;Edit {$row['First Name']} {$row['Last Name']}&lt;/a&gt;"; })
</pre>

{{ Alert::info('Your callback should accept two arguments. The first is the actual <em>value</em> during render. The second is the entire row.') }}

  </section>
