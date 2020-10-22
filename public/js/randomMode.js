function showMessageInit() {
    var contentBox = document.getElementById("content-box");
    if (contentBox.style.visibility === "hidden") {
        contentBox.style.display = "block";
    } else {
        document.getElementsByClassName("content-box")[0].removeAttribute("id");
    }
}

setTimeout (function() {
    var words = document.getElementById("word");
    words.innerHTML = getRandomWord();

    var secondWord = document.getElementById("secondWord");
    secondWord.innerHTML = getSecondRandomWord();

    var images = document.getElementById("images");
    images.src = getRandomImage();


    showMessageInit();
},10000);

setInterval(function () {
    var words = document.getElementById("word");
    words.innerHTML = getRandomWord();

    var secondWord = document.getElementById("secondWord");
    secondWord.innerHTML = getSecondRandomWord();

    var images = document.getElementById("images");
    images.src = getRandomImage();
}, 30000);

function getRandomWord(){
    const randomWords = Math.floor(Math.random()*(listWords.length));
    return listWords[randomWords];
}

function getSecondRandomWord(){
    const secondRandomWords = Math.floor(Math.random()*(listWords.length));
    return listWords[secondRandomWords];
}

function getRandomImage(){
    const randomImages = Math.floor(Math.random()*(listImages.length));
    return listImages[randomImages];
}
