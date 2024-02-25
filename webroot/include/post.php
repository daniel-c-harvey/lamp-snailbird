<?php if (is_null($id) || strlen($name) == 0) { echo "ERROR: POST UNDEFINED"; return; } ?>
<div class="post" id="<?php echo "post$id"; ?>">
    <div class="content">
        <?php include("post/$name.php"); ?>
    </div>
    <div class="morecontent">
        <input  class="expandpost" 
                type="button" 
                name="more" 
                value="More" 
                onclick="expandPost(<?php echo $id; ?>)" />
    </div>
</div>
<script type="text/javascript">
    setPost(<?php echo $id; ?>)
</script>