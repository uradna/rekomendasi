$('#togmenu').click(function () {

    if (sessionStorage.getItem("__MENU_MODE__") === "default") {
        sessionStorage.setItem("__REKOM_CONFIG__",
            '{"theme":"light","nav":"vertical","layout":{"mode":"detached","position":"fixed"},"topbar":{"color":"brand"},"menu":{"color":"light"},"sidenav":{"size":"condensed","user":false}}'
        );
        sessionStorage.setItem("__MENU_MODE__", "condensed");
        $('#flipmenu').addClass('mdi-flip-h');
    } else {
        sessionStorage.setItem("__REKOM_CONFIG__",
            '{"theme":"light","nav":"vertical","layout":{"mode":"detached","position":"fixed"},"topbar":{"color":"brand"},"menu":{"color":"light"},"sidenav":{"size":"default","user":false}}'
        );
        sessionStorage.setItem("__MENU_MODE__", "default");
        $('#flipmenu').removeClass('mdi-flip-h');
    }
});



// $('#help').click(function () {
// });
// mdi - flip - h
