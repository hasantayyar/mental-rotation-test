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


                    <hr />
                    <h2>Cevaplar</h2>
                    <?php
                    $handle = @fopen("./data.txt", "r");
                    if ($handle) {
                        while (($buffer = fgets($handle, 4096)) !== false) {
                            $data = json_decode($buffer);
                            echo '<br><br><hr><p class="well">' .
                            'Name : ' . $data->name . '<br>' .
                            'Avg. : ' . $data->avg . '<br>' .
                            'Age : ' . $data->age . '<br>' .
                            'Game : ' . $data->game . '<br>' .
                            'Gender : ' . $data->gender . '<br></p>';
                            echo '<table class="table table-striped"><thead>' .
                            '<tr><th class="span2">#</th><th>Cevaplar</th><th>Puan</th></tr></thead><tbody>';
                            foreach (range(1, 23) as $i) {
                                $key1 = 'answer_' . $i;
                                $key2 = 'point_' . $i;
                                echo '<tr><td>Cevap ' . $i .
                                '</td><td><span class="badge badge-warning">' .
                                implode('</span> <span class="badge badge-warning">', $data->a->$key1) .
                                '</span></td>' .
                                '<td>' . $data->a->$key2 . '</tr>';
                            }
                            echo '</tbody></table>';
                        }
                        if (!feof($handle)) {
                            echo "Error: unexpected fgets() fail\n";
                        }
                        fclose($handle);
                    }
                    ?>

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
