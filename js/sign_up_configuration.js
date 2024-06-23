$(document).ready(function () {
    $("#cover-spin").hide(0);
    const myOtp = {};
    $('#edit_num').click(function () {
        $("#info_form").show(0);
        $("#verify_form").hide(0);
    })
    $('#sup-but').click(function () {
        $("#cover-spin").show(0);
        const name = $('#fName').val();
        const number = $('#mobNum').val();
        const emailId = $('#email').val();
        const intRegex = /^[6789]\d{9}$/;
        const nameRegx = /^([a-zA-Z ]){2,50}$/;
        const emailRegx = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (name === "" || number === "" || emailId === "") {
            $('#fail').html("Enter All Details");
            $("#cover-spin").hide(0);
            return false;
        } else if (!nameRegx.test(name)) {
            $('#fail').html("Invalid Name");
            $("#cover-spin").hide(0);
            return false;
        } else if (number.length < 10 || number.length > 10) {
            $('#fail').html("Invalid Number");
            $("#cover-spin").hide(0);
            return false;
        } else if (!intRegex.test(number)) {
            $('#fail').html("Invalid Number");
            $("#cover-spin").hide(0);
            return false;
        }
        else if (!nameRegx.test(name)) {
            $('#fail').html("Invalid Name");
            $("#cover-spin").hide(0);
            return false;
        }
        else if (!emailRegx.test(emailId)) {
            $('#fail').html("Invalid Email");
            $("#cover-spin").hide(0);
            return false;
        }
        else {
            $('#ver_num').html(number);
            $('#fail').html(" ");
            myOtp.otp = Math.floor(100000 + Math.random() * 900000);
            $("#cover-spin").hide(0);
            $("#verify_form").show(0);
            $.ajax({
                url: './api/sign_up_api.php',
                method: 'post',
                data: { number: number, email: emailId, otp: myOtp.otp },
                success: function (response) {
                    if (response === '-1') {
                        $('#fail').html("User Already Exists !");
                        $("#info_form").show(0);
                        $("#verify_form").hide(0);
                    }
                    else {
                        alert(myOtp.otp);
                        $("#info_form").hide(0);
                        $("#verify_form").show(0);
                    }
                }
            });
        }
    });

    $('#final_sub').click(function () {
        $("#cover-spin").show(0);
        const name = $('#fName').val();
        const number = $('#mobNum').val();
        const emailId = $('#email').val();
        const subOTP = $('#sub-otp').val();
        if (myOtp.otp == parseInt(subOTP)) {
            $.ajax({
                url: './api/save_signup_info.php',
                method: 'post',
                data: { fName: name, mNumber: number, email: emailId },
                success: function (response) {
                    alert(response);
                    if(response === "0"){
                        alert("Unable to process now. Try after sometime !");
                        $("#cover-spin").hide(0);
                        return false;
                    } else{
                        window.open('home.php', '_self');
                    }
                }
            });
        } else {
            alert("Not verified");
            $("#cover-spin").hide(0);
        }
    });
});