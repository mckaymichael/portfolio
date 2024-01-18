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
                        <img src="images/snapso-thumbnail.png" alt="thumbnail for snapso log in page">
                    </div>
                    <div class="content flex align-center">
                        <h2 class="header-font">SnapSo - Social Media App</h2>
                        <p class="text">Create an account and explore this variation of an Instagram styled app made in React. I use Appwrite for the backend and Vercel for deployment.</p>
                        <button class="border-purp button flex bold" title="CSS Projects website"><a href="https://snap-so-jsm-tutorial-9fdrok6yr-michael-mckays-projects.vercel.app" target="_blank">View Project</a></button>
                    </div>
                </div>
                <div class="proj-card">
                    <div class="card-overlay"></div>
                    <div class="img-container">
                        <img src="images/apparel.png" alt="">
                    </div>
                    <div class="content flex align-center">
                        <h2 class="header-font">Vizro</h2>
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
                        <h2 class="header-font">Note Taking Application</h2>
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
                        <h2 class="header-font">Gogro</h2>
                        <p class="text">A UX/UI and Marketing project for a grocery list app.</p>
                        <button class="border-purp button flex bold" title="Go to GoGro page"><a href="gogro.php">See The Process</a></button>
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