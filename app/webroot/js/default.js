/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

    if (document.getElementById("mulitplefileuploader") != null) {

        var base = $("#base").val();

        var settings = {
            url: base + "/photos/upload/" + $('#propertie_id').val(),
            method: "POST",
            data: "POST",
            allowedTypes: "jpg,png,gif,bmp",
            fileName: "data[Photo][photo]",
            multiple: true,
            onSuccess: function (files, data, xhr)
            {
                console.log(data);
                $(".myTbody").prepend(data);

            },
            onError: function (files, status, errMsg)
            {
                $("#status").html("<font color='red'>Falha ao realizar o upload!</font>");
            }
        }
        //$(".fileuploader").each(function() { $(this).uploadFile(settings); });
        $("#mulitplefileuploader").uploadFile(settings);
    }

});


