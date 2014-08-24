<section id='navs'>

    <div class='page-header'>
        <h1>
            Nav, tabs, and pills
            <small>
                Highly customizable list-style navigation
            </small>
        </h1>
    </div>

    <h2>
        Lightweight defaults
        <small>
            Same object, different function calls
        </small>
    </h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Example
                </th>
                <th>
                    Code
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Pills
                </td>
                <td>
                    {{ Navigation::pills([
                          [
			      'title' => 'First',
			      'link' => '#'
                          ],
                          [
			      'title' => 'Second',
			      'link' => '#'
                          ],
                      ])
                    }}
                </td>
                <td>
                    <pre class="prettyprint linenums">
Navigation::pills([
    [
        'title' => 'First',
        'link' => '#'
    ],
    [
        'title' => 'Second',
        'link' => '#'
    ],
])
</pre>
                </td>
            </tr>
            <tr>
                <td>
                    Tabs
                </td>
                <td>
                    {{ Navigation::tabs([
                          [
			      'title' => 'First',
			      'link' => '#'
                          ],
                          [
			      'title' => 'Second',
			      'link' => '#'
                          ],
                      ])
                    }}
                </td>
                <td>
                    <pre class="prettyprint linenums">
Navigation::tabs([
    [
        'title' => 'First',
        'link' => '#'
    ],
    [
        'title' => 'Second',
        'link' => '#'
    ],
])
</pre>
                </td>
            </tr>
        </tbody>
    </table>

    <h2>
        Stackable
        <small>
            Make tabs or pills vertical
        </small>
    </h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Example
                </th>
                <th>
                    Code
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Pills
                </td>
                <td>
                    {{ Navigation::pills([
                          [
			      'title' => 'First',
			      'link' => '#'
                          ],
                          [
			      'title' => 'Second',
			      'link' => '#'
                          ],
                      ])->stacked()
                    }}
                </td>
                <td>
                    <pre class="prettyprint linenums">
Navigation::pills([
    [
        'title' => 'First',
        'link' => '#'
    ],
    [
        'title' => 'Second',
        'link' => '#'
    ],
])->stacked()
</pre>
                </td>
            </tr>
            <tr>
                <td>
                    Tabs
                </td>
                <td>
                    {{ Navigation::tabs([
                          [
                               'title' => 'First',
                               'link' => '#'
                          ],
                          [
                               'title' => 'Second',
                               'link' => '#'
                          ],
                      ])->stacked()
                    }}
                </td>
                <td>
                    <pre class="prettyprint linenums">
Navigation::tabs([
    [
        'title' => 'First',
        'link' => '#'
    ],
    [
        'title' => 'Second',
        'link' => '#'
    ],
])->stacked()
</pre>
                </td>
            </tr>
        </tbody>
    </table>

    <h3>
        Justified Links
    </h3>

    <p>
        You can make tabs or pills equal widths of their parent with
        the chained method <code>justified()</code>.
    </p>

    <p>{{ Navigation::tabs([
           [
               'title' => 'First',
               'link' => '#'
           ],
           [
               'title' => 'Second',
               'link' => '#'
           ],
       ])->justified() }}</p>

       <pre class="prettyprint linenums">
Navigation::tabs([
    [
        'title' => 'First',
        'link' => '#'
    ],
    [
        'title' => 'Second',
        'link' => '#'
    ],
])->justified()
</pre>

    <h3>
        Active states
    </h3>

    <p>
        Active states are set automatically, using Laravel's Url Generator. To
        mark a link as active manually, use the <code>active</code> array key.
    </p>

    <p>
        {{ Navigation::tabs([
               [
                   'title' => 'First',
                   'link' => '#',
                   'active' => true
               ],
               [
                   'title' => 'Second',
                   'link' => '#'
               ],
           ]) }}
    </p>

    <pre class="prettyprint linenums">
Navigation::tabs([
    [
        'title' => 'First',
        'link' => '#'
        'active' => true
    ],
    [
        'title' => 'Second',
        'link' => '#'
    ],
])
</pre>

    {{ Alert::danger('If you manually activate your navigation links, be sure to turn
    autorouting off by using <code>autoroute(false)</code>') }}

    <h3>
        Disabling Links
    </h3>

    <p>
        You can make disabled links that are greyed out and have no hover effects by
        using the <code>disabled</code> array key
    </p>

    <p>
        {{ Navigation::tabs([
               [
                   'title' => 'First',
                   'link' => '#',
                   'disabled' => true
               ],
               [
                   'title' => 'Second',
                   'link' => '#'
               ],
           ]) }}
    </p>

    <pre class="prettyprint linenums">
Navigation::tabs([
    [
        'title' => 'First',
        'link' => '#'
        'disabled' => true
    ],
    [
        'title' => 'Second',
        'link' => '#'
    ],
])
</pre>

{{ Alert::info('This will only change the link\'s appearance, not its functionality. Use custom JavaScript to disable links here.') }}

    <h2>
        Dropdown menus
    </h2>

    <p>
        Dropdown menus can be generated by adding another inner array.
    </p>

    <p>
        {{ Navigation::tabs(
            [
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
                        [
                            'link' => '#',
                            'title' => 'Something else here'
                        ],
                    ]
                ]
            ]
        ) }}
    </p>

    <pre class="prettyprint linenums">
Navigation::tabs(
    [
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
                [
                    'link' => '#',
                    'title' => 'Something else here'
                ],
            ]
        ]
    ]
)
</pre>

    <p>
        You can separate out your dropdown links by using <code>Navigation::NAVIGATION_DIVIDER</code>
    </p>

    <p>
        {{ Navigation::tabs(
            [
                [
                    'dropdown',
                    [
                        [
                            'link' => '#',
                            'title' => 'Action'
                        ],
                        Navigation::NAVIGATION_DIVIDER,
                        [
                            'link' => '#',
                            'title' => 'Another Action'
                        ],
                        [
                            'link' => '#',
                            'title' => 'Something else here'
                        ],
                    ]
                ]
            ]
        ) }}
    </p>

    <pre class="prettyprint linenums">
Navigation::tabs(
    [
        [
            'dropdown',
            [
                [
                    'link' => '#',
                    'title' => 'Action'
                ],
                Navigation::NAVIGATION_DIVIDER,
                [
                    'link' => '#',
                    'title' => 'Another Action'
                ],
                [
                    'link' => '#',
                    'title' => 'Something else here'
                ],
            ]
        ]
    ]
)
</pre></section>
