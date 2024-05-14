function calculate(op){
    let num1 = Number(document.getElementById('txt1').value);
    let num2 = Number(document.getElementById('txt2').value);
    let result;
    if(op == '+'){
        result = num1 + num2;
    }
    else if(op == '-'){
        result = num1 - num2;
    }
    else if(op == '*'){
        result = num1 * num2;
    }
    else if(op == '/'){
        result = num1 / num2;
    }
    document.getElementById('lbl1').innerText = result; 
}