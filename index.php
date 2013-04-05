<!DOCTYPE html>
<html lang="en">
    <head>
         <?php include 'meta.php'; ?>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
            <div class="hero-unit">
                <a href="#aciklama" id="aciklama"></a>
                <h1>Zihin Döndürme Testi</h1>
                <p>
                    Bu test Shepard ve Metzler (1978) tarafından hazırlanan şekillerden oluşmaktadır. Ayrıca Vandenberg & Kuse MRT testinin bir çeşididir.
                </p>
                <p><a href="#" class="label label-info">(Michael Peters, PhD (1995) izni ile) </a></p>
                <p><br /><a href="#test" class="btn btn-primary btn-large">Teste Başla</a></p>
            </div>
            <a href="#test" id="test"></a>
            <br />
            <br />
            <br />


            <div class="row">
                <div class="span12">
                    <h2>Test</h2>
                    <p>Aşağıda her soruda beşer tane şekil görülmektedir.</p>
                    <p>Sağdaki 1, 2, 3 ve 4 numaralı şekillerden yalnızca iki tanesi soldaki nesnenin döndürülmesiyle oluşturulmuştur. 
                        Her sorudaki bu iki şekli bulunuz ve işaretleyiniz. 
                        Her iki şekli de doğru işaretlediğiniz zaman sorudan tam puan alacaksınız.
                    </p>
                    <form action="action.php" method="post" name="mainform">


                        <fieldset>
                            <legend>Kişisel bilgileriniz</legend>
                            <label for="name"></label>
                            <input type="text" name="name" value="" placeholder="Adınız" />
                            
                            <label for="surname"></label>
                            <input type="text" name="surname" value="" placeholder="Soyadınız"/>
                            
                            <label for="email"></label>
                            <input type="text" name="email" value="" placeholder="Email"/>
                            <hr />

                            <?php
                            foreach (range(1, 24) as $q) {
                                ?>
                                <legend><span class="badge badge-warning">Soru <strong><?php echo $q; ?></strong></span></legend>
                                <img src="img/<?php echo $q; ?>.png" alt="soru" />
                                <div class="row"></div>
                                <div class="pull-left" style="width: 143px;display: block;">&nbsp;</div>
                                <label class="pull-left span1">
                                    <input type="checkbox" name="c<?php echo $q; ?>[]" value="1"> <span class="badge badge-success">1</span>
                                </label>
                                <label class="pull-left span1">
                                    <input type="checkbox" name="c<?php echo $q; ?>[]" value="2"> <span class="badge badge-success">2</span>
                                </label>
                                <label class="pull-left span1">
                                    <input type="checkbox" name="c<?php echo $q; ?>[]" value="3"> <span class="badge badge-success">3</span>
                                </label>
                                <label class="pull-left span1">
                                    <input type="checkbox" name="c<?php echo $q; ?>[]" value="4"> <span class="badge badge-success">4</span>
                                </label>
                                <div class="row"></div>
                                <?php
                            }
                            ?>
                            <p><input class="btn btn-primary" type="submit" value="Cevapları Gönder &raquo;" /></p>
                        </fieldset>

                    </form>
                </div>

            </div>

            <hr>

            <footer>
                <p>&copy; 2013</p>
            </footer>

        </div>         

    </body>
</html>
