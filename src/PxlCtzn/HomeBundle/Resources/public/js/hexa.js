/**
 * Created by blegrand on 11/08/14.
 */
var _classname = "div.hex";

function fadeOutHexagonExcept($target){
    $(_classname).each(function(index){
        if($target.attr("data-index") != index){
            $(this).addClass("fadeout");
        }else{
            console.log("target :"+$target);
        }
    });
}

function resetHexagon(){
    $(_classname).removeClass("fadeout");
}

$('document').ready(function(){
    console.log($(_classname));
    $(_classname).on("mouseover", function(event){
        console.log("over");
        fadeOutHexagonExcept($(event.target).parent('div.hex'));
    });
    $(_classname).on("mouseout", function(event){resetHexagon()});
});