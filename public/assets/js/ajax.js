(function () {
    var formOne  = function () {
        var formData = $("#comment-form").serialize();
        $.ajax({ url: '/blog/public/ajax/comment',
            data: formData,
            type: 'post',
            complete: function(output) {
                $('#post-comment').html(output.responseText);
            }
        });
    };

    $(document).ready(function () {
        $("#formOneBtn").on("click", function(e){
            e.preventDefault();
            formOne();
        });

    });
} ()); 