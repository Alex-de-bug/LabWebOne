function showValueX(value) {
    var resultDiv = document.querySelector(".result_X");
    resultDiv.innerHTML = "X = "+value;
    var form = document.querySelector("#param_x");
    form.value = value;
}
function showValue(value) {
    var resultDiv = document.querySelector(".result_R");
    resultDiv.innerHTML = "R = "+value;
    var form = document.querySelector("#param_r");
    form.value = value;
}