
$.each( $('.answer'),function(index,value){
    value.addEventListener("click",function(){
        if($(this).attr("data") == "cr"){
            $(this).css('backgroundColor','#03C988')
            $.each($('.answer'),function(index,value){
                if($(this).attr('data') != "cr"){
                    $(this).css('backgroundColor','#DF2E38')
                }
            })
        } else {
            $(this).css('backgroundColor','#DF2E38')
            $.each($('.answer'),function(index,value){
                if($(this).attr('data') == "cr"){
                    $(this).css('backgroundColor','#03C988')
                } else {
                    $(this).css('backgroundColor','#DF2E38')
                }
            })
        }
    })

})



//exercise code

let quizExercise = document.getElementById('quiz-exes')

quizExercise.addEventListener('keypress',function(e){
      if(e.key == "Enter"){
        if(quizExercise.value == "txt[0]"){
            $('#correct').removeClass('hidden')
            $('#correct').addClass('block')
        } else {
            $('#incorrect').removeClass('hidden')
            $('#incorrect').addClass('block')
        }
      }
})

let btnHandlerIncorrect = document.querySelector('#btnIncorrect')
let btnHandlerCorrect  = document.querySelector('#btnCorrect')

btnHandlerIncorrect.addEventListener('click',function(){
    $('#incorrect').removeClass('block')
    $('#incorrect').addClass('hidden')
})



btnHandlerCorrect.addEventListener('click',function(){
    $('#correct').removeClass('block')
    $('#correct').addClass('hidden')
})


$('.show-answers').on('click',function(){
    $('#quiz-exes').val('txt[0]')
})


$('.submit-answers').on('click',function(){
    if(quizExercise.value == "txt[0]"){
        $('#correct').removeClass('hidden')
        $('#correct').addClass('block')
    } else {
        $('#incorrect').removeClass('hidden')
        $('#incorrect').addClass('block')
    }
})
