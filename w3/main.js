function Result() {
    result = 0;
    a = parseInt(document.getElementById('num1').value)
    b = parseInt(document.getElementById('num2').value)
    if(document.getElementById('Cong').checked) {
        result = a + b
    } else if(document.getElementById('Tru').checked) {
        result = a - b
    } else if(document.getElementById('Nhan').checked) {
        result = a * b
    } else if(document.getElementById('Chia').checked) {
        result = a / b
    }
    document.getElementById('kq').innerHTML = result;
}