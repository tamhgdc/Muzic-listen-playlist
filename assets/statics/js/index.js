$(document).ready(function() {
    $(".location-tag").click(function() {
        if (!$(this).hasClass("selected")) {
            $(".location-tag").removeClass("selected");
            $(this).toggleClass("selected");
        } else {
            $(this).toggleClass("selected");
        }
    });

    $(".music-tag").click(function() {
        if (!$(this).hasClass("selected")) {
            $(".music-tag").removeClass("selected");
            $(this).toggleClass("selected");
        } else {
            $(this).toggleClass("selected");
        }
    });

    $("#btnPlayNow").click(function() {
        if ($(".location-tag.selected").attr("tag-id") == undefined) {
            alert("Vui lòng chọn địa điểm bạn muốn đến.");
            return;
        }

        if ($(".music-tag.selected").attr("tag-id") == undefined) {
            alert("Vui lòng chọn vào thể loại nhạc muốn nghe.");
            return;
        }

        document.location.href = "" + base_url + "/den-" + $(".location-tag.selected").attr("tag-id") + "-va-nghe-nhac-" + $(".music-tag.selected").attr("tag-id") + ".html";
    });

    /*$("#btnChange").click(function() {
        $("#change-popup").css("display", "block");
        $(".location-tag").removeClass("selected");
        $(".music-tag").removeClass("selected");
    });

    $("#change-close").click(function() {
        $("#change-popup").css("display", "none");
    });*/
});
//facebook apps
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=432569407081588";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));