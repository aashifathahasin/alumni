<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="../css/styleSheet.css" type="text/css" />
 <meta name="robots" content="NOINDEX" />
<head>
    <title>Tables Gallery</title>
</head>

<body>
  <script type="text/javascript" src="../js/wz_tooltip.js"></script>

    <script type="text/javascript" src="../js/functions.js"></script>

    <script type="text/javascript">
    function ToolTip() {
            Tip('<strong>Dimensions:</strong><br />Height 45cm<br />Width 46cm<br />Depth 26cm<br />Weight 4.8KG<br /><br />Click image for more information.', TITLE, <?php $row['product_name']; ?>'title <?php $row['product_name']; ?>', PADDING, 9, STICKY, true, DURATION, 4500, OPACITY, 80, BGCOLOR, '#C5C5C5', BORDERCOLOR, '#343434', FONTCOLOR, '#343434', OFFSETX, 50);
            return false;
        }
    </script>
<!-- Start of Container -->
<div id="container">

    
<!-- Start of Picture viewer -->
<?php
// Retrieve the products information:
$q = "SELECT * FROM `products` INNER JOIN `category` ON products.category_id=category.category_id INNER JOIN `images` ON products.product_id=images.product_id WHERE category_type=\"Tables\" AND print_name=\"main\" ";

//Display results
$r = mysqli_query($mysqli, $q);
if(mysqli_num_rows($r) >=0){
     // Show Results
    $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
    
// Create the form:

//<!-- Main picture display area-->
echo'<div id="picViewer_mainPic">';
 if($row["print_name"] =="")
    {
        echo"<img src=\"../../images/nophoto_large.gif\" onmouseover=\"return prev(this)\" onmouseout=\"UnTip()\"/>";
    }else
        {
        echo'<a href="../products/product.php?id=' . $row['product_id'] . '">';
        echo"<img id='theImg' src=\"../../uploads/".$row['image_name']."\" class=\"display_Image\" onmouseover=\"return prev(this)\" onmouseout=\"UnTip()\"/></a>";
        }
echo'</div>';
//<!-- End of Display Area -->

//<!-- Thumbnail display area -->
echo' <div id="picViewer_Thumbnails">';
echo'   <div id="Div1">';
 if($row["print_name"] =="")
    {
        echo"<img src=\"../../images/nophoto_large.gif\" onmouseover=\"return prev(this)\" onmouseout=\"UnTip()\"/>";
    }else
        {
        echo'<a href="../products/product.php?id=' . $row['product_id'] . '">';
        echo"<img src=\"../../uploads/".$row['image_name']."\" class=\"thumbnail_Portrait\" onmouseover=\"return prev(this)\" onmouseout=\"UnTip()\"/></a>";
        }
echo'   </div>';
        //Thimbnail Images
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
        for($i=0; $i < count($row['image_name']); $i++){
            
echo'   <div id="Div2">';
echo'       <a href="../../uploads/' . $row["image_name"] . '"  >';
echo"       <img src=\"../../uploads/".$row["image_name"]."\" class=\"thumbnail_Portrait\" onmouseover=\"return prev(this)\" onmouseout=\"UnTip()\" /></a>";
echo'   </div>';

            if($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){

echo'   <div id="Div1">';
echo'       <a href="../../uploads/' . $row["image_name"] . '"  >';
echo"       <img src=\"../../uploads/".$row["image_name"]."\" class=\"thumbnail_Portrait\" onmouseover=\"return prev(this)\" onmouseout=\"UnTip()\" /></a>";
echo'   </div>';
            }
        }
        }

echo'</div>';
//<!-- End of thumbnail display area -->

}
 mysqli_free_result ($r);
 mysqli_close($mysqli);
 ?>
  <!-- Start of Footer -->
 <div id="footer2"><a href="../index.php">Home</a></div>
</div>
</body>
</html>