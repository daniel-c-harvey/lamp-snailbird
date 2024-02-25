<div id="main">
    <?php
        // Define valid routes here.  Maybe move to config at some point...
        $valid_pages = [
                        'track/techno-february-2022'
                        ,'square-peg-releases'
                       ];

        // Check for subpage routings first
        if (isset($_GET['page'])) {
            $page = htmlspecialchars_decode($_GET['page']);
            if (in_array($page, $valid_pages, false)) {
                include("include/studio/$page.php");
            }
        } else {
            // Show post feed by default
            $posts = [  
                        // [2, '2024-02-21-REAPER-Looper'],
                       [1, 'square-peg-history']
                     ];

            foreach($posts as $post)
            {
                $id = $post[0];
                $name = $post[1];
                include("include/post.php");
            }
        }
    ?>
</div>