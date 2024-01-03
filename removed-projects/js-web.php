<?php require_once('init.php')?>
<?php require_once('globals/head.php');?>
<body>
    <?php require('globals/header.php');?>
    <div class="theme-wrapper">
        <main class="artifact">
            <section class="title-sec">
                <h1 class="header-font">My JavaScript Website</h1>
                <img src="images/js-website-welcome.jpg" alt="javascript website home page snapshot of h1 tag saying Welcome to my website. I spent way too much time on this.">
            </section>
            <section class="topics-sec">
                <div class="topics">
                    <h2 class="header-font">The Steps Before The Results</h2>
                    <div class="topic" data-desktop-id="brainstorming">
                        <h3>Brainstorming</h3>
                        <p>Setting ourselves up for a smooth project.</p>
                        <div class="mobile-display">
                            <p class="paragraph">This website was initally a demonstration of my skills as a web developer. So rather than putting all my focus into the layout, I was more concerned about demonstrating my knowledge.</p>
                        </div>
                    </div>
                    <div class="topic" data-desktop-id="comp-analysis">
                        <h3>Competitive Analysis</h3>
                        <p>Learning about what other websites are doing right and wrong.</p>
                        <div class="mobile-display">
                            <p class="paragraph">Since this was just a research project, there was no competitive analysis. Everything here is strictly my own knowledge that I had learned about JavaScript up until that point in time.</p>
                        </div>
                    </div>
                    <div class="topic" data-desktop-id="wrk-brkdwn-structure">
                        <h3>Work Breakdown Structure</h3>
                        <p>Deciding on how much efffort the process will take.</p>
                        <div class="mobile-display">
                            <p class="paragraph">This website was a combination of three different coding projects. That was a good enough reason to right down everything that needed to be done in a timely manner. Having my work broken down and simplified played a major role in the completion of this project.</p>
                        </div>
                    </div>
                    <div class="topic" data-desktop-id="mockups-content">
                        <h3>The Final Product</h3>
                        <p>An artifact that shows me how far I've come.</p>
                        <div class="mobile-display">
                            <p class="paragraph">Although it's a bit novice, I found this as a major learning experience for my coding career. In fact, you could consider my portfolio as a second attempt at a website. So when I see this project and compare it to my portfolio, I see that I've come a long way.</p>
                        </div>
                    </div>
                </div>
                <div class="desktop-display">
                    <div class="opacity-fltr"></div>
                    <div class="overlay">
                        <div id="brainstorming" class="active overlay-content">
                            <h4>Brainstorming</h4>
                            <p>This website was initally a demonstration of my skills as a web developer. So rather than putting all my focus into the layout, I was more concerned about demonstrating my knowledge.</p>
                        </div>
                        <div id="comp-analysis" class="inactive overlay-content">
                            <h4>Competitve Analysis</h4>
                            <p>Since this was just a research project, there was no competitive analysis. Everything here is strictly my own knowledge that I had learned about JavaScript up until that point in time.</p>
                        </div>
                        <div id="wrk-brkdwn-structure" class="inactive overlay-content">
                            <h4>Work Breakdown Structure</h4>
                            <p>This website was a combination of three different coding projects. That was a good enough reason to right down everything that needed to be done in a timely manner. Having my work broken down and simplified played a major role in the completion of this project.</p>
                        </div>
                        <div id="mockups-content" class="inactive overlay-content">
                            <h4>The Final Product</h4>
                            <p>Although it's a bit novice, I found this as a major learning experience for my coding career. In fact, you could consider my portfolio as a second attempt at a website. So when I see this project and compare it to my portfolio, I see that I've come a long way.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="results">
                <h2 class="header-font">The Results</h2>
                <div class="content content-mobile">
                    <div>
                        <h3>Variables Section</h3>
                        <img src="images/js-website-slider-section.jpg" alt="javascript website slider section snapshot">
                    </div>
                    <div>
                        <h3>Home Page</h3>
                        <img src="images/js-website-home-page.jpg" alt="javascript website home page snapshot">
                    </div>
                </div>
            </section>
            <section class="artifact-all-pages">
                <button class="prototype-btn"><a href="https://js.michaelkmckay.com/web-script-project/html/index.html" target="_blank">Visit my JS Website</a></button>
            </section>
        </main>
    </div>
    <?php require('globals/footer.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/main.js"></script>
</body>
</html>