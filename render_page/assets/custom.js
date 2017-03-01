$(document).ready(function () {

    $(".ekle").click(function () {

        $.post("http://localhost/render_page/welcome/get_render", {}, function (response) {

            $(".liste").html(response);

        })

    })

})