// $(document).ready(function () {
//     test()
// });
// function test() {
//     $.ajax({
//         type: 'GET',
//         url: 'http://localhost:8888/admin/orders/status/1',
//         success: function (response) {
//             console(response)
//         }
//     })
// }
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    if ($('#url')[0]) {
        var url = document.getElementById("url").value;
    }
    //var url = document.getElementById("url").value;
    console.log(url);
    showPost(url);

    $('#postBtn').click(function () {
        var post = $('#post').val();
        var login = $('#check').val();
        //console.log(post);
        if (post == '') {
            alert('Please write a Post first!');
            $('#post').focus();
        }
        else if (login == '') {
            alert('vui lòng đăng nhập');
            $('#post').focus();
        }
        else {
            var postForm = $('#postForm').serialize();//day chuyeen qua Api 
            console.log(postForm);
            $.ajax({
                type: 'POST',
                url: '/post',
                data: postForm,
                dataType: 'json',
                error: function (xhr, status, error) {
                    //ko co reéespoónibe, nen untiìiedd
                    var err = eval("(" + xhr.responseText + ")");
                    console.log(xhr, status, error);
                    alert("faledd", err.Message);
                },
                success: function () {
                    showPost(url);
                    $('#postForm')[0].reset();
                },
            });
        }
    });

});

function showPost($url1) {
    $.ajax({
        url: $url1,
        success: function (data) {
            $('#postList').html(data);
        },
    });
}

function getComment(id) {
    $.ajax({
        url: 'getcomment',
        data: { id: id },
        success: function (data) {
            $('#comment_' + id).html(data);
        }
    });
}