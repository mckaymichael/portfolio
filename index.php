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
                        <h3>JavaScript</h3>
                        <div class="image-container">
                            <img src="images/plant.jpg" alt="">
                        </div>
                        <div class="chip-container">
                            <div class="chip">
                                <h4>Solo</h4>
                            </div>
                            <div class="chip">
                                <h4>Coding</h4>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Vizro Records</h3>
                        <div class="image-container">
                            <img src="images/plant.jpg" alt="">
                        </div> 
                        <div class="chip-container">
                            <div class="chip">
                                <h4>Group Project</h4>
                            </div> 
                            <div class="chip">
                                <h4>Wireframing</h4>
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