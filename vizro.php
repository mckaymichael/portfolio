<?php require_once('init.php')?>
<?php require_once('globals/head.php');?>
<body>
    <?php require('globals/header.php');?>
    <div class="theme-wrapper">
        <main class="artifact">
            <section class="title-sec flex align-center">
                <h1 class="header-font">Vizro Records Record Label</h1>
                <img src="images/vizro-logo.png" alt="vizro logo">
            </section>
            <section class="topics-sec flex">
                <div class="topics">
                    <h2 class="header-font">The Steps Before The Results</h2>
                    <div class="topic border-purp flex bold" data-desktop-id="brainstorming">
                        <h3 class="text-purp">Brainstorming</h3>
                        <p>Setting ourselves up for a smooth project.</p>
                        <div class="mobile-display">
                            <p class="paragraph">I found brainstorming to be quite enjoyable with the right group. Pitching ideas and getting creative is always fun, and I found it to be a good way to speak freely to group members about my thoughts.</p>
                            <img src="images/vizro-style-tile.png" alt="style sheet for vizro">
                        </div>
                    </div>
                    <div class="topic border-purp flex bold" data-desktop-id="comp-analysis">
                        <h3 class="text-purp">Competitive Analysis</h3>
                        <p>Learning about what other websites are doing right and wrong.</p>
                        <div class="mobile-display">
                            <p class="paragraph">We chose popular websites that we aspired to become. We saw a lot of good ideas for features, user interactions, and user interface elements from our competitors. This helped us come up with our own ideas for a better application.</p>
                            <img src="images/vizro-competitor.jpg" alt="competitor analysis sheet for vizro">
                        </div>
                    </div>
                    <div class="topic border-purp flex bold" data-desktop-id="wrk-brkdwn-structure">
                        <h3 class="text-purp">Work Breakdown Structure</h3>
                        <p>Deciding on how much efffort the process will take.</p>
                        <div class="mobile-display">
                            <p class="paragraph">Although I was not in charge of this portion of the project, the work breakdown structure was a big help in identifying who was in charge of what tasks. It helped give scope to the project, evenly distribute workload, and reduce stress of the unknown.</p>
                            <img src="images/vizro-wbs-sheet.jpg" alt="work breakdown structure sheet for vizro">
                        </div>
                    </div>
                    <div class="topic border-purp flex bold" data-desktop-id="mockups-content">
                        <h3 class="text-purp">Mockups & Content</h3>
                        <p>Creating assets for the app.</p>
                        <div class="mobile-display">
                            <p class="paragraph">Here is where I excelled as one of the UI/UX designers. The hardest challenge was trying to live up to the graphic designers' ideas for what they had in mind for the website. We were told to create a futuristic-looking website, and I think we pulled through in the end. I'm proud of this piece.</p>
                            <img src="images/vizro-content.jpg" alt="content from vizro's rough work">
                        </div>
                    </div>
                    <p class="topic-context">Click on a step for more info.</p>
                </div>
                <div class="desktop-display vizro-overlay-bg">
                    <div class="opacity-fltr"></div>
                    <div class="overlay bg-purp flex">
                        <div id="brainstorming" class="active overlay-content">
                            <h4 class="bold">Brainstorming</h4>
                            <p>I found brainstorming to be quite enjoyable with the right group. Pitching ideas and getting creative is always fun, and I found it to be a good way to speak freely to group members about my thoughts.</p>
                        </div>
                        <div id="comp-analysis" class="inactive overlay-content">
                            <h4 class="bold">Competitve Analysis</h4>
                            <p>We chose popular websites that we aspired to become. We saw a lot of good ideas for features, user interactions, and user interface elements from our competitors. This helped us come up with our own ideas for a better application.</p>
                        </div>
                        <div id="wrk-brkdwn-structure" class="inactive overlay-content">
                            <h4 class="bold">Work Breakdown Structure</h4>
                            <p>Although I was not in charge of this portion of the project, the work breakdown structure was a big help in identifying who was in charge of what tasks. It helped give scope to the project, evenly distribute workload, and reduce stress of the unknown.</p>
                        </div>
                        <div id="mockups-content" class="inactive overlay-content">
                            <h4 class="bold">Mockups &amp; Content</h4>
                            <p>Here is where I excelled as one of the UI/UX designers. The hardest challenge was trying to live up to the graphic designers' ideas for what they had in mind for the website. We were told to create a futuristic-looking website, and I think we pulled through in the end. I'm proud of this piece.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="results flex align-center">
                <h2 class="header-font">The Results</h2>
                <div class="content content-mobile flex align-center">
                    <div>
                        <h3 class="text-purp bold">Shopping</h3>
                        <img src="images/apparel.png" alt="shopping page vizro">
                    </div>
                    <div>
                        <h3 class="text-purp bold">Home Page</h3>
                        <img src="images/vizro-home.png" alt="vizro home page">
                    </div>
                </div>
                <p>Thanks to the help of my group, this project was possible. Learned just how valuable it is to spread the work amongst other people. I also learned that the job is enjoyable when you spend time with people who are all focused on a common goal in mind. The photos on display above are some of the wireframes that I created as one of the UI designers.</p>
            </section>
            <section class="artifact-all-pages flex align-center">
                <img src="images/vizro-pages.png" alt="all vizro pages created in high fidelity wireframes">
                <button class="button border-purp flex bold"><a href="https://www.figma.com/proto/bYlEIhPmARDgzSSPx2Xaqi/VIZRO-MOBILE-Wireframes?node-id=0%3A1&viewport=-736%2C54%2C0.08&scaling=scale-down&starting-point-node-id=47%3A2072&show-proto-sidebar=1" target="_blank" title="Visit Prototype">Visit the Prototype</a></button>
            </section>
        </main>
    </div>
    <?php require('globals/footer.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/main.js"></script>
</body>
</html>