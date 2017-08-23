/*
 * Copyright (c) 2016. McIsah Co.
 * This is a project from the McIsah Co. Company.
 * With All Rights Reserved.
 */

/**
 * Created by michaelisah on 3/21/16.
 */


function column_1(){
    var board_1, column_1_trigger;
    board_1 = document.getElementById("board_1");
    column_1_trigger = document.getElementById('column_1_trigger').innerHTML;
    switch(column_1_trigger){
        case "1_1":
            board_1.style.webkitTransform = "translateY(-500px)";
            board_1.style.transform = "translateY(-500px)";
            column_1_trigger = "1_2";
            break;
        case "1_2":
            board_1.style.webkitTransform = "translateY(-1000px)";
            board_1.style.transform = "translateY(-1000px)";
            column_1_trigger = "1_3";
            break;
        case "1_3":
            board_1.style.webkitTransform = "translateY(0px)";
            board_1.style.transform = "translateY(0px)";
            column_1_trigger = "1_1";
            break;
    }
}

function column_2(){
    var board_2, column_2_trigger;
    board_2 = document.getElementById("board_2");
    column_2_trigger = document.getElementById('column_2_trigger').innerHTML;
    switch(column_2_trigger){
        case "2_1":
            board_2.style.webkitTransform = "translateY(-500px)";
            board_2.style.transform = "translateY(-500px)";
            column_2_trigger = "2_2";
            break;
        case "2_2":
            board_2.style.webkitTransform = "translateY(-1000px)";
            board_2.style.transform = "translateY(-1000px)";
            column_2_trigger = "2_3";
            break;
        case "2_3":
            board_2.style.webkitTransform = "translateY(0px)";
            board_2.style.transform = "translateY(0px)";
            column_2_trigger = "2_1";
            break;
    }
}

function column_3(){
    var board_3, column_3_trigger;
    board_3 = document.getElementById("board_3");
    column_3_trigger = document.getElementById('column_3_trigger').innerHTML;
    switch(column_3_trigger){
        case "3_1":
            board_3.style.webkitTransform = "translateY(-500px)";
            board_3.style.transform = "translateY(-500px)";
            column_3_trigger = "3_2";
            break;
        case "3_2":
            board_3.style.webkitTransform = "translateY(-1000px)";
            board_3.style.transform = "translateY(-1000px)";
            column_3_trigger = "3_3";
            break;
        case "3_3":
            board_3.style.webkitTransform = "translateY(0px)";
            board_3.style.transform = "translateY(0px)";
            column_3_trigger = "3_1";
            break;
    }
}

var newsletter = document.getElementById("newsletter_panel");

function news_l(){
    newsletter.style.overflow = "visible";
}

function news_l_off(){
    newsletter.style.overflow = "hidden";
}

function slide_board_engine(){
    setInterval(column_1, 4000);
    setInterval(column_2, 5000);
    setInterval(column_3, 4500);
}

function topper() {
    $('#wrapper').animate({
        scrollTop: 0
    }, 500);
}

function agree_form() {
    var sumbit_button, agree_box;
    submit_button = document.alumni_reg.Submit;
    agree_box = document.alumni_reg.Agree;
    if (agree_box.getAttribute("checked") != "checked"){
        agree_box.setAttribute("checked", "checked");
        submit_button.removeAttribute("disabled");
    }else{
        agree_box.removeAttribute("checked");
        submit_button.setAttribute("disabled", "disabled");
    }
}

function about_tracker() {
    $('#wrapper').animate({
        scrollTop: $("#people").offset().top
    }, 1000);
}


