let allAnswer =  $('.answer');

const correctAnswer = "answer-1"
const unCorrectAnswer = true;
let currentClicked;




$.each(allAnswer,function(index,value){
    value.addEventListener("click",function(){
        if($(this).attr("data") == "cr"){
            $(this).css('backgroundColor','green')
            $.each(allAnswer,function(index,value){
                if($(this).attr('data') != "cr"){
                    $(this).css('backgroundColor','red')
                }
            })
        } else {
            $(this).css('backgroundColor','red')
            $.each(allAnswer,function(index,value){
                if($(this).attr('data') == "cr"){
                    $(this).css('backgroundColor','green')
                } else {
                    $(this).css('backgroundColor','red')
                }
            })
        }
    })

})




