<?php require_once('init.php')?>
<?php require_once('globals/head.php');?>
<body>
    <?php require('globals/header.php');?>
    <div class="theme-wrapper">
        <main class="artifact">
            <section class="title-sec flex align-center">
                <h1 class="header-font">Gogro Grocery App</h1>
                <?php require("images/gogro/gogro-logo.svg"); ?>
            </section>
            <section class="topics-sec flex">
                <div class="topics">
                    <h2 class="header-font">The Steps Before The Results</h2>
                    <div class="topic border-purp flex bold" data-desktop-id="brainstorming">
                        <h3 class="text-purp">Brainstorming</h3>
                        <p>Setting ourselves up for a smooth project.</p>
                        <div class="mobile-display">
                            <p class="paragraph">This was a marketing project aimed at building an app and creating a plan for how we would run it and generate revenue. I did most of the design brainstorming in my head.</p>
                            <img src="images/gogro/app-plan.jpg" alt="documentation for gogro app">
                        </div>
                    </div>
                    <div class="topic border-purp flex bold" data-desktop-id="comp-analysis">
                        <h3 class="text-purp">The Pitch</h3>
                        <p>The idea that would make this app stand out from the rest.</p>
                        <div class="mobile-display">
                            <p class="paragraph">GoGro is an existing grocery app, but this app is intended for educational purposes only and will not be used for any other purposes. To differentiate this app from other grocery apps, it would track all the food you've bought, display expiration dates for that food, and send you warnings whenever your food is about to expire. It would also give you recipes that would help you use up the food so that it never goes to waste.</p>
                            <img src="images/gogro/Welcome.png" alt="home page for gogro">
                        </div>
                    </div>
                    <div class="topic border-purp flex bold" data-desktop-id="mockups-content">
                        <h3 class="text-purp">Mockups & Content</h3>
                        <p>Creating wireframes and user flows.</p>
                        <div class="mobile-display">
                            <p class="paragraph">When it comes to design and color theory, I'm completely new to it. So I like to take any opportunity to create mockups that come my way. This app was certainly a challenge, and ultimately, I'm glad with how the first few pages look and feel to the user.</p>
                        </div>
                    </div>
                    <p class="topic-context">Click on a step for more info.</p>
                </div>
                <div class="desktop-display gogro-overlay-bg">
                    <div class="opacity-fltr"></div>
                    <div class="overlay bg-purp flex">
                        <div id="brainstorming" class="active overlay-content">
                            <h4 class="bold">Brainstorming</h4>
                            <p>This was a marketing project aimed at building an app and creating a plan for how we would run it and generate revenue. I did most of the design brainstorming in my head.</p>
                        </div>
                        <div id="comp-analysis" class="inactive overlay-content">
                            <h4 class="bold">Competitve Analysis</h4>
                            <p>GoGro is an existing grocery app, but this app is intended for educational purposes only and will not be used for any other purposes. To differentiate this app from other grocery apps, it would track all the food you've bought, display expiration dates for that food, and send you warnings whenever your food is about to expire. It would also give you recipes that would help you use up the food so that it never goes to waste.</p>
                        </div>
                        <div id="mockups-content" class="inactive overlay-content">
                            <h4 class="bold">Mockups &amp; Content</h4>
                            <p>When it comes to design and color theory, I'm completely new to it. So I like to take any opportunity to create mockups that come my way. This app was certainly a challenge, and ultimately, I'm glad with how the first few pages look and feel to the user.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="results flex align-center">
                <h2 class="header-font">The Results</h2>
                <div class="content content-mobile flex align-center">
                    <div>
                        <h3 class="text-purp bold">Shopping</h3>
                        <img src="images/gogro/List.png" alt="shopping page gogro">
                    </div>
                    <div>
                        <h3 class="text-purp bold">Home Page</h3>
                        <img src="images/gogro/Home.png" alt="gogro home page">
                    </div>
                </div>
                <p>Thanks to the help of my group, this project was possible. Learned just how valuable it is to spread the work amongst other people. I also learned that the job is enjoyable when you spend time with people who are all focused on a common goal in mind. The photos on display above are some of the wireframes that I created as one of the UI designers.</p>
            </section>
            <section class="artifact-all-pages flex align-center">
                <img src="images/gogro/all-pages.png" alt="all gogro pages created in high fidelity wireframes">
                <button class="button border-purp flex bold" title="View GoGro prototype"><a href="https://drive.google.com/drive/folders/1Ypk7lXbunfX5HmShuCJQ1hllPyt_K1tF?usp=sharing" target="_blank">Get a Better Look</a></button>
            </section>
        </main>
    </div>
    <?php require('globals/footer.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/main.js"></script>
</body>
</html>