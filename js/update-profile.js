$(document).ready(function(){
    $("#cover-spin").hide(0);
    $('#updateProfile').click(function(){
        var formData = new FormData();
        formData.append('profileImage', $('#profileImage')[0].files[0]);
        formData.append('aadharImage', $('#aadharImage')[0].files[0]);
        formData.append('aadharNumber', $('#aadharNumber').val());
        $.ajax({
            url: './api/profile-update.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                alert(response);
            }
        });
    });
});