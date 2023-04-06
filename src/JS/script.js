// Registration Function 
$(document).ready(function(){
    $("#register").click(function(){
        let name = $("#name").val()
        let mail = $("#mail").val()
        let pass = $("#pass").val()
        let r_pass = $("#r_pass").val()
        if (name && mail && pass && r_pass){
            if (pass == r_pass) {
                $.ajax({
                    type: "POST",
                    url: "/registration.php",
                    data: {"name":name,"mail":mail,"password":pass},
                    dataType: "text",
                  }).done(function (result){
                    if (result == "success") {
                        window.location.href = "http://localhost:8080/login.php";
                    }
                    else{
                        $("#error").html("Error To Sending Data in Database");
                    }
                });
            }
            else{
                $("#error").html("Password do not match");
            }
        }
        else{
            $("#error").html("Fill All Inputs");
        }
    })
})

// Login Function 
$(document).ready(function(){
    $("#login").click(function(){
        let mail = $("#log_mail").val()
        let pass = $("#log_pass").val()
        if (mail && pass){
            $.ajax({
                type: "POST",
                url: "/login_sql.php",
                data: {"mail":mail,"password":pass},
                dataType: "text",
            }).done(function (result){
                if (result == "success") {
                    // console.log("Data Matched");
                    window.location.href = "http://localhost:8080/after_login.php";
                }
                else{
                    $("#error_log").html("Invalid Id or Password");
                    console.log("Data Do not Matched");
                }
            });
        }
        else{
            $("#error_log").html("Fill All Inputs");
            console.log("Fill All Inputs");
        }
    })
})

// Display Page Function 
function display() {
    $.ajax({
        type: "POST",
        url: "/display_data.php",
        dataType: "text",
    }).done(function (result){
        $("#table_body").html(result)
    })
}
display()