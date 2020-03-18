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

        if(count[exer] < 5) {

            cloneObj = $(".fields:first").clone();
            count[exer]++;

            // for(var i = 0;i < 3;i++) {

            //     cloneObj.children(".form-group:eq(" + i + ")").children("input").attr("name",exer + fieldsFunc[i] + count[exer]);
            // }

            // cloneObj.appendTo("." + exer);
        }
        else {
            alert("sorry!!");
        }
    }


    $(".addItem").click(function() {
        exer = $(this).attr("title");

        cloning();

    });

});
