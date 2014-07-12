<section id="dropdowns">
  <div class="page-header">
    <h1>
      Button dropdown menus <small>Built on button groups to provide contextual menus</small>
    </h1>
  </div>

  <h2>Button dropdowns</h2>
  <div class='row'>
    <div class='col-md-6'>
      <h3>
        Overview and examples
      </h3>
      <p>
        Dropdown button functions expect a value, array of links, and
        an optional attributes array. Any optional attributes will be
        applied to the top level div.
      </p>
      <p>
        Use any button to trigger a dropdown menu by placing it within
        a <code>.btn-group</code> and providing the proper menu
        markup.
      </p>
      <p>
        <div class="btn-toolbar">
           DropdownButton::normal('Action',
                                    Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )) 

           DropdownButton::primary('Primary',
                                     Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )) 

           DropdownButton::danger('Danger',
                                    Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )) 
        </div>
      </p>
      <p>
        <div class='btn-toolbar'>
           DropdownButton::warning('Warning',
                                     Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )) 
           DropdownButton::success('Success',
                                     Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )) 

           DropdownButton::info('Info',
                                  Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )) 
        </div>
      </p>
    </div>
    <div class='col-md-6'>
      <h3>
	Example call
      </h3>
       <p>
	 Similar to the call below you can use
	 <code>DropdownButton::primary</code>,
	 <code>DropdownButton::danger</code>,
	 <code>DropdownButton::warning</code>,
	 <code>DropdownButton::success</code>,
	 <code>DropdownButton::info</code>, or
	 <code>DropdownButton::inverse</code>.
       </p>
       <pre class="prettyprint linenums">
DropdownButton::normal('Action',
                       Navigation::links(
                         array(
                         array('Action', '#'),
                         array('Another action', '#'),
                         array('Something else here', '#'),
                         array(Navigation::DIVIDER),
                         array('Separated link', '#'),
                        )
                      ))
</pre>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-6'>
      <h3>
	Sizing
      </h3>
      <p>
	Button dropdowns work at any size. your button sizes to
	<code>DropdownButton::lg</code>,
	<code>DropdownButton::sm</code>, or
	<code>DropdownButton::xs</code>.
      </p>
      <div class="btn-toolbar">
	 DropdownButton::lg('Action',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ) 
	 DropdownButton::sm('Action',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ) 
	
	 DropdownButton::xs('Action',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ) 	
      </div>
    </div>
    <div class='col-md-6'>
      <h3>
	Combined Calls
      </h3>
      <p>
	You can mix and match the dropdown button color and size.
	Simply add an underscore between types (eg.
	<code>DropdownButton::lg_danger</code>) and pass in
	the same link array.
      </p>
       DropdownButton::lg_danger('Action',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )) 
    </div>
  </div>
  <h2>
    Split button dropdowns
  </h2>
  <div class='row'>
    <div class='col-md-6'>
      <p>
	You can create Split button dropdowns just like normal
	Dropdown Buttons, just use the chained method
	<code>split()</code>
      </p>
      <p>
	<div class="btn-toolbar" style="margin-top: 18px;">
	   DropdownButton::normal('Action',
				    Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              ))->split() 

	 DropdownButton::primary('Primary',
				   Navigation::links(
              array(
                array('Action', '#'),
                array('Another action', '#'),
                array('Something else here', '#'),
                array(Navigation::DIVIDER),
                array('Separated link', '#'),
              )
            ))->split() 

	 DropdownButton::danger('Primary',
				  Navigation::links(
              array(
                array('Action', '#'),
                array('Another action', '#'),
                array('Something else here', '#'),
                array(Navigation::DIVIDER),
                array('Separated link', '#'),
              )
            ))->split() 
      </div>
      </p>
      <p>
	<div class='btn-toolbar'>
	   DropdownButton::warning('Warning',
				     Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              ))->split() 

	   DropdownButton::success('Success',
				     Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
		)
            ))->split() 

	   DropdownButton::info('Info',
				  Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              ))->split() 
	</div>
      </p>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-6'>
       <h3>
	 Dropup menus
       </h3>
       <p>
	 If you want your dropdown menu to go above the button (dropup)
	 you can simply call <code>dropup()</code>.
       </p>
       <p>
	 <div class="btn-toolbar">
	    DropdownButton::normal('Dropup',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->dropup() 
	 </div>
       </p>
       <pre class='prettyprint linenums'>
DropdownButton::normal('Dropup',
	               Navigation::links(
                         array(
                           array('Action', '#'),
                           array('Another action', '#'),
                           array('Something else here', '#'),
                           array(Navigation::DIVIDER),
                           array('Separated link', '#'),
                           )
                         )
                       )->dropup()
</pre>
	 <div class="btn-toolbar">
	 </div>
       </p>
    </div>
    <div class='col-md-6'>
      <h3>
	Right Align Menu
      </h3>
      <p>
	You can right align the dropdown menu by calling the chained
	method <code>pull_right()</code>.
      </p>
      
      <p>
	<div class="btn-toolbar" style="margin-top: 18px;">
	   DropdownButton::normal('Action',
				    Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              ))->pull_right() 

	 DropdownButton::primary('Primary',
				   Navigation::links(
              array(
                array('Action', '#'),
                array('Another action', '#'),
                array('Something else here', '#'),
                array(Navigation::DIVIDER),
                array('Separated link', '#'),
              )
            ))->pull_right() 

	 DropdownButton::danger('Primary',
				  Navigation::links(
              array(
                array('Action', '#'),
                array('Another action', '#'),
                array('Something else here', '#'),
                array(Navigation::DIVIDER),
                array('Separated link', '#'),
              )
            ))->pull_right() 
      </div>
      </p>
      <p>
	<div class='btn-toolbar'>
	   DropdownButton::warning('Warning',
				     Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              ))->pull_right() 

	   DropdownButton::success('Success',
				     Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
		)
            ))->pull_right() 

	   DropdownButton::info('Info',
				  Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              ))->pull_right() 
	</div>
      </p>
      <pre class='prettyprint linenums'>
DropdownButton::normal('Dropup',
	               Navigation::links(
                         array(
                           array('Action', '#'),
                           array('Another action', '#'),
                           array('Something else here', '#'),
                           array(Navigation::DIVIDER),
                           array('Separated link', '#'),
                           )
                         )
                       )->pull_right()
</pre>
    </div>
  </div>
</section>
