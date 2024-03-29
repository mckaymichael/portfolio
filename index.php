<?php require_once('init.php')?>
<?php require_once('globals/head.php');?>
<body>
    <?php require('globals/header.php');?>
    <div class="theme-wrapper">
        <main>
            <section id="banner">
                <div class="logo-container">
                    <?php require('images/logo.svg');?>
                </div>
                <div class="titles">
                    <h2>Michael McKay</h2>
                    <h1 class="header-font">Full Stack Web Developer <br>&amp;<br> UX Designer</h1>
                </div>
            </section>
            <section id="featured">
                <h2 class="header-font">Featured Projects</h2>
                <div class="feature-blocks flex">
                    <div class="content">
                        <h3 class="bg-white bold">SnapSo React App</h3>
                        <div class="image-container">
                            <a href="https://snap-so-jsm-tutorial-9fdrok6yr-michael-mckays-projects.vercel.app" target="_blank" title="Go to Snapso Website">
                                <img src="images/snapso-thumbnail.png" alt="Screenshot of the Homepage for an Instagram copy web application">
                            </a>
                            <div class="chip-container flex-wrap">
                                <div class="chip border-purp flex align-center">
                                    <h4>Coding</h4>
                                </div>
                                <div class="chip border-purp flex align-center">
                                    <h4>SQL</h4>
                                </div>
                                <div class="chip border-purp flex align-center">
                                    <h4>PhP & Databases</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="bg-white bold">Vizro Records</h3>
                        <div class="image-container">
                            <a href="vizro.php" title="Go to Vizro page">
                                <img src="images/vizro-home.png" alt="vizro mobile home page">
                            </a>
                            <div class="chip-container flex-wrap">
                                <div class="chip border-purp">
                                    <h4>Team Project</h4>
                                </div> 
                                <div class="chip border-purp">
                                    <h4>UX/UI</h4>
                                </div>               
                                <div class="chip border-purp">
                                    <h4>Design</h4>
                                </div>               
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php require('globals/footer.php');?>
</body>
</html>