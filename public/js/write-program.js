$(document).ready(function() {
    var exer;
    var cloneObj;
    let count = [
                    "chest",
                    "biceps",
                    "triceps",
                    "armpit",
                    "shouler",
                    "back",
                    "leg"
                ];

    count["chest"] = count["biceps"] = count["triceps"] = count["armpit"] = count["shouler"] = count["back"] = count["leg"] = 1;


    function cloning() {

        if(count[exer] < 5) {

            cloneObj = $(".fields:first").clone();
            count[exer]++;

            var name = cloneObj.children("input:eq(0)").css("background-color","red");
            // console.log(name);

            cloneObj.appendTo("." + exer);
        }
        else {
            alert("soory!!");
        }
    }


    $(".addItem").click(function() {
        exer = $(this).attr("title");

        cloning();

    });

});
