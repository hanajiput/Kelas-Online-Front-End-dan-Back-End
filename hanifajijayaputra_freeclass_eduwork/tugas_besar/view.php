<?php 
if(empty($_GET['id'])){ 
    header("Location: manage.php"); 
} 
 
// Include and initialize DB class 
require_once 'DB.class.php'; 
$db = new DB(); 
 
$conditions['where'] = array( 
    'id' => $_GET['id'], 
); 
$conditions['return_type'] = 'single'; 
$galData = $db->getRows($conditions); 
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script>
        function deleteImage(id){
            var result = confirm("Are you sure to delete?");
            if(result){
                $.post( "postAction.php", {action_type:"img_delete",id:id}, function(resp) {
                    if(resp == 'ok'){
                        $('#imgb_'+id).remove();
                        alert('The image has been removed from the gallery');
                    }else{
                        alert('Some problem occurred, please try again.');
                    }
                });
            }
        }
        </script>



</head>
<body>

<div class="container">
    <h1>Katalog</h1>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h5><?php echo !empty($galData['title'])?$galData['title']:''; ?></h5>
    		
            <?php if(!empty($galData['images'])){ ?>
                <div class="gallery-img">
                <?php foreach($galData['images'] as $imgRow){ ?>
                    <div class="img-box" id="imgb_<?php echo $imgRow['id']; ?>">
                        <img src="uploads/images/<?php echo $imgRow['file_name']; ?>">
                        <a href="javascript:void(0);" class="badge badge-danger" onclick="deleteImage('<?php echo $imgRow['id']; ?>')">delete</a>
                    </div>
                <?php } ?>
                </div>
            <?php } ?>
        </div>
        <a href="index.php" class="btn btn-primary">Back to List</a>
    </div>
</div>





</body>
</html>