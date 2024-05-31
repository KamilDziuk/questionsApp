
//  function  to google translate start
 googleTranslateElementInit = () =>  {
new google.translate.TranslateElement( 'google_translate_element');
}
// function to google translate end

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
       let test23 = userCardContainer.append(card)
       test23;
      // display downloaded values end

      return { questionsEN: questions.questionsEN, answerTheQuestionEN: questions.answerTheQuestionEN, element: card }
      
    })
  


    /* Search function end */