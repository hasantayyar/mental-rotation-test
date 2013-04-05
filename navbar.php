<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

            <a class="brand" href="/zihin-dondurme-project">Mental Rotation</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="/zihin-dondurme-project/index.php#test">Test</a></li>
                    <li><a href="/zihin-dondurme-project/index.php#aciklama">Açıklama</a></li>
                </ul>
                <?php
                if (!isset($check)) {
                    ?>
                    <form class="navbar-form pull-right" action="list.php" method="post">
                        <input class="span2" type="text" name="username" placeholder="Kullanıcı" />
                        <input class="span2" type="password" name="password" placeholder="Parola" />
                        <button type="submit" class="btn">Sonucları listele</button>
                    </form>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>