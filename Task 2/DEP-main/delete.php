// posts/delete.php
<?php
include '../DEP-main/db.php';
$id = $_POST['id'];
$sql = "DELETE FROM blogsinfo WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
