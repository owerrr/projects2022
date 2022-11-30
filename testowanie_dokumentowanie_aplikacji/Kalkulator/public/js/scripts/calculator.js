// stale zdefiniowane zmienne przycisków kalkulatora
const
    button_clear = document.querySelector("#calculator_button_clear"),
    button_off = document.querySelector("#calculator_button_off"),
    button_modulo = document.querySelector("#calculator_button_modulo"),
    button_sqrt = document.querySelector("#calculator_button_sqrt"),
    button_dot = document.querySelector("#calculator_button_dot"),
    button_solve = document.querySelector("#calculator_button_solve"),
    button_substract = document.querySelector("#calculator_button_substraction"),
    button_multiply = document.querySelector("#calculator_button_multiplication"),
    button_divide = document.querySelector("#calculator_button_divide"),
    button_add = document.querySelector("#calculator_button_add"),
    number_0 = document.querySelector("#calculator_number_0"),
    number_1 = document.querySelector("#calculator_number_1"),
    number_2 = document.querySelector("#calculator_number_2"),
    number_3 = document.querySelector("#calculator_number_3"),
    number_4 = document.querySelector("#calculator_number_4"),
    number_5 = document.querySelector("#calculator_number_5"),
    number_6 = document.querySelector("#calculator_number_6"),
    number_7 = document.querySelector("#calculator_number_7"),
    number_8 = document.querySelector("#calculator_number_8"),
    number_9 = document.querySelector("#calculator_number_9"),
    calculator_answer = document.querySelector("#calculator_result_answer");

// zmienne niezbędne do poprawnego działania skryptu
var
    totalAmount = 0,
    buffer = "0",
    prevOperator,
    dotUsed = false,
    enabled = true,
    calculatorButtons = [
        button_clear, button_off, button_modulo, button_sqrt,
        number_7, number_8, number_9, button_substract,
        number_4, number_5, number_6, button_multiply,
        number_3, number_2, number_1, button_divide,
        number_0, button_dot, button_solve, button_add
    ];

// skrypt wykonujący się po pomyślnym załadowaniu strony
window.onload = ()=>{
    console.log("Successfuly loaded calculator script");
    calculator_answer.innerHTML = 0;
    
    LoadButtons();
}

// funkcja wczytująca wszystkie przyciski
function LoadButtons(){
    calculatorButtons.forEach((button)=>{
        button.addEventListener("click", (event)=>{
            UseButton(button);
        })
    })
    console.log("Succesfully loaded buttons")
}

// funkcja wykonująca się po użyciu przycisku
function UseButton(button){
    if(!enabled && button.innerHTML != "C/CE") return;
    btn = button.innerHTML;
    if(isNaN(btn)){
        useSymbol(btn);
    }
    else{
        useNumber(btn);
    }
    calculator_answer.innerHTML = buffer;
}

// funkcja obsługująca przyciski z działaniami
function useSymbol(source){
    switch(source){
        case "C/CE":
            buffer = "0"
            totalAmount = 0;
            enabled = true;
            break;
        case "OFF":
            enabled = false;
            buffer = "";
            break;
        case "=":
            if(prevOperator === null) return;
            operation(parseFloat(buffer));
            prevOperator = null;
            buffer = totalAmount;
            totalAmount = 0;
            break;
        case ".":
            if(!buffer.includes('.')){
                buffer += ".";
            }
            break;
        case "+":
        case "-":
        case "×":
        case "÷":
        case "%":
            calculate(source);
            break;
        case "√":
            buffer = Math.sqrt(parseFloat(buffer));
            totalAmount = 0;
            break;
        default:
            break;
    }
}

// funkcja działająca dla przycisków od 0 do 9
function useNumber(source){
    if(buffer == "0"){
        buffer = source;
    }else{
        buffer += source;
    }
}

// funkcja obsługująca działania
function calculate(source){
    if(buffer == "0") return;
    
    if(totalAmount === 0){
        totalAmount = parseFloat(buffer);
    }else{
        operation(parseFloat(buffer));
    }
    
    prevOperator = source;
    buffer = "0";
}

// funkcja obsługująca działania po użyciu przycisku =
function operation(source){
    switch(prevOperator){
        case "+":
            totalAmount += source;
            break;
        case "-":
            totalAmount -= source;
            break;
        case "×":
            totalAmount *= source;
            break;
        case "÷":
            totalAmount /= source;
            break;
        case "%":
            console.log(totalAmount + " % " + source + " = " + totalAmount%source);
            totalAmount = totalAmount%source;
            break;
        default:
        break;
    }
}