<section id="tabbables">

    <div class="page-header">
        <h1>
            Tabbable <small>Add quick, dynamic tab functionality to transition through panes of local content</small>
        </h1>
    </div>

    <p>
        Easily create a tab pane with the <code>tabs()</code> method.
    </p>

    {{ Tabbable::withContents(
         [
             [
                 'title' => 'First',
                 'content' => "<p>They don't appreciate him. It's his glasses… they make him look like a lizard. Plus he's self-conscious. Michael was having brunch with Sally Sitwell at a restaurant called Skip Church's Bistro. In addition to brunch, the restaurant was known for an item on the menu called the \"Skip's Scramble\", an omelet that contained everything on the menu. Do not order the Skip's Scramble. Her lawyers are claiming the seal is worth $250,000. And that's not even including Buster's Swatch. Operation Hot Mother. It's a jetpack, Michael. What could possibly go wrong?</p>"
             ],
             [
                 'title' => 'Second',
                 'content' => "<p>Suddenly he's too much of a big-shot to brush mother's hair. God knows they're squinters. I thought the two of us could talk man-on-man. I think I might have someone who's going to circumvrent the law. I'm a complete failure. I can't even fake the death of a stripper. Saw this on the highway and almost blue myself. Hop on? Oh please. They didn't sneak into this country to be your friends.</p>"
             ],
             [
                 'title' => 'Third',
                 'content' => "<p>I'm foolish and I'm funny and I'm needy. Am I needy? Are you sure I'm not needy? 'Cause I feel needy sometimes. Let me give that oatmeal some brown sugar. Taste the happy, Michael. Taste it. It tastes kind of like sad. Boy, I sure feel like a Mary without a Peter and a Paul. There are dozens of us! Dozens! Coo coo ca chaw. Coo coo ca chaw. Don't worry, these young beauties have been nowhere near the bananas.</p>"
             ]
         ]
    ) }}

    <pre class="prettyprint linenums">
Tabbable::withContents(
    [
        [
            'title' => 'First',
            'content' => "&lt;p&gt;They don't appreciate him..."
        ],
        [
            'title' => 'Second',
            'content' => "&lt;p&gt;Suddenly he's too much of a big-shot..."
        ],
        [
            'title' => 'Third',
            'content' => "&lt;p&gt;I'm foolish and I'm funny and..."
        ]
    ]
)
</pre>

    {{ Alert::info('Each inner array <strong>must</strong> have a <code>title</code> and <code>content</code> key') }}

    {{ Alert::danger(Label::danger('Heads up!') . ' The <code>title</code> will be slugified (it will be lowercased, and spaces will be converted to \'-\') and be the id of the tab pane. This can be overridden by adding an <code>attributes</code> key and setting the id there') }}

    <h3>
        Pills
    </h3>

    <p>
        These can be turned into pills, by using the <code>pills()</code>.
    </p>

    {{ Tabbable::pills(
         [
             [
                 'title' => 'First Pills',
                 'content' => "<p>They don't appreciate him. It's his glasses… they make him look like a lizard. Plus he's self-conscious. Michael was having brunch with Sally Sitwell at a restaurant called Skip Church's Bistro. In addition to brunch, the restaurant was known for an item on the menu called the \"Skip's Scramble\", an omelet that contained everything on the menu. Do not order the Skip's Scramble. Her lawyers are claiming the seal is worth $250,000. And that's not even including Buster's Swatch. Operation Hot Mother. It's a jetpack, Michael. What could possibly go wrong?</p>"
             ],
             [
                 'title' => 'Second Pills',
                 'content' => "<p>Suddenly he's too much of a big-shot to brush mother's hair. God knows they're squinters. I thought the two of us could talk man-on-man. I think I might have someone who's going to circumvrent the law. I'm a complete failure. I can't even fake the death of a stripper. Saw this on the highway and almost blue myself. Hop on? Oh please. They didn't sneak into this country to be your friends.</p>"
             ],
             [
                 'title' => 'Third Pills',
                 'content' => "<p>I'm foolish and I'm funny and I'm needy. Am I needy? Are you sure I'm not needy? 'Cause I feel needy sometimes. Let me give that oatmeal some brown sugar. Taste the happy, Michael. Taste it. It tastes kind of like sad. Boy, I sure feel like a Mary without a Peter and a Paul. There are dozens of us! Dozens! Coo coo ca chaw. Coo coo ca chaw. Don't worry, these young beauties have been nowhere near the bananas.</p>"
             ]
         ]
    ) }}

    <pre class="prettyprint linenums">
