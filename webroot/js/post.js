function expandPost(id)
{
    var identifier = '.content#' + id.toString();
    var $post = $(identifier);
    if ($post.length) { // Check if the element exists
        console.log('element found: ' + identifier + "\n");
        // var $button = $post.find('expandpost');
        var $button = $('.expandpost');
        if ($button.length) {
            if ($post.css('overflow') == 'hidden') {
                $post.css({
                    'height': 'auto',
                    'overflow': 'unset'
                });
                $button.val("Less");
            } else {
                $post.css({
                    'height': '12.3em',
                    'overflow': 'hidden'
                });
                $button.val("More");
            }
        } else {
            console.error('Could not find the expand button');
        }
    } else {
        console.error('Element with ID ' + id + ' not found');
    }
}