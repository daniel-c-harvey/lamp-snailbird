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
            $posts = [
                'live-jam-2024-03-23',
                'live-jam-2024-03-24',
                'live-jam-broadcast-test-2024-03-17',
                'live-jam-2024-03-09',
                'live-jam-2024-02-11',
                'square-peg-history'
            ];
            
            // check for post routings next
            if (isset($_GET['post'])) {
                $post = htmlspecialchars_decode($_GET['post']);
                if (in_array($post, $posts, false)) {
                    $id = 1;
                    $name = $post;
                    include("include/post.php");
                }
            } else {
                // Show post feed by default
                $id = 1;
                foreach($posts as $post)
                {
                    $name = $post;
                    include("include/post.php");
                    $id += 1;
                }
            }
        }
    ?>
</div>