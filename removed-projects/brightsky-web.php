<?php require_once('init.php')?>
<?php require_once('globals/head.php');?>
<body>
    <?php require('globals/header.php');?>
    <div class="theme-wrapper">
        <main class="artifact">
            <section class="title-sec">
                <h1 class="header-font">BrightSky Desktop UX Mockup</h1>
                <img class="brightsky-logo" src="images/brightsky-logo.png" alt="brightsky logo">
            </section>
            <section class="topics-sec">
                <div class="topics">
                    <h2 class="header-font">The Steps Before The Results</h2>
                    <div class="topic" data-desktop-id="brainstorming">
                        <h3>Brainstorming</h3>
                        <p>Setting ourselves up for a smooth project.</p>
                        <div class="mobile-display">
                            <p class="paragraph">This was a solo project that I built from scratch. It was up to me to create this company, its values, feel, aesthetic, and more. With the pressure of time, however, I was forced to think quickly and to not second guess my decisions.</p>
                        </div>
                    </div>
                    <div class="topic" data-desktop-id="comp-analysis">
                        <h3>Competitive Analysis</h3>
                        <p>Learning about what other websites are doing right and wrong.</p>
                        <div class="mobile-display">
                            <p class="paragraph">Competitive analysis was short for this one. I may not have designed this mockup with the intent to out-do my competitors; however, I was able to find plenty of inspiration from them and it helped shorten the development time.</p>
                            <img src="images/brightsky-web-competitor.jpg" alt="brightsky competitor analysis sheet">
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
                            <p class="paragraph">Mockups take time and patience. Many times, I felt tempted to use pre-built layouts, but as someone who aspires to learn, I felt even more compelled to create this project from scratch and learn the software properly.</p>
                            <img src="images/brightsky-web-lofi-wireframes.jpg" alt="brightsky desktop low fidelity wireframes">
                        </div>
                    </div>
                </div>
                <div class="desktop-display">
                    <div class="opacity-fltr"></div>
                    <div class="overlay">
                        <div id="brainstorming" class="active overlay-content">
                            <h4>Brainstorming</h4>
                            <p>This was a solo project that I built from scratch. It was up to me to create this company, its values, feel, aesthetic, and more. With the pressure of time, however, I was forced to think quickly and to not second guess my decisions.</p>
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
                            <p>Mockups take time and patience. Many times, I felt tempted to use pre-built layouts, but as someone who aspires to learn, I felt even more compelled to create this project from scratch and learn the software properly.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="results results-desktop">
                <h2 class="header-font">The Results</h2>
                <div class="content">
                    <div>
                        <h3>Constellation Page</h3>
                        <img src="images/brightsky-constellation-page.jpg" alt="brightsky desktop constellations page">
                    </div>
                    <div>
                        <h3>Home Page</h3>
                        <img src="images/brightsky-home-page.png" alt="brightsky desktop high fidelity home page">
                    </div>
                </div>
            </section>
            <section class="artifact-all-pages">
                <img src="images/brightsky-pages.png" alt="all high fidelity brightsky desktop pages">
                <button class="prototype-btn"><a href="https://xd.adobe.com/view/22d98f04-3075-462b-a5c7-e27db30b3b32-778a/" target="_blank">Visit the Prototype</a></button>
            </section>
        </main>
    </div>
    <?php require('globals/footer.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/main.js"></script>
</body>
</html>