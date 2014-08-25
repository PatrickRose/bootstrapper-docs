<section id='panel'>
  <h2 class='page-header'>
    Panels
    <small>for putting your DOM in a box</small>
  </h2>
  <p>
    All you need to do is call
    <code>Panel::$type($attributes)</code>
    which will give you a panel on its own. Then use the chained
    methods <code>withHeader($header)</code>, <code>withBody($body)</code> and
    <code>withFooter($footer)</code> to fill it with the information you
    need:
  </p>
  <table class="table table-striped">
  <thead>
      <tr>
          <th>Type</th>
          <th>Example</th>
          <th>Code</th>
      </tr>
  </thead>
  <tbody>
  @foreach(array('normal' => "Normal", 'danger' => "Danger", 'info' => "Info", 'success' => "Success", 'warning' => "Warning") as $type => $heading)
      <tr>
      <td>
          <strong>{{ $heading }}</strong>
      </td>
      <td>
          {{ Panel::$type()->withHeader($heading)->withBody("Panel body")->withFooter("Panel footer") }}
      </td>
      <td>
        <pre class='prettyprint linenums'>
  {{ "Panel::$type()"  }}

       {{ "->withHeader('$heading')"  }}

       {{ "->withBody('Panel body')"  }}

       {{ "->footer('Panel footer')"  }}
  </pre>
  </td>
  </tr>
    @endforeach
    </tbody>
  </table>


</section>
