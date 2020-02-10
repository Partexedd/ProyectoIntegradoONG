$(".showAdminForm").click(function(){
    $(".user-login").hide();
    $(".admin-login").show();
    $(".user-login").append('<style type="text/css">@media (max-width: 575.98px) {.login .form .signup { top: 200px;}}</style>')
})

$(".showUserForm").click(function(){
    $(".admin-login").hide();
    $(".user-login").show();
    $(".user-login").append('<style type="text/css">@media (max-width: 575.98px) {.login .form .signup { top: 150px;}}</style>')
})