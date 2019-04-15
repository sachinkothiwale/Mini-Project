<html>
<head>
  <title>View Order</title>
</head>
<body bgcolor="lightyellow">
                    <link type="text/css" rel="stylesheet" href="updateStock.css">
                          <div id="image">
                            <p>
                                <img src="plant2-1.jpg" width="100px" height="100px"/>
                              </p>
                          </div>
                          <div id="VMlable">
                                 <font face="Bodoni MT"><label>VishwaMangal Nursery</label></font>
                          </div>

                    <div id="main">
                    <div class="data">
                    <div class="Container">

                          <a href="stock.php"><button>Back</button></a>
                          <form method="post"><button name="update">Update</button>
                          <?php
                                session_start();
                                include('dbconnect.php');
                                //  $p_id='';
                                if(isset($_GET['edit']))
                                {
                                 $p_id=$_GET['edit'];
                               }

                                if(isset($_POST['update']))
                                {

                                      $p_qty1=$_POST['qty'];
                                        $sql1="update plants11 set p_qty='$p_qty1' where p_id='$p_id'";
                                      $run_query1=mysqli_query($conn,$sql1)or die( mysqli_error($conn));

                                     echo "<label for =qty >Quntity</label>";
                                     echo "<input id=qty name=qty type=text value='$p_qty1'/>";
                                      /*  $_SESSION['message']="Stock has been uploaded!!";
                                    $_SESSION['msg_type']="success";*/

                                  }
                                  else {
                                    $sql="select * from plants11 where p_id='$p_id'";
                                    $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                                      while ($row = mysqli_fetch_array($run_query, MYSQLI_ASSOC))
                                      {
                                        $p_qty=$row['p_qty'];

                                      }
                                         echo "<label for =qty >Quntity</label>";
                                         echo "<input id=qty name=qty type=text value='$p_qty'/>";

                                     }

                                  ?>
                                </form>
                              </div>
                            </div>
                          </div>



    </body>
  </html>
