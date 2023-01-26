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
                    <h1 class="nickainley-font">Full Stack Web Developer <br>&amp;<br> UX Developer</h1>
                </div>
            </section>
            <section id="featured">
                <h2 class="nickainley-font">Featured Projects</h2>
                <div class="feature-blocks">
                    <div class="content">
                        <h3 class="bg-white">Notes App</h3>
                        <div class="image-container">
                            <a href="http://crud.michaelkmckay.com/public/">
                                <img src="images/notes.png" alt="image here">
                            </a>
                        </div>
                        <div class="chip-container">
                            <div class="chip border-purp">
                                <h4>Coding</h4>
                            </div>
                            <div class="chip border-purp">
                                <h4>SQL</h4>
                            </div>
                            <div class="chip border-purp">
                                <h4>PhP & Databases</h4>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="bg-white">Vizro Records</h3>
                        <div class="image-container">
                            <a href="vizro.php">
                                <img src="images/vizro-home.png" alt="vizro mobile home page">
                            </a>
                        </div> 
                        <div class="chip-container">
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
            </section>
        </main>
    </div>
    <?php require('globals/footer.php');?>
</body>
</html>