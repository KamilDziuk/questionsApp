

let lengthApp = document.querySelector('.lengthApp');
let questionsEN = document.querySelector('.questionsEN');
let answerTheQuestionEN = document.querySelector('.answerTheQuestionEN');
let passwordInput = document.querySelector('.passwordInput');
let refresh = document.querySelector('.refresh');
let answer = document.querySelector('.answer');
let contentOne = document.querySelector('.contentOne');
let contentTwo = document.querySelector('.contentTwo');
let contentQuestionEN = document.querySelector('.contentQuestionEN');
let id = document.querySelector('.id');
let passwordAlert = document.querySelector('.passwordAlert');




// let array1 = [1, 2, 3];

// console.log(array1.includes(2));


// let pets = ['cat', 'dog', 'bat'];

// console.log(pets.includes('cat'));


// console.log(pets.includes('at'));



// search.addEventListener("input", e => {

// let value = e.target.value



// let reservationTimesRes = questionsApp.filter(questionsApp =>   questionsApp.id == 1 );




//     reservationTimesRes.forEach(reservationTimesRes =>
//   {
//     let reservationTimesResOneAll = JSON.stringify(reservationTimesRes.questionsEN).toLowerCase()
   

//     test.innerHTML = ""

//         if (  reservationTimesResOneAll.includes(value))
//         {
//             test.innerHTML = reservationTimesResOneAll
//         }
    
        
//         else
//         {
//             test.innerHTML = ""
//         }
// })


// })









// let value = e.target.value







// Method post nad password encryption start
document.querySelector('.submit').addEventListener('click', function() {
    if(passwordInput.value == "")
    {
    passwordAlert.style.color = "red";
    passwordAlert.innerHTML = "You have not entered your password or you entered the wrong password";
    }
    else if (passwordInput.value == "Laramakota1212"){
        passwordAlert.style.color = "green";
        passwordAlert.innerHTML = `Password correct! <br> You have added a new pose from the list`;
        
    
let questionsAppData = {
id: id.value,
questionsEN: questionsEN.value,
answerTheQuestionEN: answerTheQuestionEN.value
};
let formData = new FormData();
for(let key in questionsAppData) {
formData.append(key, questionsAppData[key]);
}
 fetch('refreshment.php', {
method: 'POST',
body: formData
})
.then(response => response.text())
.then(data => {

console.log(data);
})
.catch(error => {
console.error('Error:', error);
});
    }
    else{
        passwordAlert.style.color = "red";
        passwordAlert.innerHTML = "You have not entered your password or you entered the wrong password";
    }
});

// Method post nad password encryption end

//  function  to google translate start
 googleTranslateElementInit = () =>  {
new google.translate.TranslateElement( 'google_translate_element');
}
// function to google translate end

//question and answer randomization functione start
let randomQuestion;
lengthApp.innerHTML = questionsApp.length + 3;
randomQuestionFunction = () =>
{

refresh.addEventListener('click', function() {   
randomQuestion = questionsApp[Math.floor(Math.random() * questionsApp.length)];
contentOne.innerHTML = randomQuestion.questionsEN;

}) 
};
questionFunction = () =>
randomQuestionFunction();
{
answer.addEventListener('click', function() {
contentTwo.innerHTML = randomQuestion.answerTheQuestionEN;
}); 
}
questionFunction();
//question and answer randomization functione end





  /* Search function start */

  let search = document.querySelector(".search-wrapper")
let userCardTemplate = document.querySelector("[data-questions-template]")
let userCardContainer = document.querySelector("[data-questions-cards-container]")
let searchInput = document.querySelector("[data-search]")

// new table start
let questions = []
// new table end
searchInput.addEventListener("input", e => {
  // Capturing what is entered in the field start
  let value = e.target.value.toLowerCase()
    // Capturing what is entered in the field end
  questions.forEach(questions => {
    let isVisible =
    // checking whether a given value exists start
    questions.questionsEN.toLowerCase().includes(value) ||
    questions.answerTheQuestionEN.toLowerCase().includes(value)
     // checking whether a given value exists end
    // Hide those items that do not match the given value start
    questions.element.classList.toggle("hide", !isVisible)
       // Hide those items that do not match the given value end
   
  })

})

// card.style.display = "none";
    questions = questionsApp.map(questions => {
      // Calling the child of the root node start
      let card = userCardTemplate.content.cloneNode(true).children[0]
       // Calling the child of the root node end
      let header = card.querySelector("[data-header]")
      let body = card.querySelector("[data-body]")
      header.textContent = questions.questionsEN
      body.textContent = questions.answerTheQuestionEN
      // display downloaded values start
      userCardContainer.append(card)
      // display downloaded values end

      return { questionsEN: questions.questionsEN, answerTheQuestionEN: questions.answerTheQuestionEN, element: card }
    })
    /* Search function end */