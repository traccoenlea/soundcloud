$(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container');

$(document).ready(function(){
    $(".chanson").click(function(e) {
        e.preventDefault();
        let audio = $("#audio");
        let f=$(this).attr("data-file");
        console.log(f); //verif
        audio[0].src = f;
        audio[0].play();
    });

    $('#search').submit(function (e) {
        e.preventDefault();
        window.location.href="/recherche/"+e.target.elements[0].value;
    });

    $("#testAjax").click(function(e) {
        e.preventDefault();

        $.ajax({
            type: "GET",
            url : "/testAjax",
            success: function (data, textStatus, jqXHR) {
                $("#aremplir").html(data);
            },
            error:function (jqHXR, textStatus, errorThrown) {
            }
        });
    });
});