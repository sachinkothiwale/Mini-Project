<html>
<head>
  <title>Plant Management</title>
</head>
  <body bgcolor="lightyellow">
    <link type="text/css" rel="stylesheet" href="plant.css">
    <script defer src="http://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <form action="" method="post" method="get">
                    <div id="image">
            <p>
                <img src="plant2-1.jpg" width="100px" height="100px"/>
              </p>
          </div>

          <div id="VMlable">
                 <font face="Bodoni MT"><label>VishwaMangal Nursery</label></font>
          </div>



                <div class="btn-group">
                <a href="AddPlant.html">  <button type="button">Add Plant</button></a>
                <a href="home.html">  <button type="button">Back</button></a>
                </div>


                  <div class="search-box">
                     <input class="search-txt" type="text" name="search" placeholder="Search for plant" >
                       <input type="submit" name="searchBtn1" value="Search">

                   </div>
                   <div id="main">
                  <div class="planttable">


                    <?php
                    if(isset($_POST['searchBtn1']))
                    {
                    echo "<table border='1' rules=rows id=myTable>
                    <tr>
                    <th bgcolor=LawnGreen width=100px height=30>No</th>
                    <th bgcolor=LawnGreen width=100px height=30>Plant Name</th>
                    <th bgcolor=LawnGreen width=100px height=30 colspan=2></th>
                    </tr>";

                      $i=1;
                      include('dbconnect.php');
                       $search_name=$_POST['search'];
                      $sql="select p_id,p_name from plants11 where p_name='$search_name' or p_name like '$search_name%'";
                      $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                      while ($row = mysqli_fetch_array($run_query, MYSQLI_ASSOC))
                      {

                      echo "<td width=100px height=30 class=firstcol>" . $i. "</td>";
                      echo "<td width=350px height=30 class=lastcol>" . $row['p_name'] . "</td>";
                      $v=$row['p_id'];
                      echo "<td width=100px height=30 align=center>" . '<a href=ViewPlant.php?edit='.$v.'>Edit</a>'  . "</td>";
                      echo "<td width=100px height=30 align=center>" . '<a href=process.php?delete='.$v.'>Delete</a>'  . "</td>";
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
                        include('dbconnect.php');
                        $sql="select p_id,p_name from plants11";
                        $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                        while ($row = mysqli_fetch_array($run_query, MYSQLI_ASSOC))
                        {

                        echo "<td width=100px height=30 class=firstcol>" . $i. "</td>";
                        echo "<td width=350px height=30 class=lastcol>" . $row['p_name'] . "</td>";
                        $v=$row['p_id'];
                        echo "<td width=100px height=30 align=center>" . '<a href=ViewPlant.php?edit='.$v.'>Edit</a>'  . "</td>";
                        echo "<td width=100px height=30 align=center>" . '<a href=process.php?delete='.$v.'>Delete</a>'  . "</td>";

                        echo "</tr>";
                        $i++;
                       }

                        echo "</table>";
                      }
                      ?>


                  </div>
            </div>
          </div>
    </form>
  </body>
</html>
