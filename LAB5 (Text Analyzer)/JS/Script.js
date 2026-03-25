function analyzeText(){

    let text = document.getElementById("inputText").value;

    if(text.trim() === ""){
        document.getElementById("result").innerHTML = "Please enter some text.";
        return;
    }

    let charCount = text.length;

    let words = text.trim().split(" ");
    let wordCount = words.length;

    let reversedText = text.split("").reverse().join("");

    document.getElementById("result").innerHTML =
        "<b>Total Characters:</b> " + charCount + "<br>" +
        "<b>Total Words:</b> " + wordCount + "<br><br>" +
        "<b>Reversed Text:</b><br>" + reversedText;
}