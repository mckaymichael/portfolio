<?php require_once('init.php')?>
<?php require_once('globals/head.php');?>
<body>
    <?php require('globals/header.php');?>
    <div class="theme-wrapper">
        <main class="artifact">
            <section class="title-sec">
                <h1 class="nickainley-font">BrightSky Mobile UX Mockup</h1>
                <img class="brightsky-logo" src="images/brightsky-logo.png" alt="">
            </section>
            <section class="topics-sec">
                <div class="topics">
                    <h2 class="nickainley-font">The Steps Before The Results</h2>
                    <div class="topic" data-desktop-id="brainstorming">
                        <h3>Brainstorming</h3>
                        <p>Setting ourselves up for a smooth project.</p>
                        <div class="mobile-display">
                            <p class="paragraph">This project was a mobile version of the desktop BrightSky Mockup. So the brainstorming for this one was strictly on the layout. To me, it was a matter of consistency.</p>
                        </div>
                    </div>
                    <div class="topic" data-desktop-id="comp-analysis">
                        <h3>Competitive Analysis</h3>
                        <p>Learning about what other websites are doing right and wrong.</p>
                        <div class="mobile-display">
                            <p class="paragraph">Competitive analysis was short for this one. I may not have designed this mockup with the intent to out-do my competitors; however, I was able to find plenty of inspiration from them and it helped shorten the development time.</p>
                            <img src="images/brightsky-mobile-competitor.jpg" alt="">
                        </div>
                    </div>
                    <div class="topic" data-desktop-id="wrk-brkdwn-structure">
                        <h3>Work Breakdown Structure</h3>
                        <p>Deciding on how much efffort the process will take.</p>
                        <div class="mobile-display">
                            <p class="paragraph">The work breakdown structure was a big help laying out my taks to be completed. It helped give a scope to the project, evenly distribute workload over time, and reduce the stress of the unknown.</p>
                        </div>
                    </div>
                    <div class="topic" data-desktop-id="mockups-content">
                        <h3>Mockups & Content</h3>
                        <p>Creating assets for the app.</p>
                        <div class="mobile-display">
                            <p class="paragraph">I made this mockup as if I was just taking the desktop version and squeezing it down to a mobile display.</p>
                            <img src="images/brightsky-mobile-lofi-wireframes.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="desktop-display">
                    <div class="opacity-fltr"></div>
                    <div class="overlay">
                        <div id="brainstorming" class="active overlay-content">
                            <h4>Brainstorming</h4>
                            <p>This project was a mobile version of the desktop BrightSky Mockup. So the brainstorming for this one was strictly on the layout. To me, it was a matter of consistency.</p>
                        </div>
                        <div id="comp-analysis" class="inactive overlay-content">
                            <h4>Competitve Analysis</h4>
                            <p>Competitive analysis was short for this one. I may not have designed this mockup with the intent to out-do my competitors; however, I was able to find plenty of inspiration from them and it helped shorten the development time.</p>
                        </div>
                        <div id="wrk-brkdwn-structure" class="inactive overlay-content">
                            <h4>Work Breakdown Structure</h4>
                            <p>The work breakdown structure was a big help laying out my taks to be completed. It helped give a scope to the project, evenly distribute workload over time, and reduce the stress of the unknown.</p>
                        </div>
                        <div id="mockups-content" class="inactive overlay-content">
                            <h4>Mockups &amp; Content</h4>
                            <p>I made this mockup as if I was just taking the desktop version and squeezing it down to a mobile display.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="results">
                <h2 class="nickainley-font">The Results</h2>
                <div class="content content-mobile">
                    <div>
                        <h3>Constellation Page</h3>
                        <img src="images/brightsky-mobile-subscribe-page.jpg" alt="">
                    </div>
                    <div>
                        <h3>Home Page</h3>
                        <img src="images/brightsky-mobile-home-page.jpg" alt="">
                    </div>
                </div>
            </section>
            <section class="artifact-all-pages">
                <img src="images/brightsky-mobile-pages.png" alt="">
                <button class="prototype-btn"><a href="https://www.figma.com/proto/nUHyOzlR6Td5DMoVYsydT7/BrightSky-Hi-Fi-Wireframes?node-id=0%3A1&viewport=295%2C277%2C0.16&scaling=scale-down&starting-point-node-id=7%3A504" target="_blank">Visit the Prototype</a></button>
            </section>
        </main>
    </div>
    <?php require('globals/footer.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/main.js"></script>
</body>
</html>