function setPost(id)
{
    expandPost(id, true);
}

function expandPost(id)
{
    expandPost(id, false);
}

function expandPost(id, set)
{
    var post = $('#post' + id.toString());
    if (post.length) {
        var content = post.find('.content');
        var button = post.find('.morecontent .expandpost');
        if (content.length && button.length) {
            if (set || button.val() == 'Less') {
                console.log("shrinking...\n");
                content.css({
                    'height': '16em',
                    'overflow': 'hidden',
                    'mask': 'linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,1)) top, linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,0)) bottom',
                    'mask-size': '100% 50%',
                    'mask-repeat': 'no-repeat'
                });
                button.val("More");
            } else {
                console.log("expanding...\n");
                content.css({
                    'height': 'auto',
                    'overflow': 'unset',
                    'mask': 'none'
                });
                button.val("Less");
            }
        } else {
            console.error('Could not find the content');
        }
    } else {
        console.error('Post with ID ' + id + ' not found');
    }
}