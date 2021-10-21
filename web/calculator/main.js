function getHistory(){
    return document.getElementById("history-value").innerText;
}

function printHistory(num){
     document.getElementById("history-value").innerText=num;
}
printHistory("9*9+9");