$(document).ready(function() {
    var exer;
    var cloneObj;
    var inputCount = 3;
    var fieldsFunc = [
                        "Name",
                        "Set",
                        "Max"
                    ];
    var count = [
                    "chest",
                    "biceps",
                    "triceps",
                    "armpit",
                    "shouler",
                    "back",
                    "leg"
                ];

    count["chest"] = count["biceps"] = count["triceps"] = count["armpit"] = count["shoulder"] = count["back"] = count["leg"] = 1;


    function cloning() {


        // exer = $(this).attr("exer");

        // if(count[exer] < 5) {

            // cloneObj = $(".fields:first");

            // count[exer]++;

            // for(var i = 0;i < 3;i++) {

            //     cloneObj.children(".form-group:eq(" + i + ")").children("input").attr("name",exer + fieldsFunc[i] + count[exer]);
            // }

            // cloneObj.appendTo("." + exer);
        // }
        // else {
        //     alert("sorry!!");
        // }
    }


    $("[exer]").click(function() {

        cloneObj = $(this).parent().siblings("form:first").children("div:first").clone();
        $(this).parent().siblings("form:first").append(cloneObj);
        // cloning();


    });

    $("[toggle]").click(function() {

        var text = $(this).text();
        
        if(text == "نمایش") {
            $(this).attr("html", "پنهان");
        }
        else {
            $(this).attr("html", "نمایش");
        }

        $(this).parent().siblings("form:first").toggle("slow");
    });

});
