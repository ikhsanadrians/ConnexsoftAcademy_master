
$.each( $('.answer'),function(index,value){
    value.addEventListener("click",function(){
        if($(this).attr("data") == "cr"){
            $(this).css('backgroundColor','green')
            $.each($('.answer'),function(index,value){
                if($(this).attr('data') != "cr"){
                    $(this).css('backgroundColor','red')
                }
            })
        } else {
            $(this).css('backgroundColor','red')
            $.each($('.answer'),function(index,value){
                if($(this).attr('data') == "cr"){
                    $(this).css('backgroundColor','green')
                } else {
                    $(this).css('backgroundColor','red')
                }
            })
        }
    })

})




