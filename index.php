<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/script.js" defer></script>
<!-- path to google translate start -->
<script type="text/javascript"
src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- path to google translate end -->
<title>Questionapp</title>


</head>
<body>  

<!-- elemnt  to google translate start -->
<div id="google_translate_element"></div>
<!-- elemnt  to google translate end -->
<br>
<!-- Displaying the length of Question App start -->
Number of total questions: <div class="lengthApp"></div>
<!-- Displaying the length of Question App end -->

<!-- form for adding questions and answers start -->
<input class="id" type="number" placeholder="Id"><br>
<input class="questionsEN" type="text" placeholder="Questions"><br>
<input class="answerTheQuestionEN" type="text" placeholder="Answer"><br><br>
<button class="submit">Sent</button><br><br>
<!-- form for adding questions and answers end -->

<!-- View questions and answers start -->
<button class="questions">Questions</button><br><br>
<button class="answer">Answer</button><br><br>
<div class="contentOne"></div><br>
<div class="contentTwo"></div><br><br>

Before adding another item, you must enter your password <input class="passwordInput" type="password" placeholder="Password"><br><br>
<div class="passwordAlert"></div>
<!-- View questions and answers end -->
<?php
require_once 'configFunction.php';
?>

<script>
let questionsApp = <?php echo json_encode($questionsApp);?>;
</script>
<script>



function QuestionAndAnswerApp()
{
this.id = document.querySelector('.id');
this.questionsEN = document.querySelector('.questionsEN');
this.answerTheQuestionEN = document.querySelector('.answerTheQuestionEN');
this.submit = document.querySelector('.submit');
this.contentOne = document.querySelector('.contentOne');
this.contentTwo = document.querySelector('.contentTwo');  
this.questions = document.querySelector('.questions');
this.answer = document.querySelector('.answer');
this.lengthApp = document.querySelector('.lengthApp');
this._questionsApp = <?php echo json_encode($questionsApp);?>;
this.lengthApp = document.querySelector('.lengthApp');
this.passwordAlert = document.querySelector('.passwordAlert');
this.passwordInput = document.querySelector('.passwordInput');

this.sendContent = () =>
{

  this.submit.addEventListener('click', () =>
  {
      this.contentQuestionsApp();
  })
};

this.contentQuestionsApp = () =>
{
  if(this.passwordInput.value == "")
    {
      this.passwordAlert.style.color = "red";
      this. passwordAlert.innerHTML = "You have not entered your password or you entered the wrong password";
    }
    else if (this.passwordInput.value == ""){
      this.passwordAlert.style.color = "green";
      this.passwordAlert.innerHTML = `Password correct! <br> You have added a new pose from the list`;
        
    
  let questionsAppData = {
id: this.id.value,
questionsEN: this.questionsEN.value,
answerTheQuestionEN: this.answerTheQuestionEN.value
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
        this.passwordAlert.style.color = "red";
        this.passwordAlert.innerHTML = "You have not entered your password or you entered the wrong password";
    }
}

this.lengthTable = () =>
{
  return this.lengthApp.innerHTML = this._questionsApp.length + 3;   
};

this.questionButton = () =>
{
 

  this.questions.addEventListener('click', () =>
{  
  if(this.contentOne.style.display == "none")
  {
  this.drawStart = () =>{
  this.draw = this._questionsApp[Math.floor(Math.random() * this._questionsApp.length)];
   return this.draw.questionsEN;
  }

 
    this.contentOne.style.display = "block";
    this.contentOne.innerHTML =  this.drawStart();
  }
  else
  {
    this.contentOne.style.display = "none";
  }
 
     
})
};



this.answerButton = () =>
{



  this.answer.addEventListener('click', () =>
{
  if(this.contentTwo.style.display == "none")
  {
    this.contentTwo.style.display = "block";
  this.questionButton();
      this.contentTwo.innerHTML = this.draw.answerTheQuestionEN;
  }
  else
  {
    this.contentTwo.style.display = "none";
  }

})
};

}

let resultsQuestionsApp = new QuestionAndAnswerApp();

resultsQuestionsApp.lengthTable();
resultsQuestionsApp.questionButton();
resultsQuestionsApp.answerButton();
resultsQuestionsApp.sendContent();


</script>

 <!-- Search function start  -->

 <div class="search-wrapper">
    <label for="search">Search </label><br>
    <input type="search" id="search" data-search></div>
  <div class="questions-cards" data-questions-cards-container></div>
  <template data-questions-template>
    <div class="card">
      <div class="header" data-header></div>
      <div class="body" data-body></div>
    </div>
  </template>
   <!-- Search function end  -->

</body>
</html>