
$(document).ready(function() {
    // alert("afsd");

    // $(".file-preview-frame img").addClass('tht');
    // $(".imgimg").html('<img src="/download/3 - Trip Details.png">');

    // $(".tht").attr('src', '/download/3 - Trip Details.png');


    $(".addsubmit").click(function () {

        // $('.thumbnail img').addClass('thumb');
        // $('.thumb').nailthumb({width:100,height:100});    //convert to thumbnail
        // var source_img_src = $('.thumb').attr('src');
        // resizeBase64Img(source_img_src, 100, 100).then(function (newImg){
        //     $(".thumb").remove();
        //      $(".thumbnail").append(newImg);
        // });
        // $(".thumb").remove();

        // alert($(".file-caption-name").text());

        // e.preventDefault();


            var file_data = $('#file-1').prop('files')[0];
            var img_src = $(".file-caption-name").text();
            var title = $('input[name="title"]').val();
            //var content = $('textarea[name="content"]').val();
            var content = tinyMCE.activeEditor.getContent();
            var category = $("select").val();


            var form_data = new FormData();
            form_data.append('file', file_data);
            form_data.append('img_src', img_src);
            form_data.append('title', title);
            form_data.append('article', content);
            form_data.append('category', category);
            form_data.append('_token', $("input[name='_token']").val());


        $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name=_token]').attr('content')
                }
            });

            $.ajax({
                url: "/admin/news/add", // point to server-side PHP script
                data: form_data,
                type: 'POST',
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData: false,
                success: function(data) {
                    window.location.href = "/admin/news";
                }
            });

        // var img_src = $(".file-caption-name").text();
        // var title = $('input[name="title"]').val();
        // var content = $('textarea[name="content"]').val();
        //
        // $.ajax({
        //     url:"/index/admin/add",
        //     type:"post",
        //     data:{
        //         '_token' : $("input[name='_token']").val(),
        //         'category' : $('select').val(),
        //         'img_src':img_src,
        //         'title':title,
        //         'article':content
        //     },
        //     success:function () {
        //
        //     }

        // });

        // function resizeBase64Img(base64, width, height) {
        //     var canvas = document.createElement("canvas");
        //     canvas.width = width;
        //     canvas.height = height;
        //     var context = canvas.getContext("2d");
        //     var deferred = $.Deferred();
        //     // var imgs;
        //     $("<img/>").attr("src", base64).load(function() {
        //         context.scale(width/this.width,  height/this.height);
        //         context.drawImage(this, 0, 0);
        //         deferred.resolve($("<img/>").attr("src", canvas.toDataURL()));
        //         // imgs = $("<img/>").attr("src");
        //     });
        //     // return imgs;
        //     return deferred.promise();
        // }

    });

    $(".updatesubmit").click(function () {

         // console.log('{!! $data->id !!}');

        var file_data = $('#file-1').prop('files')[0];
        var img_src = $(".file-caption-name").text();
        var title = $('input[name="title"]').val();
        //var content = $('textarea[name="content"]').val();
        var content = tinyMCE.activeEditor.getContent();
        var id = $('input[name="id"]').val();
        var category = $("select").val();

         if (img_src == "" ) {
             // alert('dfa');die();
             img_src = $('input[name="image"]').val();
         }


        var form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('img_src', img_src);
        form_data.append('title', title);
        form_data.append('article', content);
        form_data.append('id',id);
        form_data.append('category', category);
        form_data.append('_token', $("input[name='_token']").val());


        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name=_token]').attr('content')
            }
        });

        $.ajax({
            url: "/admin/news/update", // point to server-side PHP script
            data: form_data,
            type: 'POST',
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            success: function(data) {
                window.location.href = "/admin/news";
            }
        });

        // var img_src = $(".file-caption-name").text();
        // var title = $('input[name="title"]').val();
        // var content = $('textarea[name="content"]').val();
        //
        // $.ajax({
        //     url:"/index/admin/add",
        //     type:"post",
        //     data:{
        //         '_token' : $("input[name='_token']").val(),
        //         'category' : $('select').val(),
        //         'img_src':img_src,
        //         'title':title,
        //         'article':content
        //     },
        //     success:function () {
        //
        //     }

        // });

        // function resizeBase64Img(base64, width, height) {
        //     var canvas = document.createElement("canvas");
        //     canvas.width = width;
        //     canvas.height = height;
        //     var context = canvas.getContext("2d");
        //     var deferred = $.Deferred();
        //     // var imgs;
        //     $("<img/>").attr("src", base64).load(function() {
        //         context.scale(width/this.width,  height/this.height);
        //         context.drawImage(this, 0, 0);
        //         deferred.resolve($("<img/>").attr("src", canvas.toDataURL()));
        //         // imgs = $("<img/>").attr("src");
        //     });
        //     // return imgs;
        //     return deferred.promise();
        // }


    });


});

function contentDel(num) {
    var id = num;

    $.ajax({
        url:"/admin/news/delete",
        type:"post",
        data:{
            id: id,
            _token :$("input[name='_token']").val()
        },
        success:function (data) {

            window.location.reload();

            // window.location.href = "test"

        }


    })


}
