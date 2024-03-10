<div id="main">
    <?php
        // Define valid routes here.  Maybe move to config at some point...
        $valid_pages = [
                        'labhome',
                        'snailbirdjsfx'
                       ];

        // Check for subpage routings first
        if (isset($_GET['page'])) {
            $page = htmlspecialchars_decode($_GET['page']);
            if (in_array($page, $valid_pages, false)) {
                include("include/lab/$page.php");
            }
        } else {
            // Show lab home by default
            include("include/lab/labhome.php");
        }
    ?>
</div>