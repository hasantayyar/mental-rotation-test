<?php
$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$check = ($password == 'test' && $username = 'test');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'meta.php'; ?>
    </head>

    <body>
        <?php include 'navbar.php'; ?> 
        <div class="container">
            <div class="well span12">
                <a href="#aciklama" id="aciklama"></a>




                <?php
                if (!$check) {
                    ?>
                    <div class="alert alert-error">
                        <p>Kullanınıcı adı veya parolanız hatalı. Tekrar deneyiniz.</p>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-success">
                        Başarılı giriş yaptınız. Sonuçları aşağıda listeli göreceksiniz.
                    </div>

                    <p>
                        Bu test Shepard ve Metzler (1978) tarafından hazırlanan şekillerden oluşmaktadır. Ayrıca Vandenberg & Kuse MRT testinin bir çeşididir.
                    </p>
                    <p><a href="#" class="label label-info">(Michael Peters, PhD (1995) izni ile) </a></p>
                </div>
                <br />
                <hr />

                <?php
            }
            ?>

            <footer>
                <p>&copy; 2013</p>
            </footer>

        </div> 

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-scrollspy.js"></script>
        <script src="js/bootstrap-button.js"></script>
        <script src="js/bootstrap-typeahead.js"></script>

    </body>
</html>
