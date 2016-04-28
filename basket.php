<?php
  session_start();
  //require_once("config.php");
  include ("config.php");

  if(!empty($_GET["action"])) {
    echo "<br /><br /><br /><br /><br /><br /><br />action este: ". $_GET["action"] . "<br />";
    switch($_GET["action"]) {
      case "add":
          echo "case add";
          //$sql = "SELECT * FROM Produse WHERE id=" . $_GET["id"] . " AND stare='NULL'";
          $sql = "SELECT * FROM Produse INNER JOIN `cat-autor` ON Produse.id_autor=`cat-autor`.`id-autor` INNER JOIN `cat-tehnica` ON Produse.id_tehnica=`cat-tehnica`.`id-tehnica` INNER JOIN `cat-suport` ON Produse.id_suport=`cat-suport`.`id-suport` WHERE id=" . $_GET["id"];

          $result = mysqli_query($db,$sql);
          $productByID = $result->fetch_assoc();
 
          if ($productByID["stare"] == 'rezervat' || $productByID["stare"] == 'vandut') {
            header('Location: shop.php');
          }
          else {          
            echo "$sql <br />";
            $sql2 = "UPDATE Produse SET stare='rezervat' WHERE id=" . $_GET["id"];
            $result2 = mysqli_query($db,$sql2);
                  
            
            echo $productByID["id"] . "<br />";
            echo $productByID["titlu"] . "<br />";
            echo $productByID["stare"] . "<br />";
            echo $productByID["autor"] . "<br />";

            $itemArray = array($productByID["id"]=>array('titlu'=>$productByID["titlu"], 'id'=>$productByID["id"], 'autor'=>$productByID["autor"], 'dimensiune'=>$productByID["dimensiune"], 'thumb-image'=>$productByID["thumb-image"], 'stare'=>$productByID["stare"], 'autor'=>$productByID["autor"], 'tehnica'=>$productByID["tehnica"], 'suport'=>$productByID["suport"], 'pret'=>$productByID["pret"]));

            if(!empty($_SESSION["cart_item"])) {
              if(in_array($productByCode["id"],$_SESSION["cart_item"])) {
                foreach($_SESSION["cart_item"] as $k => $v) {
                    if($productByCode["id"] == $k)
                      $_SESSION["cart_item"][$k]["cantitate"] = $_POST["cantitate"];
                }
              } else {
                $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
              }
            } else {
              $_SESSION["cart_item"] = $itemArray;
            }
          }
      break;
      case "remove":
        // if(!empty($_SESSION["cart_item"])) {
        //   foreach($_SESSION["cart_item"] as $k => $v) {
        //       $k = $k + 1;
        //       if($_GET["id"] == $k) {
        //         echo "id = " . $_GET["id"] . "<br />";
        //         echo "k = " . $k . "<br />";
        //         $sql = "UPDATE Produse SET stare='NULL' WHERE id=" . $_GET["id"];
        //         $result = mysqli_query($db,$sql);
        //         unset($_SESSION["cart_item"][$k]);        
        //       }
        //       if(empty($_SESSION["cart_item"]))
        //         unset($_SESSION["cart_item"]);
        //   }
        // }
        //unset($_SESSION["cart_item"][$_GET["id"]]);
      echo 'sesion[id] = ' . $_SESSION["cart_item"][$_GET["id"]];
      break;
      case "empty":
        if(!empty($_SESSION["cart_item"])) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              $k = $k + 1;
              $sql = "UPDATE Produse SET stare='NULL' WHERE id=" . $k;
              echo "sql empty: $sql";
              $result = mysqli_query($db,$sql);
              unset($_SESSION["cart_item"][$k]);        
              if(empty($_SESSION["cart_item"]))
                unset($_SESSION["cart_item"]);
          }
        }
        unset($_SESSION["cart_item"]);
      break;  
    }
  }
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Cos de cumparaturi</title>
    <?php include('includes.php'); ?>
</head>

<body id="up">

  <?php include('navbar.php'); ?>

 <!--  <?php
  // if(isset($_SESSION["cart_item"])){
  //     $item_total = 0;
  ?> -->

    <div class="container m-t-100 m-b-50">
      <div class="row">
        <div class="col-sm-9">
          <div class="panel-group">
            <div class="panel panel-default m-b-10">
              <?php   
              foreach ($_SESSION["cart_item"] as $item){
              ?>
                <div class="panel-heading"><h4 class="turkuaz m-b-0"><?php echo $item["titlu"]; ?></h4> <p>by <?php echo $item["autor"]; ?></p></div>
                
                <div class="panel-body"> 
                  <div class="row"> 
                    <div class="col-sm-4">
                      <img  class="thumb" src=<?php echo '"' . $item["thumb-image"] . '"'?> alt=<?php echo '"' . $item["titlu"] . '"'?> />
                    </div>

                    <div class="col-sm-4">
                      <p><b>Tehnica:</b> <?php echo $item["tehnica"]; ?></p>
                      <p><b>Suport:</b> hartie</p>
                      <p><b>Dimensiune:</b> <?php echo $item["dimensiune"]; ?></p>
                    </div>
                    <div class="col-sm-4">
                      <h4 class="text-indigo"><?php echo $item["pret"]; ?> RON</h4>
                      <a href="basket.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction">Sterge produs</a>
                    </div>
                  </div>
                </div>  
                <?php
                    $item_total += $item["price"];
                }
                ?>     
            </div>
          </div>
          <div>
              <a id="btnEmpty" href="basket.php?action=empty">Goleste cosul de cumparaturi</a>
              <a href="shop.php" class="btn btn-pink pull-right">Continua cumparaturile</a>
          </div>     
        </div>
        <div class="col-sm-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center"><h4 class="m-b-0">Sumar comanda</h4></div>
              <div class="panel-body"> 
                <p>Total produse: 200 RON </p>
                <p>Cost livrare: 15 RON </p>
                <hr />
                <h4>Total: <span class="text-indigo">215 RON</span></h4>
                <div class="text-center m-t-20">
                  <a href="#" class="btn btn-pink">Pasul urmator</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <?php include('footer.php'); ?>
</body>
</html>