<?php
include 'answers.php';

$data['name'] = isset($_POST['name']) ? $_POST['name'] : null;
$data['avg'] = isset($_POST['avg']) ? $_POST['avg'] : null;
$data['age'] = isset($_POST['age']) ? $_POST['age'] : null;
$data['game'] = isset($_POST['game']) ? $_POST['game'] : null;
$data['gender'] = isset($_POST['gender']) ? $_POST['gender'] : null;

$totalPoint = 0;
foreach (range(1, 24) as $q) {
    $tmpanswers = $data['a']['answer_' . $q] = isset($_POST['c' . $q]) ? $_POST['c' . $q] : null;
    $check = ($tmpanswers === $answers[$q-1]);
    $point = $check ? 1 : 0;
    $data['a']['point_' . $q] = $point;
    $totalPoint+=$point;
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
                    <p><i class="icon-star"></i> Teşekkürler <?php $_POST['name'] . ' ' . $_POST['surname']; ?>. Testi tamamladınız.</p>
                    <p><span class="badge badge-warning badge-large""><?php echo $totalPoint;?></span> puan aldınız</p>
                </div>
                <p>
                   <small> Bu test Shepard ve Metzler (1978) tarafından hazırlanan şekillerden oluşmaktadır. Ayrıca <em>Vandenberg & Kuse</em> MRT testinin bir çeşididir.
                   </small>
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
