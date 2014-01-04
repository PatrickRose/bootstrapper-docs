<section id='tables'>

    <div class='page-header'>
      <h1>
	Tables
      </h1>
    </div>

    <h3>
      Basic Table
    </h3>

    <div class='row'>
      <div class='col-md-6'>
	{{ Table::open()}}
        {{ Table::headers('#', 'First Name', 'Last Name')}}
        {{ Table::body(array(
                    array('id' => '1', 'fname' => 'Patrick', 'lname' => 'Talmadge'),
                    array('id' => '2', 'fname' => 'Patrick', 'lname' => 'Rose'),
                    array('id' => '3', 'fname' => 'Maxime', 'lname' => 'Fabre'),
                    array('id' => '4', 'fname' => 'Taylor', 'lname' => 'Otwell'),
                    array('id' => '5', 'fname' => 'Jane', 'lname' => 'Doe'),
                ))}}
        {{ Table::close()}}
      </div>

      <div class='col-md-6'>
	<pre class='prettyprint linenums'>
$body = array(
  array(
    'id' => '1',
    'fname' => 'Patrick',
    'lname' => 'Talmadge'
  ),
  ...
);
Table::open()
Table::headers('#', 'First Name', 'Last Name')
Table::body($body)
Table::close()
	</pre>
      </div>
    </div>
    <div class='row'>
      <div class='col-md-6'>
	<h3>
	  Striped
	</h3>
	Use <code>Table::striped_open()</code> instead of the default <code>Table::open()</code>.
	{{ Table::striped_open()}}
        {{ Table::headers('#', 'First Name', 'Last Name')}}
        {{ Table::body(array(
                    array('id' => '1', 'fname' => 'Patrick', 'lname' => 'Talmadge'),
                    array('id' => '2', 'fname' => 'Patrick', 'lname' => 'Rose'),
                    array('id' => '3', 'fname' => 'Maxime', 'lname' => 'Fabre'),
                    array('id' => '4', 'fname' => 'Taylor', 'lname' => 'Otwell'),
                    array('id' => '5', 'fname' => 'Jane', 'lname' => 'Doe'),
                ))}}
        {{ Table::close()}}
      </div>
      <div class='col-md-6'>
	<h3>
	  Bordered
	</h3>
	Use <code>Table::bordered_open()</code> instead of the default <code>Table::open()</code>.
	{{ Table::bordered_open()}}
        {{ Table::headers('#', 'First Name', 'Last Name')}}
        {{ Table::body(array(
                    array('id' => '1', 'fname' => 'Patrick', 'lname' => 'Talmadge'),
                    array('id' => '2', 'fname' => 'Patrick', 'lname' => 'Rose'),
                    array('id' => '3', 'fname' => 'Maxime', 'lname' => 'Fabre'),
                    array('id' => '4', 'fname' => 'Taylor', 'lname' => 'Otwell'),
                    array('id' => '5', 'fname' => 'Jane', 'lname' => 'Doe'),
                ))}}
        {{ Table::close()}}
      </div>
    </div>
    <div class='row'>
      <div class='col-md-6'>
	<h3>
	  Hover
	</h3>
	Use <code>Table::hover_open()</code> instead of the default <code>Table::open()</code>.
	{{ Table::hover_open()}}
n        {{ Table::headers('#', 'First Name', 'Last Name')}}
        {{ Table::body(array(
                    array('id' => '1', 'fname' => 'Patrick', 'lname' => 'Talmadge'),
                    array('id' => '2', 'fname' => 'Patrick', 'lname' => 'Rose'),
                    array('id' => '3', 'fname' => 'Maxime', 'lname' => 'Fabre'),
                    array('id' => '4', 'fname' => 'Taylor', 'lname' => 'Otwell'),
                    array('id' => '5', 'fname' => 'Jane', 'lname' => 'Doe'),
                ))}}
        {{ Table::close()}}
      </div>
      <div class='col-md-6'>
	<h3>
	  Condensed
	</h3>
	Use <code>Table::condensed_open()</code> instead of the default <code>Table::open()</code>.
	{{ Table::condensed_open()}}
        {{ Table::headers('#', 'First Name', 'Last Name')}}
        {{ Table::body(array(
                    array('id' => '1', 'fname' => 'Patrick', 'lname' => 'Talmadge'),
                    array('id' => '2', 'fname' => 'Patrick', 'lname' => 'Rose'),
                    array('id' => '3', 'fname' => 'Maxime', 'lname' => 'Fabre'),
                    array('id' => '4', 'fname' => 'Taylor', 'lname' => 'Otwell'),
                    array('id' => '5', 'fname' => 'Jane', 'lname' => 'Doe'),
                ))}}
        {{ Table::close()}}
      </div>
    </div>
	<h3>
	  Mix and Match
	</h3>
    <div class='row'>
      <div class='col-md-6'>
	{{ Table::striped_bordered_hover_condensed_open()}}
        {{ Table::headers('#', 'First Name', 'Last Name')}}
        {{ Table::body(array(
                    array('id' => '1', 'fname' => 'Patrick', 'lname' => 'Talmadge'),
                    array('id' => '2', 'fname' => 'Patrick', 'lname' => 'Rose'),
                    array('id' => '3', 'fname' => 'Maxime', 'lname' => 'Fabre'),
                    array('id' => '4', 'fname' => 'Taylor', 'lname' => 'Otwell'),
                    array('id' => '5', 'fname' => 'Jane', 'lname' => 'Doe'),
                ))}}
        {{ Table::close()}}
      </div>
      <div class='col-md-6'>
	<pre class='prettyprint linenums'>
$body = array(
  array(
    'id' => '1',
    'fname' => 'Patrick',
    'lname' => 'Talmadge'
  ),
  ...
);
Table::striped_bordered_hover_condensed_open()
Table::headers('#', 'First Name', 'Last Name')
Table::body($body)
Table::close()	</pre>
      </div>
    </div>
    <h3>Chainable Methods</h3>
     <p>You can prevent a column from being generated by passing the array index or object attribute name
as a string to <code>ignore()</code> Example: </p>
<pre class="prettyprint linenums">
Table::body($body)
->ignore('id', 'password')
</pre>
<p>You can also call the static <code>always_ignore()</code> function to ignore the columns on all new tables.</p>
<pre class="prettyprint linenums">
Tables::always_ignore('id', 'updated_at', 'created_at')
</pre>
 <p>You can dynamically set columns to either append columns to the table or replace current ones. If say you
create a column named "email" and your content already possesses a column named email, it will overwrite it.</p>
<pre class="prettyprint linenums">
Table::body($body)
->reservations(function($client) {
  if(isset($client['reservations'])) {
    return $client['reservations'];
  } else {
    return 'No reservations';
  }
})
->edit(function($client) {
  return HTML::link('#', 'Edit');
})
</pre>
 <p>Also when dynamically creating columns, as their name will be used as classes you can set
several classes by calling per example <code>->edit_action_center()</code>.</p>
<p>You can order columns manually by calling <code>order()</code>.</p>
<pre class="prettyprint linenums">
Table::body($body)
->order('fname', 'lname')
</pre>

  </section>
