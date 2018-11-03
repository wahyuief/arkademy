<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>No. 7 - Buka Toko</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container table-responsive mt-4">
      <table class="table table-striped">
        <tr>
          <th>No</th>
          <th>Product</th>
          <th>Category</th>
        </tr>
        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "bukatoko";
        $conn = new mysqli($hostname, $username, $password, $database);

        $sql = "SELECT products.id, products.name, product_categories.name as category FROM products INNER JOIN product_categories ON products.category_id = product_categories.id;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['category'].'</td>
            </tr>';
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        ?>
      </table>
    </div>
  </body>
</html>
