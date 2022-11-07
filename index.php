<?php require_once('init.php')?>
<?php require_once('globals/head.php');?>
<body>
    <?php require('globals/header.php');?>
    <div class="theme-wrapper">
        <main>
            <section id="banner">
                <div>
                    <div class="logo">
                        <?php require('images/logo.svg');?>
                    </div>
                    <div class="titles">
                        <h1>Web<br>Developer</h1>
                        <h2>Michael McKay</h2>
                    </div>
                </div>
            </section>
            <section id="featured">
                <h2>Featured Projects</h2>
                <div class="feats-container">
                    <div class="card">
                        <img src="images/test-portrait.jpg" alt="">
                        <div class="overlay">
                            <h3>First Website</h3>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/test-portrait.jpg" alt="">
                        <div class="overlay">
                            <h3>Vizro Records</h3>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php require('globals/footer.php');?>
</body>
</html>