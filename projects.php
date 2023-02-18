<?php require_once('init.php')?>
<?php require_once('globals/head.php');?>
<body>
    <?php require('globals/header.php');?>
    <div class="theme-wrapper">
        <main class="projects">
            <section class="proj-card-sec flex align-center">
                <div class="proj-card">
                    <div class="card-overlay"></div>
                    <div class="img-container">
                        <a href="vizro.php">
                            <img src="images/apparel.png" alt="">
                        </a>
                    </div>
                    <div class="content flex">
                        <h2 class="nickainley-font">Vizro</h2>
                        <p class="text">A group UX/UI project for a record label company app.</p>
                        <button class="border-purp button flex"><a href="vizro.php">See More</a></button>
                    </div>
                </div>
                <div class="proj-card">
                    <div class="card-overlay"></div>
                    <div class="img-container">
                        <a href="vizro.php">
                            <img src="images/notes.png" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h2 class="nickainley-font">Note Taking Application</h2>
                        <p class="text">A CRUD application that lets you login in and create notes.</p>
                        <div class="button-sort flex">
                            <button class="border-purp button flex bold"><a href="http://crud.michaelkmckay.com/public/" target="_blank">Test The App</a></button>
                            <button class="border-purp button flex bold"><a href="https://github.com/mckaymichael/note-taking-application" target="_blank">View Git</a></button>
                        </div>
                    </div>
                </div>
                <div class="push-flex-left"></div>
                <div class="push-flex-left"></div>
            </section>
        </main>
    </div>
    <?php require('globals/footer.php');?>
</body>
</html>