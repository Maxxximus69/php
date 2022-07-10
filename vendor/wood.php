<?php
 session_start();
require_once 'connect.php';
// if (!$_SESSION['user']){
//     header('Location: /');
// }
$result=mysqli_query($connect,"SELECT * FROM  categories");

if   (mysqli_num_rows($result) > 0){
    $cats = array();

    while($cat =  mysqli_fetch_assoc($result)){
        $cats_ID[$cat['id']][] = $cat;
        $cats[$cat['parent_id']][$cat['id']] =  $cat;
    }
}
function build_tree($cats,$parent_id,$only_parent = false){
    if(is_array($cats) and isset($cats[$parent_id])){
        $tree = '<ul>';
        if($only_parent==false){
            foreach($cats[$parent_id] as $cat){
                $tree .= '<li>'.$cat['name'].' #'.$cat['id'];
                $tree .=  build_tree($cats,$cat['id']);
                $tree .= '</li>';
            }
        }elseif(is_numeric($only_parent)){
            $cat = $cats[$parent_id][$only_parent];
            $tree .= '<li>'.$cat['name'].' #'.$cat['id'];
            $tree .=  build_tree($cats,$cat['id']);
            $tree .= '</li>';
        }
        $tree .= '</ul>';
    }
    else return null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>Admin page</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
build_tree($cats,0);
?>
<h3>Add new product</h3>
<form action="/vendor/add.php" method="post">
    <input type="text" name="title"><br>
    <input type="hidden" name="parent_id" value="$id">
    <button type="submit">Add</button><br>
</form>
<form action="/vendor/delete.php" method="post">
<input type="hidden" name="parent_id" value="$id">
<button type="submit">Delete</button><br>
</form>
<form><a href="/vendor/logout.php" class="logout">Exit</a>
</form>
</form>
</body>
</html>
