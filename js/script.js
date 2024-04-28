

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



// Method post start
document.querySelector('.submit').addEventListener('click', function() {
    if(passwordInput.value == "")
    {
    passwordAlert.style.color = "red";
    passwordAlert.innerHTML = "You have not entered your password or you entered the wrong password";
    }
   
    else if (passwordInput.value == "" ){
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
});
// Method post end

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