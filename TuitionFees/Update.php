<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="teat.css">
        <script src="teat.js"></script>
        <title>联华学校</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<div Class="titel1"><!-- <ក្បាលលើ>បើក -->
  <center>
    <h1 class="font1">联华学校</h1>
    <h1 class="font2">សូមកែប្រែទិន្នន័យគ្រូបង្រៀនដោយប្រុងប្រយ័ត្ន</h1>
  </center>
  </div><!-- <ក្បាលលើ>បិទ -->
<?php
  // Create database connection
  include '../connect_SPL/connect_SPL.php';

  // Initialize message variable
  $msg = "";

  // Check if update button is clicked
  if (isset($_POST['update'])) {
    // Get image ID and updated text
    $id = $_POST['id'];
    $updated_text = mysqli_real_escape_string($con, $_POST['updated_text']);

    // Check if a new image is uploaded
    if ($_FILES['new_image']['size'] > 0) {
      // Get new image name and directory
      $new_image = $_FILES['new_image']['name'];
      $target = "images/" . basename($new_image);

      // Update image and text in database
      $sql_update = "UPDATE images SET image='$new_image', text='$updated_text' WHERE ID=$id";
      mysqli_query($con, $sql_update);

      // Move uploaded file to target directory
      move_uploaded_file($_FILES['new_image']['tmp_name'], $target);

      $msg = "Image and text updated successfully";
    } else {
      // Only update text if no new image is uploaded
      $sql_update = "UPDATE images SET text='$updated_text' WHERE ID=$id";
      mysqli_query($con, $sql_update);

      $msg = "Text updated successfully";
    }
  }

  // Fetch image data based on ID
  if (isset($_GET['updateid'])) {
    $update_id = $_GET['updateid'];
    $result_update = mysqli_query($con, "SELECT * FROM images WHERE ID=$update_id");
    $row_update = mysqli_fetch_array($result_update);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Image and Text</title>
</head>
<div class="add2"><!-- <class="add1">បើក -->
  <div class="ddd1"><!-- <class="ddd1">បើក -->
<body class="body1">
<center>
  <div>
    <h2>Update Image and Text</h2>
    <form method="POST" action="" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row_update['ID']; ?>">
      <div>
        Old Image:
        <br>
        <img src="images/<?php echo $row_update['image']; ?>" width="300" height="300">
      </div>
      <div>
        New Image:<br>
        <input class="btn btn-primary" type="file" name="new_image">
      </div>
      <div>
        <textarea name="updated_text" cols="40" rows="4" placeholder="Enter updated text"><?php echo $row_update['text']; ?></textarea>
      </div>
      <a href="AddTuitionFees.php" class="text-light"><input class="btn btn-danger" style="width:500px;height:50px;" value="BACK"></a>
      <button style="width:500px;height:50px;" class="btn btn-primary" type="submit" onclick="alert('Update Successfully!!!')" name="update">Update</button>
      <p><?php echo $msg; ?></p>
    </form>
  </div>
</center>
</body>
</div><!-- <class="ddd1">បិទ -->
</div><!-- <class="add1">បិទ -->
</html>
