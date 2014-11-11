<section id='navbar'>
  <div class="page-header">
    <h1>
      Navbar
    </h1>
  </div>
  <h2>
    Static navbar example
  </h2>
  <p>
    An example of a static (not fixed to the top) navbar with project
    name, navigation, and search form.
  </p>
   {{ Navbar::withBrand('Project name', '#')
            ->withContent(Navigation::links([
                    [
                        'link' => '#',
                        'title' => 'Home'
                    ],
                    [
                        'link' => '#',
                        'title' => 'Link'
                    ],
                    [
                        'link' => '#',
                        'title' => 'Link'
                    ],
                    [
                        'link' => '#',
                        'title' => 'Link'
                    ],
                    [
                        'dropdown',
                        [
                            [
                                'link' => '#',
                                'title' => 'Action'
                            ],
                            [
                                'link' => '#',
                                'title' => 'Another Action'
                            ],
                            Navigation::NAVIGATION_DIVIDER,
                            [
                                'link' => '#',
                                'title' => 'Something else here'
                            ],
                        ]
                    ]
              ]))->withContent('<form class="navbar-form navbar-left" role="search">
                                 <div class="form-group">
                                   <input type="text" class="form-control" placeholder="Search">
                                 </div>
                                 <button type="submit" class="btn btn-default">Submit</button>
                               </form>') }}

    <h3>
      Example
    </h3>
    <pre class='prettyprint linenums'>
Navbar::withBrand('Project name', '#')
      ->withContent(Navigation::links([
              [
                  'link' => '#',
                  'title' => 'Home'
              ],
              [
                  'link' => '#',
                  'title' => 'Link'
              ],
              [
                  'link' => '#',
                  'title' => 'Link'
              ],
              [
                  'link' => '#',
                  'title' => 'Link'
              ],
              [
                  'dropdown',
                  [
                      [
                          'link' => '#',
                          'title' => 'Action'
                      ],
                      [
                          'link' => '#',
                          'title' => 'Another Action'
                      ],
                      Navigation::NAVIGATION_DIVIDER,
                      [
                          'link' => '#',
                          'title' => 'Something else here'
                      ],
                  ]
              ]
              ]))
      ->withContent(
      '&lt;form class="navbar-form navbar-left" role="search"&gt;
          &lt;div class="form-group"&gt;
              &lt;input type="text" class="form-control" placeholder="Search"&gt;
          &lt;/div&gt;
          &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
      &lt;/form&gt;')
</pre>
    <h3>
      Route detection
    </h3>
    <p>
        Route detection is handled by the navigation object. If you want to turn
        off autorouting, then use <code>autoroute(false)</code> on the
        <code>Navigation</code> object.
    </p>



    <h3>
        Floating Navigation Dropdowns To The Right
    </h3>

    <p>
        If you need to float the text in the navigation dropdown to the
        right, then use the <code>right()</code> function on the
        <code>Navigation</code> object.
    </p>

    <h3>
      Brand name
    </h3>
    <p>
      <code>withBrand()</code> creates a
      simple brand link. Just provide the brand name and url. We default to the home page
      if you don't provide one.
    </p>

    <h3>
      Fixed navbar
    </h3>
    <p>
      The Navbar can be fixed to the top or bottom of the viewport by
      passing the correct const to the create function.
    </p>

    <h5>
      Fixed Top Const
    </h5>
<pre class="prettyprint linenums">
Navbar::FIX_TOP
</pre>

    <h5>
      Fixed Bottom Const
    </h5>
<pre class="prettyprint linenums">
Navbar::FIX_BOTTOM
</pre>

    <p>
      When you affix the navbar, remember to account for the hidden
      area underneath. Add 40px or more of padding to the
      <code>&lt;body&gt;</code>.
    </p>

    <h3>
      Forms in navbar
    </h3>
    <p>
      You can provide a string to <code>withContent()</code> and it
      will be output directly in the Navbar. This is perfect for
      inline forms.
    </p>
<pre class="prettyprint linenums">
&lt;form class="navbar-form pull-left"&gt;
&lt;input type="text" class="span2"&gt;
&lt;/form&gt;
</pre>
    <p>
      For a more customized search form, add
      <code>.navbar-search</code> to the <code>form</code> and
      <code>.search-query</code> to the input for specialized styles
      in the navbar. See the form in the large sample above.
    </p>

    <h2>
        Fluid Containers
    </h2>

    <p>
        If you require the container to be fluid, the <code>.container</code>
         class can be replaced with <code>.container-fluid</code> by use of
         the <code>fluid()</code> method
    </p>

    {{ Navbar::withBrand('Fluid Navbar', '#')->fluid() }}
</section>
