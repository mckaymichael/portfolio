<?php require_once('init.php') ?>
<?php require_once('globals/head.php'); ?>

<body>
    <?php require('globals/header.php'); ?>
    <div class="theme-wrapper">
        <main class="projects">
            <section class="proj-card-sec flex align-center">
                <div class="proj-card">
                    <div class="card-overlay"></div>
                    <div class="img-container">
                        <img src="images/apparel.png" alt="">
                    </div>
                    <div class="content flex align-center">
                        <h2 class="nickainley-font">Vizro</h2>
                        <p class="text">A group UX/UI project for a record label company app.</p>
                        <button class="border-purp button flex bold" title="Go to Vizro page"><a href="vizro.php">See The Process</a></button>
                    </div>
                </div>
                <div class="proj-card">
                    <div class="card-overlay"></div>
                    <div class="img-container">
                        <img src="images/notes.jpg" alt="">
                    </div>
                    <div class="content flex align-center">
                        <h2 class="nickainley-font">Note Taking Application</h2>
                        <p class="text">A CRUD application that lets you login in and create notes.</p>
                        <div class="button-sort flex">
                            <button class="border-purp button flex bold"><a href="http://crud.michaelkmckay.com/public/" target="_blank" title="Crud Website">Test The App</a></button>
                            <button class="border-purp button flex bold"><a href="https://github.com/mckaymichael/note-taking-application" target="_blank" title="Go to GitHub Repository">View Git</a></button>
                        </div>
                    </div>
                </div>
                <div class="proj-card">
                    <div class="card-overlay"></div>
                    <div class="img-container">
                        <img src="images/gogro/login.png" alt="login page for gogro app">
                    </div>
                    <div class="content flex align-center">
                        <h2 class="nickainley-font">Gogro</h2>
                        <p class="text">A UX/UI and Marketing project for a grocery list app.</p>
                        <button class="border-purp button flex bold" title="Go to GoGro page"><a href="gogro.php">See The Process</a></button>
                    </div>
                </div>
                <div class="proj-card">
                    <div class="card-overlay"></div>
                    <div class="img-container">
                        <img src="images/my-css-projects.jpg" alt="home page for my css projects website">
                    </div>
                    <div class="content flex align-center">
                        <h2 class="nickainley-font">My CSS Projects</h2>
                        <p class="text">My smaller CSS projects that should get a little bit of love.</p>
                        <button class="border-purp button flex bold" title="CSS Projects website"><a href="http://cssprojects.michaelkmckay.com/" target="_blank">View Projects</a></button>
                    </div>
                </div>
                <div class="push-flex-left"></div>
                <div class="push-flex-left"></div>
            </section>
        </main>
    </div>
    <?php require('globals/footer.php'); ?>
</body>

</html>