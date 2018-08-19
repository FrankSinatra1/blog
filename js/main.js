// Форма регистрации, Ajax
$(function () {
    $('.buttonreg').click(function(e){
        e.preventDefault();
        var fomrSubmit = $.post(
            '../components/reg.php',
            {
                name: $("#name").val(),
                phone: $("#phone").val(),
                email: $("#email").val(),
            }
        ).done(function () {
            $(".wrapper-form").css({
                transition: ".5s",
                opacity: "0"
            });
            setTimeout(function () {
                window.location.href = "../blog.php";
            }, 550)
        })
    });
})


// Форма поиска, Ajax
$(function () {
    $("#search").on('keyup',function(){
        $.get(
            '../components/search.php',
            {
                search_param: $(this).val(),
            },
        ).done(function (e) {
            var results = JSON.parse(e);//"+result['title']+" это означает пересобрать строку дсон в массив чтоб дальше мог с ней нормально работать.
            $('.result-search').empty();
            results.forEach(function(result){
                $('.result-search').append("<a href='' class='flex ourResult'>\
                    <div class='wrapperNewsDay-title'>"+result['title']+"</div>\
                    <div class='wrap-author-date flex'>\
                        <div class='author'><p>"+result['author']+"</p></div>\
                        <div class='date-publish'><p>"+result['datetime']+"</p></div>\
                    </div>\
                    </a>")
            })
            $("#search").addClass("active");
            $(".result-search").addClass("active");
            if ($(".result-search").text() == "" || $("#search").val() == "") {
                $("#search").removeClass("active");
                $(".result-search").removeClass("active");
                $('.result-search').empty();
            }
        })
    });

    $("#search").on('focusout', function() {
        if ($(this).val() == "") {
            $('.result-search').empty();
            $("#search").removeClass("active");
            $(".result-search").removeClass("active");
        }
    });
});