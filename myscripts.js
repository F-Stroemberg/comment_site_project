function checkPasswordMatch() {
    var password = $("#pwd").val();
    var confirmPassword = $("#pwd2").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
}
