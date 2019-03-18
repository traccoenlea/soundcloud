
$(document).ready(function(){
    //$(document).pjax('[data-pjax-toggle] a, a[data-pjax-toggle]', '#pjax-container', {push : false});
    $(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container');

    $(document).on('submit', 'form[data-pjax]', function(event) {
       $.pjax.submit(event, '#pjax-container')
    });

    $(".chanson a").click(function(e) {
        e.preventDefault();
        let audio = $("#audio");
        console.log($(this));
        let f= $(this).attr("data-file");
        console.log(f); //verif
        audio[0].src = f;
        audio[0].play();
    });

    $('#search').submit(function (e) {
        e.preventDefault();
        if($.support.pjax)
            $.pjax({url: "/recherche/" +e.target.elements[0].value, container: "#pjax-container"});
        else
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


    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }



});