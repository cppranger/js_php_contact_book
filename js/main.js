jQuery(document).ready(function() {
    jQuery(".button").bind("click", function() {

        // READING INFO FROM FIELDS
        var name = jQuery('.nameField').val();
        var tel = jQuery('.telField').val();

        // CHICKING IF THERE IS NO DATA

        if (!((name == "") || (tel == ""))) {
            // SENDING TO SERVER
            jQuery.ajax({
                url: "for_db.php",
                type: "POST",
                data: {
                    name:name, 
                    tel:tel
                }, 
                dataType: "json",
                success: function(result) {
                    return false;
                }
            });
            alert('Данные приняты!');
            location.reload();
        return false;
        };
    });

    jQuery(".del_button").bind("click", function() {

        // READING INFO FROM FIELDS
        var id = $(this).attr('id');
        console.log(id);

        // CHICKING IF THERE IS NO DATA
            // SENDING TO SERVER
            jQuery.ajax({
                url: "for_db_delete.php",
                type: "POST",
                data: {
                    id:id
                }, 
                dataType: "json",
                success: function(result) {
                    return false;
                }
            });
            alert('Данные удалены!');
            location.reload();
        return false;
    });
});