<html>
<head>
  <title>Order Management</title>
</head>
  <body bgcolor="lightyellow">
    <link type="text/css" rel="stylesheet" href="order.css">
    <form method="post">
          <div id="image">
            <p>
                <img src="plant2-1.jpg" width="100px" height="100px"/>
              </p>
          </div>
          <div id="VMlable">
                 <font face="Bodoni MT"><label>VishwaMangal Nursery</label></font>
          </div>
          <div class="search-box">
             <input class="search-txt" type="text" name="search" placeholder="Search for order" >
               <input type="submit" name="searchBtn1" value="Search">

           </div>
           <div class="btn-group">
           <a href="home.html">  <button type="button">Back</button></a>
           </div>
            <div id="main">
              <div class="planttable">


                <?php
                $i=1;
                include('dbconnect.php');
                if(isset($_POST['searchBtn1']))
                {
                echo "<table border='1' rules=rows id=myTable>
                <tr>
                <th bgcolor=LawnGreen width=100px height=30>No</th>
                <th bgcolor=LawnGreen width=100px height=30>Plant Name</th>
                <th bgcolor=LawnGreen width=100px height=30 colspan=2></th>
                </tr>";


                   $search_name=$_POST['search'];
                  $sql="select o_id,o_pname from order_plant where o_pname='$search_name' or o_pname like '$search_name%'";
                  $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                  while ($row = mysqli_fetch_array($run_query, MYSQLI_ASSOC))
                  {

                  echo "<td width=100px height=30 class=firstcol>" . $i. "</td>";
                  echo "<td width=350px height=30 class=lastcol>" . $row['o_pname'] . "</td>";
                  $v=$row['o_id'];
                  echo "<td width=100px height=30 align=center>" . '<a href=ViewOrder.php?view='.$v.'>View</a>'  . "</td>";
                  echo "</tr>";
                  $i++;
                 }

                  echo "</table>";
                }

            else
                  {
                  echo "<table border='1' rules=rows id=myTable>
                  <tr>
                  <th bgcolor=LawnGreen width=100px height=30>No</th>
                  <th bgcolor=LawnGreen width=100px height=30>Plant Name</th>
                  <th bgcolor=LawnGreen width=100px height=30 colspan=2></th>

                  </tr>";

                    $i=1;
                    $sql="select o_id,o_pname from order_plant";
                    $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                    while ($row = mysqli_fetch_array($run_query, MYSQLI_ASSOC))
                    {

                    echo "<td width=100px height=30 class=firstcol>" . $i. "</td>";
                    echo "<td width=350px height=30 class=lastcol>" . $row['o_pname'] . "</td>";
                    /*echo "<td width=100px height=30 align=center>" . '<a href=?edit=<?php echo "$row[p_id]"?>Edit</a>' . "</td>";*/
                    $v=$row['o_id'];
                    echo "<td width=100px height=30 align=center>" . '<a href=ViewOrder.php?view='.$v.'>View</a>'  . "</td>";
                    echo "</tr>";
                    $i++;
                   }

                    echo "</table>";
                  }
                  ?>


              </div>



            </div>
            </form>
  </body>
</html>
