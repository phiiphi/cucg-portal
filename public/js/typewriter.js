class MovingWords {
    constructor(typingWords, words, waitTime = 3000) {
        this.typingWords = typingWords;
        this.words = words;
        this.text = "";
        this.wordsIndex = 0;
        this.waitTime = parseInt(waitTime, 10);
        this.typing();
        this.isDeleting = false;
    }

    //TYPING METHOD
    typing() {
        const currentIndex = this.wordsIndex % this.words.length; //getting the current array index
        const fullText = this.words[currentIndex]; //getting the full text

        //checking if deleting is occuring
        if (this.isDeleting) {
            this.text = fullText.substring(0, this.text.length - 1);
        } else {
            this.text = fullText.substring(0, this.text.length + 1);
        }

        this.typingWords.innerHTML = `<span class="txt-cursor">${this.text}</span>`; //inserting text into element

        //typing speed
        let typeSpeed = 300;
        if (this.isDeleting) {
            typeSpeed /= 2;
        }

        //if word is complete
        if (!this.isDeleting && this.text === fullText) {
            typeSpeed = this.waitTime; //pause deleting

            this.isDeleting = true;
        } else if (this.isDeleting && this.text === "") {
            this.isDeleting = false;

            this.wordsIndex++; // move to next word

            typeSpeed = 500; //pause before movingword begins again
        }

        setTimeout(() => this.typing(), typeSpeed);
    }
}

//INITIALIZING ON DOM LOAD
document.addEventListener("DOMContentLoaded", init);

//initialise the typewriting
function init() {
    const typingWords = document.querySelector(".text-type");
    const words = JSON.parse(typingWords.getAttribute("data-type"));
    const waitTime = typingWords.getAttribute("data-wait");

    new MovingWords(typingWords, words, waitTime);
}
