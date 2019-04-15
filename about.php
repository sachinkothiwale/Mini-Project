<html>
<head>
<title>Home Page</title>
</head>

<body bgcolor="lightyellow">

    <link type="text/css" rel="stylesheet" href="about.css">
    <div id="image">
          <p>
                <img src="plant2-1.jpg" width="100px" height="100px"/>

          </p>
    </div>

    <div id="VMlable">
              <font face="Bodoni MT"><label>VishwaMangal Nursery</label></font>
    </div>

      <div id="main">
        <form method="post">
        <div class="data">
            <font face="Bodoni MT" size="16" Color="red"><label for ="name">About Owner</label></font><br><br>
            <div class="container">
              <?php
              include('dbconnect.php');

                        if(isset($_POST['update']))
                        {
                          $sql="select * from about_us";
                          $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                            while ($row = mysqli_fetch_array($run_query, MYSQLI_ASSOC))
                              {
                                  $name=$row['o_name'];
                                }

                          $name1=$_POST['name'];
                          $mobile1=$_POST['mobile'];
                          $email1=$_POST['email'];
                          $line11=$_POST['line1'];
                          $line21=$_POST['line2'];

                          $sql2="update about_us set o_name='$name1' , o_mobile='$mobile1' , o_email='$email1',o_address_line1='$line11',o_address_line2='$line21' where o_name='$name' ";
                          $run_query1=mysqli_query($conn,$sql2)or die( mysqli_error($conn));

                                echo "<label for =name >Owner Name</label>";
                                echo "<input id=name name=name  type=text value='$name1'/>";

                                echo "<label for =mobile >Owner Mobile No.</label>";
                                echo "<input id=mobile name=mobile type=text value='$mobile1'/>";

                                echo "<label for =email >Owner Email</label>";
                                echo "<input id=email name=email  type=text value='$email1'/>";

                                echo "<label for =line1 >Address Line1</label>";
                                echo "<input id=line1 name=line1  type=text value='$line11'/>";

                                echo "<label for =line2 >Address Line2</label>";
                                echo "<input id=line2 name=line2  type=text value='$line21'/>";
                        }
                        else
                        {
                          $sql="select * from about_us";
                          $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));
                            while ($row = mysqli_fetch_array($run_query, MYSQLI_ASSOC))
                              {
                                  $name=$row['o_name'];
                                  $mobile=$row['o_mobile'];
                                  $email=$row['o_email'];
                                  $line1=$row['o_address_line1'];
                                  $line2=$row['o_address_line2'];

                                }
                                echo "<label for =name >Owner Name</label>";
                                echo "<input id=name name=name  type=text value='$name'/>";

                                echo "<label for =mobile >Owner Mobile No.</label>";
                                echo "<input id=mobile name=mobile type=text value='$mobile'/>";

                                echo "<label for =email >Owner Email</label>";
                                echo "<input id=email name=email  type=text value='$email'/>";

                                echo "<label for =line1 >Address Line1</label>";
                                echo "<input id=line1 name=line1  type=text value='$line1'/>";

                                echo "<label for =line2 >Address Line2</label>";
                                echo "<input id=line2 name=line2  type=text value='$line2'/>";

                            }



               ?>


            <button name="update" >Update</button>

          </div>
        </div>
      </form>
    </div>

</body>
</html>
