<html>
<head>
  <title>View Plant</title>
      <link href="ViewPlant.css" rel="stylesheet" type="text/css"/>
      <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
      <meta charset=utf-8 />
</head>
    <body bgcolor="lightyellow">
      <link type="text/css" rel="stylesheet" href="plant.css">
            <div id="image">
              <p>
                  <img src="plant2-1.jpg" width="100px" height="100px"/>
            </p>
            </div>
            <div id="VMlable">
                   <font face="Bodoni MT"><label>VishwaMangal Nursery</label></font>
            </div>
    <div class="main">
      <form method="post" enctype="multipart/form-data">
        <?php
        session_start();
        include('dbconnect.php');
      //  $p_id='';
      if(isset($_GET['edit']))
      {
         $p_id=$_GET['edit'];

        if(isset($_POST['update']))
        {

              $p_cat1=$_POST['cat'];
              $p_name1=$_POST['name'];
              $p_price1=$_POST['price'];
              $p_qty1=$_POST['qty'];
              $p_color1=$_POST['color'];
              $p_size1=$_POST['size'];
              $p_disc1=$_POST['disc'];
              $filename1=basename($_FILES['filename1']['name']);

              $sql1="update plants11 set p_catagory='$p_cat1',p_name='$p_name1',p_price='$p_price1',p_qty='$p_qty1',p_color='$p_color1',p_size='$p_size1',p_disc='$p_disc1',p_image='$filename1' where p_id='$p_id'";
              $run_query1=mysqli_query($conn,$sql1)or die( mysqli_error($conn));

             echo "<div class=data>";
             echo " <div class=Container>";
             echo "<label for =cat >Catagory</label>";
             echo "<input id=cat name=cat required=required type=text value='$p_cat1'/>";
             echo "<label for =name >Name</label>";
             echo "<input id=name name=name required=required type=text value='$p_name1'/>";
             echo "<label for =price >Price</label>";
             echo "<input id=price name=price required=required type=text value='$p_price1'/>";
             echo "<label for =qty >Quantity</label>";
             echo "<input id=qty name=qty required=required type=text value='$p_qty1'/>";
             echo "<label for =color >Color</label>";
             echo "<input id=color name=color required=required type=text value='$p_color1'/>";
             echo "<label for =size >Size</label>";
             echo "<input id=size name=size required=required type=text value='$p_size1'/>";
             echo "<label for =disc >Discription</label>";
             echo "<input id=disc name=disc required=required type=text value='$p_disc1'/>";
             echo "</div>";
             echo "</div>";
             echo "<div class=image>";
            echo "<style>
            article, aside, figure, footer, header, hgroup,
            menu, nav, section { display: block; }
            </style>";
            echo "<script src=AddPlant.js></script>";
            echo "<input type=file id=filename1 name=filename1  onchange=readURL(this); value='$filename1' />";
            echo "<img id=blah src='$filename1' alt=your image width=340 height=300 />";
            echo "</div>";
          
        }

        else
        {
        $sql="select * from plants11 where p_id='$p_id'";
        $run_query=mysqli_query($conn,$sql)or die( mysqli_error($conn));
          while ($row = mysqli_fetch_array($run_query, MYSQLI_ASSOC))
          {
            $p_cat=$row['p_catagory'];
            $p_name=$row['p_name'];
            $p_price=$row['p_price'];
            $p_qty=$row['p_qty'];
            $p_color=$row['p_color'];
            $p_size=$row['p_size'];
            $p_disc=$row['p_disc'];
            $p_image=$row['p_image'];
            //$filename=basename($_FILES['filename'][$p_image]);
          }
          echo "<div class=data>";
             echo " <div class=Container>";
           echo "<label for =cat >Catagory</label>";
           echo "<input id=cat name=cat required=required type=text value='$p_cat'/>";
           echo "<label for =name >Name</label>";
           echo "<input id=name name=name required=required type=text value='$p_name'/>";
           echo "<label for =price >Price</label>";
           echo "<input id=price name=price required=required type=text value='$p_price'/>";
           echo "<label for =qty >Quantity</label>";

           echo "<input id=qty name=qty required=required type=text value='$p_qty'/>";
           echo "<label for =color >Color</label>";
           echo "<input id=color name=color required=required type=text value='$p_color'/>";
           echo "<label for =size >Size</label>";
           echo "<input id=size name=size required=required type=text value='$p_size'/>";
           echo "<label for =disc >Discription</label>";
           echo "<input id=disc name=disc required=required type=text value='$p_disc'/>";
           echo "</div>";
           echo "</div>";
           echo "<div class=image>";
          echo "<style>
          article, aside, figure, footer, header, hgroup,
          menu, nav, section { display: block; }
          </style>";
          echo "<script src=AddPlant.js></script>";
          echo "<input type=file id=filename1 name=filename1 value='$p_image' onchange=readURL(this);  />";
          echo "<img id=blah src=$p_image alt=your image width=340 height=300 />";
          echo "</div>";
        }
      }
      ?>
      <button name="update">Update</button>
      </form>
      <a href="plant.php"><button name="back">Back</button></a>
    </div>
  </body>
  </html>
