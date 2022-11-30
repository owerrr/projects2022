# Kalkualtor w HTML
Został on opisany w kodzie poszczególnych plików.

wykorzystano: `HTML5, CSS3, JavaScript`<br/>
główny plik: `./views/index.html`<br/>
skrypt: `./public/js/scripts/calcualtor.js`<br/>
arkusz styli: `./public/css/style.css`

Kalkulator został zrobiony w formacie:
```js
calculatorButtons = [
        button_clear, button_off, button_modulo, button_sqrt,
        number_7, number_8, number_9, button_substract,
        number_4, number_5, number_6, button_multiply,
        number_3, number_2, number_1, button_divide,
        number_0, button_dot, button_solve, button_add
    ];
```

### GUI Kalkulatora
![zdjecie kalkulatora](/Screenshots/01.PNG)

Legenda:
```
[Zielony prostokąt] - wyświetla wszystkie operacje
[C/CE] - Wyczyść
[OFF] - Wyłącz (włączenie poprzez C/CE)
[%] - Modulo
[√] - Pierwiastek
[-] - Odejmowanie
[x] - Mnożenie
[÷] - Dzielenie
[+] - Dodawanie
[0-9] - Dopisywanie liczb do działania
[.] - Działanie zmiennoprzecinkowe
[=] - Wynik działania
```