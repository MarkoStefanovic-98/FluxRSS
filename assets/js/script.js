$(document).ready(function(){

    $(".delete-flux").click(function() {
        $("#modal-text").html("Voulez-vous supprimer ce flux " + $(this).html() + "?");
        $("#yes").attr("href", "index.php?p=deleteflux&id=" + $(this).attr("id"));
        $("#myalertbox").modal({
            "keyboard": true,
            "show": true
        });
    });

});