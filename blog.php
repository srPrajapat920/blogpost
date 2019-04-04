<?php include_once('db.php'); ?>
<?php $data=get_data('blog');
include_once('header.php');
?>
  <br><br>
    <div class= 'container'>

        <div class='row'>
      <?php for($i=0;$i<count($data);$i++)
      {
        ?>

        <div class='col-sm-4'>
          <img class=" img img-thumbnail img-square" style="width:200px;height:200px;" src='image/<?php echo$data[$i]['image'];?>' />
          <h4><?php echo $data[$i]['title'];?></h4>

          <a href='post.php?id=<?php echo $data[$i]['id'];?>' class='btn btn-primary'>view details</a>
        </div>

    <?php } ?>
  </div>
</div>
