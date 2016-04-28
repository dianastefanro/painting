<?php
    session_start();
    include_once("config.php");
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Magazin</title>
    <?php include('includes.php'); ?>
</head>

<body id="up">

<?php include('navbar.php'); ?>

<div id="myCarousel" class="carousel slide my-carousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner my-carousel-body" role="listbox">
      <div class="item active">
        <img src="Images/pensule.jpg" alt="pensule" width="1200" height="700">
        <!-- <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div> -->      
      </div>

      <div class="item">
        <img src="Images/pensule.jpg" alt="pensule" width="1200" height="700">
        <!-- <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div> -->      
      </div>
    
      <div class="item">
        <img src="Images/pensule.jpg" alt="pensule" width="1200" height="700">
        <!-- <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div> -->      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container m-t-100 m-b-50">

<?php 
    $sql = "SELECT * FROM Produse INNER JOIN `cat-autor` ON Produse.id_autor=`cat-autor`.`id-autor` INNER JOIN `cat-tehnica` ON Produse.id_tehnica=`cat-tehnica`.`id-tehnica` INNER JOIN `cat-suport` ON Produse.id_suport=`cat-suport`.`id-suport`";
    $result = mysqli_query($db,$sql);
    //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$titlu = $row['titlu'];
    //echo "$sql <br />"; 
    // echo "$titlu <br />"; 
     //$count = mysqli_num_rows($result);
    //echo "$count <br />"; 

    while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"] . " - Titlu: " . $row["titlu"]. " " . $row["pret"]. "<br>";
    ?>       
      <div class="panel panel-default text-center shop-panel pull-left m-l-10">
        <div class="panel-body">
          <form method="post" action="basket.php?action=add&id=<?php echo $row["id"] ?>">
            <div class="btn-modal" data-toggle="modal" data-target=<?php echo '"#myModal' . $row["id"] . '"'?> >
              <img  class="thumb" src=<?php echo '"' . $row["thumb-image"] . '"'?> alt="Tablou - thumb">
            </div>

            <div>
              <h4 class="turkuaz m-b-0"><?php echo $row["titlu"] ?></h4>
              <p><?php echo $row["autor"] ?></p>
            </div>

            <div class="m-t-10">
              <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Detalii</button>
              <button type="button" class="btn btn-info">Adauga in cos</button> -->
              <div class="btn-group">                
                <!-- <a id="" href="#" class="btn btn-pink"><i class="fa fa-shopping-cart"></i> Cumpara</a> -->
                <?php if ($row["stare"] == 'rezervat') { ?>
                    <span class="btn btn-default" disabled><?php echo $row["pret"] ?> RON</span>
                    <input type="submit" value="Cumpara" class="btn btn-pink" disabled />
                  </div>
                  <p>Produsul a fost rezervat!</p>
                <?php } else { ?>
                    <span class="btn btn-default"><?php echo $row["pret"] ?> RON</span>
                    <input type="submit" value="Cumpara" class="btn btn-pink" />
                  </div>
                <?php } ?>
            </div>

            <!-- Modal -->
            <div class="modal fade shop-modal" id=<?php echo '"myModal' . $row["id"] . '"'?> role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detalii lucrare</h4>
                  </div>
                  <div class="modal-body">
                    <div>
                      <img src=<?php echo '"' . $row["image"] . '"'?> alt="Tablou - detalii">
                    </div>
                    <hr>
                    <div class="row text-left product-info">
                      <div class="col-xs-6">
                        <h4 class="turkuaz m-t-0"><?php echo $row["titlu"] ?></h4>
                        <p><b>Autor:</b> <?php echo $row["autor"] ?></p>
                        <?php
                          $sql = "SELECT * FROM `cat-tema` INNER JOIN `produs-tema` ON `cat-tema`.`id-tema`=`produs-tema`.`id-tema` WHERE `produs-tema`.`id-produs`=" . $row["id"];
                          $result_tema = mysqli_query($db,$sql);
                          $teme = "";
                          while($i = $result_tema->fetch_assoc()) {
                            if ($teme != "") {
                                $teme = $teme . ", ";
                            }
                            $teme = $teme . $i["tema"];
                          }
                        ?>
                        <p><b>Categorie:</b> <?php echo $teme ?></p>
                      </div>
                      <div class="col-xs-6">
                        <p><b>Tehnica:</b> <?php echo $row["tehnica"] ?></p>
                        <p><b>Suport:</b> <?php echo $row["suport"] ?></p>
                        <p><b>Dimensiune:</b> <?php echo $row["dimensiune"] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    <div class="btn-group">                
                      <!-- <a id="" href="#" class="btn btn-pink"><i class="fa fa-shopping-cart"></i> Cumpara</a> -->
                      <?php if ($row["stare"] == 'rezervat') { ?>
                          <span class="btn btn-default" disabled><?php echo $row["pret"] ?> RON</span>
                          <input type="submit" value="Cumpara" class="btn btn-pink" disabled />
                        </div>
                        <p>Produsul a fost rezervat!</p>
                      <?php } else { ?>
                          <span class="btn btn-default"><?php echo $row["pret"] ?> RON</span>
                          <input type="submit" value="Cumpara" class="btn btn-pink" />
                        </div>
                      <?php } ?>
                  </div>            
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
  <?php 
  } 
  mysqli_close($db);
  ?> 
</div>

<?php include('footer.php'); ?>

</body>
</html>