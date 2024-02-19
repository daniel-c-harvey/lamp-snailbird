<?php if (is_null($id) || strlen($name) == 0) { echo "ERROR: POST UNDEFINED"; return; } ?>
<div class="post">
    <div class="content" id="<?php echo $id; ?>">
        <?php include("post/$name.php"); ?>
    </div>
    <div class="morecontent">
        <input class="expandpost" type="button" name="more" value="More" onclick="expandPost(<?php echo $id; ?>)" />
    </div>
</div>