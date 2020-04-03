$(document).ready(function() {

    $(".toggle").click(function() {
        var text = $(this).text();
        
        if(text == "پنهان") {
            $(this).text("نمایش");
            $(this).parent("div").parent(".menu").children(".menu-body").toggle("slow");
        }
        else {
            $(this).text("پنهان");
            $(this).parent("div").parent(".menu").children(".menu-body").toggle("slow");
        }
    });
  });