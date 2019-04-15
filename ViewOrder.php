<html>
<head>
  <title>View Order</title>
</head>
<body bgcolor="lightyellow">
                    <link type="text/css" rel="stylesheet" href="ViewOrder.css">
                          <div id="image">
                            <p>
                                <img src="plant2-1.jpg" width="100px" height="100px"/>
                              </p>
                          </div>
                          <div id="VMlable">
                                 <font face="Bodoni MT"><label>VishwaMangal Nursery</label></font>
                          </div>
                  <div id="main">
                        <form method="get" >
                      <?php
                          echo "<div class=data>";
                          echo " <div class=Container>";

                                include('dbconnect.php');
                                //   $pkey = mysql_real_escape_string($_GET['id']);
                              if(isset($_GET['view']))
                              {
                                  $o_id=$_GET['view'];
                              }
                                   $sql="select * from order_plant where o_id='$o_id'";
                                   $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                                     while ($row = mysqli_fetch_array($run_query, MYSQLI_ASSOC))
                                     {
                                       $o_name=$row['o_name'];
                                       $p_name=$row['o_pname'];
                                       $o_addr=$row['o_address'];
                                       $o_no=$row['o_mobile'];
                                       $p_qty=$row['o_pqty'];
                                       $p_price=$row['o_pprice'];
                                       $p_color=$row['o_pcolor'];
                                       $p_size=$row['o_psize'];
                                       $p_image=$row['o_pimage'];
                                     }



                                     echo "<label for =cname >Customer Name</label>
                                     <input id=cname name=cname  type=text value='$o_name'/>";

                                    echo "<label for =pname >Plant Name</label>
                                    <input id=pname name=pname type=text value='$p_name'/>";

                                    echo "<label for =dadr >Delivery Address</label>
                                    <input id=dadr name=dadr type=text value='$o_addr'/>";

                                    echo "<label for =cno >Contact No.</label>
                                    <input id=cno name=cno required=required type=text value='$o_no'/>";

                                    echo "<label for =pqty >Plant Quantity</label>
                                    <input id=pqty name=pqty type=text value='$p_qty'/>";

                                    echo "<label for =ppr >Paid price</label>
                                    <input id=ppr name=ppr type=text value='$p_price'/>";

                                    echo "<label for =pcolor >Plant Color</label>
                                    <input id=pcolor name=pcolor type=text value='$p_color'/>";

                                    echo "<label for =psize >Paid Size</label>
                                    <input id=psize name=psize type=text value='$p_size'/>";


                                echo "  </div>
                                </div>";
                                echo "<div class=image>";
                                  echo "<img id=blah src='$p_image' width=340 height=300 />";
                              echo "</div>";
                            ?>
                        </form>
                        <a href="order.php"><button>Back</button></a>
                 </div>
  </body>
</html>
