$(window).resize(function () {
    var path = $(this);
    var contW = path.width();
    if (contW >= 769) {
        $("#navbarVertical").css("display", "block");
    } else {
        $("#navbarVertical").css("display", "none");
    }
});

$(document).ready(function () {
    $(".navi-toogle-btn").click(function (e) {
        e.preventDefault();
        var marginLeft = $("#navbarVertical").css("display");
        if (marginLeft === "block") {
            $("#navbarVertical").css("display", "none");
        } else {
            $("#navbarVertical").css("display", "block");
        }
    });

    $("#sidebarAvatar").click(function (e) {
        e.preventDefault();
        $(".dropdown-menu ").toggle(200);
    });
});
