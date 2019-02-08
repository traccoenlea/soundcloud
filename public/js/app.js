$(document).ready(function(){
    $(".chanson").click(function(e) {
        e.preventDefault();
        let audio = $("#audio");
        let f=$(this).attr("data-file");
        console.log(f); //verif
    })
});