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


                <div class="alert alert-success">
                    Teşekkürler <?php $_POST['name'] . ' ' . $_POST['surname']; ?>. Testiniz değerlendirmeye alınmıştır.
                </div>
                <p>
                    Bu test Shepard ve Metzler (1978) tarafından hazırlanan şekillerden oluşmaktadır. Ayrıca Vandenberg & Kuse MRT testinin bir çeşididir.
                </p>
                <p><a href="#" class="label label-info">(Michael Peters, PhD (1995) izni ile) </a></p>
            </div>
            <br />
            <br />
            <br />
            <hr />
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