Tabbable::pills(
    [
        [
            'title' => 'First Pills',
            'content' => "&lt;p&gt;They don't appreciate him..."
        ],
        [
            'title' => 'Second Pills',
            'content' => "&lt;p&gt;Suddenly he's too much of a big-shot..."
        ],
        [
            'title' => 'Third Pills',
            'content' => "&lt;p&gt;I'm foolish and I'm funny and..."
        ]
    ]
)
</pre>

    <h3>
        Active States
    </h3>

    <p>
        You can also set which tab to be opened by using the <code>active()</code> method.
    </p>

    {{ Tabbable::pills(
         [
             [
                 'title' => 'First Active',
                 'content' => "<p>They don't appreciate him. It's his glasses… they make him look like a lizard. Plus he's self-conscious. Michael was having brunch with Sally Sitwell at a restaurant called Skip Church's Bistro. In addition to brunch, the restaurant was known for an item on the menu called the \"Skip's Scramble\", an omelet that contained everything on the menu. Do not order the Skip's Scramble. Her lawyers are claiming the seal is worth $250,000. And that's not even including Buster's Swatch. Operation Hot Mother. It's a jetpack, Michael. What could possibly go wrong?</p>"
             ],
             [
                 'title' => 'Second Active',
                 'content' => "<p>Suddenly he's too much of a big-shot to brush mother's hair. God knows they're squinters. I thought the two of us could talk man-on-man. I think I might have someone who's going to circumvrent the law. I'm a complete failure. I can't even fake the death of a stripper. Saw this on the highway and almost blue myself. Hop on? Oh please. They didn't sneak into this country to be your friends.</p>"
             ],
             [
                 'title' => 'Third Active',
                 'content' => "<p>I'm foolish and I'm funny and I'm needy. Am I needy? Are you sure I'm not needy? 'Cause I feel needy sometimes. Let me give that oatmeal some brown sugar. Taste the happy, Michael. Taste it. It tastes kind of like sad. Boy, I sure feel like a Mary without a Peter and a Paul. There are dozens of us! Dozens! Coo coo ca chaw. Coo coo ca chaw. Don't worry, these young beauties have been nowhere near the bananas.</p>"
             ]
         ]
    )->active(1) }}

    <pre class="prettyprint linenums">
Tabbable::pills(
    [
        [
            'title' => 'First Active',
            'content' => "&lt;p&gt;They don't appreciate him..."
        ],
        [
            'title' => 'Second Active',
            'content' => "&lt;p&gt;Suddenly he's too much of a big-shot..."
        ],
        [
            'title' => 'Third Active',
            'content' => "&lt;p&gt;I'm foolish and I'm funny and..."
        ]
    ]
)->active(1)
</pre>

    <h3>
        Fading
    </h3>

    {{ Tabbable::pills(
         [
             [
                 'title' => 'First Fade',
                 'content' => "<p>They don't appreciate him. It's his glasses… they make him look like a lizard. Plus he's self-conscious. Michael was having brunch with Sally Sitwell at a restaurant called Skip Church's Bistro. In addition to brunch, the restaurant was known for an item on the menu called the \"Skip's Scramble\", an omelet that contained everything on the menu. Do not order the Skip's Scramble. Her lawyers are claiming the seal is worth $250,000. And that's not even including Buster's Swatch. Operation Hot Mother. It's a jetpack, Michael. What could possibly go wrong?</p>"
             ],
             [
                 'title' => 'Second Fade',
                 'content' => "<p>Suddenly he's too much of a big-shot to brush mother's hair. God knows they're squinters. I thought the two of us could talk man-on-man. I think I might have someone who's going to circumvrent the law. I'm a complete failure. I can't even fake the death of a stripper. Saw this on the highway and almost blue myself. Hop on? Oh please. They didn't sneak into this country to be your friends.</p>"
             ],
             [
                 'title' => 'Third Fade',
                 'content' => "<p>I'm foolish and I'm funny and I'm needy. Am I needy? Are you sure I'm not needy? 'Cause I feel needy sometimes. Let me give that oatmeal some brown sugar. Taste the happy, Michael. Taste it. It tastes kind of like sad. Boy, I sure feel like a Mary without a Peter and a Paul. There are dozens of us! Dozens! Coo coo ca chaw. Coo coo ca chaw. Don't worry, these young beauties have been nowhere near the bananas.</p>"
             ]
         ]
    )->fade() }}

    <pre class="prettyprint linenums">
Tabbable::pills(
    [
        [
            'title' => 'First Fade',
            'content' => "&lt;p&gt;They don't appreciate him..."
        ],
        [
            'title' => 'Second Fade',
            'content' => "&lt;p&gt;Suddenly he's too much of a big-shot..."
        ],
        [
            'title' => 'Third Fade',
            'content' => "&lt;p&gt;I'm foolish and I'm funny and..."
        ]
    ]
)->fade()
</pre>

</section>