let allAnswer =  $('.answer');

const correctAnswer = "answer-1"
const unCorrectAnswer = true;


for (const answer of allAnswer) {
    answer.addEventListener('click',function(){
        if(answer.id === correctAnswer){
            answer.style.backgroundColor = "green"
        }
        else{
            answer.style.backgroundColor = "red"
        }
        console.log(answer.id)
    })
}


