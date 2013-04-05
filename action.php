<?php
include 'answers.php';
$name = isset($_POST['name']) ? $_POST['name'] : null;
$data = array('name' => $name);
echo "<pre>";
foreach (range(1, 23) as $q) {
    $tmpanswers = $data['a']['answer_' . $q] = isset($_POST['c' . $q]) ? $_POST['c' . $q] : null;
    $check = ($tmpanswers === $answers[$q-1]);
    $data['a']['point_' . $q] = $check ? 1 : 0;
}

$file = fopen('./data.txt', 'a');
fwrite($file, json_encode($data) . "\n");
fclose($file);
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


                <div class="alert alert-success">
                    Teşekkürler <?php $_POST['name'] . ' ' . $_POST['surname']; ?>. Testiniz değerlendirmeye alınmıştır.
                </div>
                <p>
                    Bu test Shepard ve Metzler (1978) tarafından hazırlanan şekillerden oluşmaktadır. Ayrıca <em>Vandenberg & Kuse</em> MRT testinin bir çeşididir.
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
