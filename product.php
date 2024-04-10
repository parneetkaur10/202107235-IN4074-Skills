
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/product.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Apple</title>
        <!--Parneet Kaur ID: 202107235-->
        <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <header>
        <h1> Apple</h1>
        <nav>
            <ul>
                <li class="put"> <a href="index.php"> Home</a></li>
                <li class="put"> <a href="product.php"> Proposal</a></li>
                <li class="put"> <a href="about.php"> More</a></li>
                <li class="put"> <a href="me.html"> info</a></li>
                <li class="put"> <a href="resources.html"> Resources</a></li>
            </ul>
        </nav>
        </header>
<h1> Check out the latest iphone that just hit the market! It's the brand-new iphone release!</h1>
<main>
<div class="proposal">
<section>
<figure><img src="https://images.unsplash.com/photo-1580910051074-3eb694886505?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bW9iaWxlJTIwcGhvbmV8ZW58MHx8MHx8fDA%3D">
<figcaption><strong>Iphone 15 </strong><br>
It's packed with a stunning edge-to-edge display, an advanced camera system for capturing professional-quality photos and videos, and enhanced
FACE ID technology for seamless security.</figcaption>
</figure>
</section>

<section>
<figure><img src="https://images.unsplash.com/photo-1604160687800-f7799a525a33?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8N3w5ODYwNTY1fHxlbnwwfHx8fHw%3D">
<figcaption><strong>Iphone 15 Pro</strong><br>
It is truly a game-changer as it boasts features like ProRAW, Night mode, and Dolby Vision HDR recording.
 It offers enhanced battery life, 5G connectivity, and a sleek design.
</figcaption>
</figure>
</section>

<section>
<figure><img src="https://images.unsplash.com/photo-1697284959152-32ef13855932?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGlwaG9uZSUyMDE1fGVufDB8fDB8fHww">
<figcaption><strong>Iphone 15 Pro Max</strong><br>
It offers an unparalled user experience with increadible features! The A15 Bionic chip inside ensures lightning-fast performance,
making everything from gaming to multitasking a breeze. And let's not forget about advanced triple-camera system.
</figcaption>
</figure>
</section>
</div>
    <h3> You can get more information about our products by clicking below.</h3>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix ">
                    <h2 class="pull left">Details</h2>
                    <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New product</a>
    
                </div>
                <?php
                // Include config file
                require_once "config.php";

                // Attempt select query execution
                $sql = "SELECT * FROM products";
                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>product</th>";
                        echo "<th>color</th>";
                        echo "<th>price</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['product'] . "</td>";
                            echo "<td>" . $row['color'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "<td>";
                            echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                            echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                            echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else {
                   
                    echo "Oops! Something went wrong. Please try again later.";
                }
                //close connection
                mysqli_close($link);  ?>
            </div>
        </div>
    </div>
</div> 
<h3 class="product"> To order anything from above products click here</h3>
<form action="order.php" method="POST">
  <input type="checkbox" name="products[]" value="iphone11"> iphone11<br>
  <input type="checkbox" name="products[]" value="iphone12"> iphone12<br>
  <input type="checkbox" name="products[]" value="iphone13"> iphone13<br>
  <input type="checkbox" name="products[]" value="iphone14"> iphone14<br>
  <input type="checkbox" name="products[]" value="iphone15"> iphone15<br>
  <input type="checkbox" name="products[]" value="Airpods 1st"> Airpods 1st<br>
  <input type="checkbox" name="products[]" value="Airpods 2nd"> Airpods 2nd<br>
  <input type="checkbox" name="products[]" value="ipad Mini"> ipad Mini<br>
  <input type="checkbox" name="products[]" value="ipad Pro"> ipad Pro<br>
  <input type="checkbox" name="products[]" value="Macbook Air"> Macbook Air<br>
  <input type="checkbox" name="products[]" value="Macbook Pro"> Macbook Pro<br>
  <input type="checkbox" name="products[]" value="iwatch"> iwatch<br>

  <input type="submit" value="Submit">
</form>
</main>
</body>
</html>