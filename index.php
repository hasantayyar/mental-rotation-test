<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'meta.php'; ?>
        <style>
            .itemx{
                width:130px;
                display: block;
                float:left;
            }
        </style>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
            <div class="hideonstart hero-unit">
                <a href="#aciklama" id="aciklama"></a>
                <h1>Zihin Döndürme Testi</h1>
                <p>
                    Bu test Shepard ve Metzler (1978) tarafından hazırlanan şekillerden oluşmaktadır. Ayrıca Vandenberg & Kuse MRT testinin bir çeşididir.
                </p>
                <p><a href="#" class="label label-info">(Michael Peters, PhD (1995) izni ile) </a></p>
                <p><br /><a href="#testornek" class="btn btn-large">Örnek Teste Başla</a> <a href="#test" onclick="start()" class="btn btn-primary btn-large">Teste Başla</a></p>
            </div>
            <a href="#test" id="test"></a>
            <br />
            <br />
            <br />
            <div class="row hideonstart">
                <a href="#testornek" id="testornek"></a>
                <div class="span12 well">
                    <h2>Örnek Soular</h2>
                    <p>Örnek sorularla kendinizi test edin</p>


                    <?php
                    foreach (range(1, 4) as $q) {
                        ?>
                        <!-- ornek sorular -->
                        <div class="qs_o" id="qo<?php echo $q; ?>" style="<?php echo $q > 1 ? 'display:none' : ''; ?>">
                            <legend><span class="badge badge-warning">Örnek <strong><?php echo $q; ?></strong></span></legend>
                            <img src="img/o<?php echo $q; ?>.png" alt="soru" />
                            <div class="row"></div>
                            <div class="pull-left" style="width: 143px;display: block;">&nbsp;</div>
                            <label class="pull-left span1">
                                <input type="checkbox" class="co<?php echo $q; ?>" name="co<?php echo $q; ?>[]" value="A"> <span class="badge badge-success">A</span>
                            </label>
                            <label class="pull-left span1">
                                <input type="checkbox" class="co<?php echo $q; ?>" name="co<?php echo $q; ?>[]" value="B"> <span class="badge badge-success">B</span>
                            </label>
                            <label class="pull-left span1">
                                <input type="checkbox" class="co<?php echo $q; ?>" name="co<?php echo $q; ?>[]" value="C"> <span class="badge badge-success">C</span>
                            </label>
                            <label class="pull-left span1">
                                <input type="checkbox" class="co<?php echo $q; ?>" name="co<?php echo $q; ?>[]" value="D"> <span class="badge badge-success">D</span>
                            </label>
                            <div class="row"></div>
                            <div class="row span4">
                                <?php if ($q == 4) {
                                    ?>
                                    <p><a data-toggle="modal"  role="button" class="btn btn-primary" href="#example_answers" onclick="fillanswers()">Cevapları Gör &raquo;</a></p>
                                <?php } else {
                                    ?>
                                    <p><input class="btn" type="button" onclick="nexto(<?php echo $q; ?>);" value="Sonraki &raquo;" /></p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>


                        <?php
                    }
                    ?>

                    <!-- Modal -->
                    <div id="example_answers" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 id="myModalLabel">Örnek Sorular Cevap Anahtarı</h3>
                        </div>
                        <div class="modal-body">
                            <p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="span2">Soru</th>
                                        <th>Sizin Cevabınız</th>
                                        <th>Doğru Cevap</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge badge-success">1</span></td>
                                        <td><span class="span_co1"></span></td>
                                        <td><strong>A, C</strong></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-success">2</span></td>
                                        <td><span class="span_co2"></span></td>
                                        <td><strong>B, C</strong></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-success">3</span></td>
                                        <td><span class="span_co3"></span></td>
                                        <td><strong>A, D</strong></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-success">4</span></td>
                                        <td><span class="span_co4"></span></td>
                                        <td><strong>A, C</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Kapat</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#test" id="test"></a>
            <br><br><br><br>
            <div class="hero-unit">
                <div ckass="row">
                    <h2>Test</h2>
                    <p>Aşağıda her soruda beşer tane şekil görülmektedir.</p>
                    <p>Sağdaki A,B,C ve D şıklarındaki şekillerden yalnızca iki tanesi soldaki nesnenin döndürülmesiyle oluşturulmuştur. 
                        Her sorudaki bu iki şekli bulunuz ve işaretleyiniz. 
                        Her iki şekli de doğru işaretlediğiniz zaman sorudan tam puan alacaksınız.
                    </p>
                    <form action="action.php" method="post" name="mainform">


                        <fieldset>
                            <legend>Kişisel bilgileriniz</legend>
                            <label for="name"></label>
                            <input type="text" name="name" value="" placeholder="Adınız" />
                            <label for="avg"></label>
                            <input type="text" name="avg" value="" placeholder="Akademik ortalama"/>
                            <label for="age"></label>
                            <input type="text" name="age" value="" placeholder="Yaşınız"/>
                            <hr />

                            <label>Bilgisayar oyunları oynar mısınız?</label>
                            <label><input type="radio" name="game" value="1"/> Evet</label>
                            <label><input type="radio" name="game" value="0"/> Hayir</label>
                            <hr />
                            <label for="gender">Cinsiyet</label>
                            <select name="gender" placeholder="Cinsiyet">
                                <option value="F" selected="selected">K</option>
                                <option value="M">E</option>
                            </select>
                            <hr />


                            <?php
                            foreach (range(1, 24) as $q) {
                                ?>
                                <div class="qs" id="q<?php echo $q; ?>" style="<?php echo $q > 1 ? 'display:none' : ''; ?>">
                                    <legend><span class="badge badge-warning">Soru <strong><?php echo $q; ?></strong></span></legend>
                                    <img  width="700px" src="img/<?php echo $q; ?>.png" alt="soru" />
                                    <div class="row"></div>
                                    <div class="pull-left" style="width: 240px;display: block;">&nbsp;</div>
                                    <label class="pull-left itemx">
                                        <input type="checkbox" name="c<?php echo $q; ?>[]" value="A"> <span class="badge badge-success">A</span>
                                    </label>
                                    <label class="pull-left itemx">
                                        <input type="checkbox" name="c<?php echo $q; ?>[]" value="B"> <span class="badge badge-success">B</span>
                                    </label>
                                    <label class="pull-left itemx">
                                        <input type="checkbox" name="c<?php echo $q; ?>[]" value="C"> <span class="badge badge-success">C</span>
                                    </label>
                                    <label class="pull-left itemx">
                                        <input type="checkbox" name="c<?php echo $q; ?>[]" value="D"> <span class="badge badge-success">D</span>
                                    </label>
                                    <div class="row"></div>
                                    <div class="row span4">
                                        <?php if ($q == 24) {
                                            ?>
                                            <p><input class="btn btn-primary" type="submit" value="Cevapları Gönder &raquo;" /></p>
                                        <?php } else {
                                            ?>
                                            <p><input class="btn" type="button" onclick="next(<?php echo $q; ?>);" value="Sonraki &raquo;" /></p>
                                                <?php
                                            }
                                            ?>
                                    </div>
                                </div>


                                <?php
                            }
                            ?>

                        </fieldset>

                    </form>
                </div>

            </div>

            <hr>

            <footer>
                <p>&copy; 2013</p>
            </footer>

        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
            function next(num){
                var n = num+1;
                $('.qs').slideUp('fast',function(){});
                $("#q"+n).slideDown();
            }
            function nexto(num){
                var n = num+1;
                $('.qs_o').slideUp('fast',function(){});
                $("#qo"+n).slideDown();
            }
            function start(){
                $(".hideonstart").slideUp();
            }
            function fillanswers(){
                for (var i=1;i<5;i++){
                    var tmparray = new Array();
                    $(".co"+i).each(function(){
                        if(this.checked){
                            tmparray.push($(this).val()); 
                            //console.log(i+ " : "+$(this).val());
                        }
                    });
                    $(".span_co"+i).html(tmparray.join(", "));
                }
            }
        </script>

        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-modal.js"></script>

    </body>
</html>
