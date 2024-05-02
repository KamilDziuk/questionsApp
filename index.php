<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/script.js" defer>
  </script>
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
<button class="refresh">Questions</button><br><br>
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
 //  Downloading data from the database start  
let questionsApp = <?php echo json_encode($questionsApp);?> 
//  Downloading data from the database end
</script>

 <!-- Search function start  -->

 <div class="search-wrapper">
    <label for="search">Search </label><br>
    <input type="search" id="search" data-search>
  </div>
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