# zlozone typy danych

### typ całkowity, 
```cpp
// C++
int num2 = 2;
```
- liczba całkowita

### typ zmiennoprzecinkowy,
```cpp
// C++
float num1 = 1.1; // pojedyczna precyzja
double num2 = 1.2; // podwójna precyzja
```
- przybliżoną wartość liczby rzeczywistej.

### typ znakowy,
```cpp
// C++
char c1 = 'A';
```
- pojedyczny znak.

### typ tekstowy,
```cpp
// C++
std::string t1 = "Sample text";
```
- cały tekst,

### typ logiczny,
```cpp
// C++
bool b1 = true;
bool b2 = false;
```
- reprezentują wartości logiczne.

<sup><sub>(Mogą również występować pod postacią 1 - True, 0 - False)</sub></sup>

## Literał
ustalona wartość, wpisana przez progarmistę bezpośrednioo w określonym miejscu kodu programu. Większość języków programowania ma formy zapisu dla podstawowych wartości takich jak:

```
• łancuch znaków,
• znak,
• liczby całkowite,
• liczby zmiennoprzecinkowe,
• wartości typu logicznego
```

Literały są używane do inicjalizacji zmiennych np.

```cpp
/* LITERAŁY - to co rozumie komputer */
1, -2, 3, 4, -5; // liczby dodatnie i ujemne
1.211; // liczba dziesiętna
0x4F; // liczba szesznastkowa
'A'; // znak 
"Fajny przykład tekstu"; // ciąg znaków

return 0; // oznacza, że: ....
```

## ASCII a UNICODE

### ASCII:
jest to siedmiobitowy system kodowania znaków, który jest używany w komputerach, sieciach komputerowych oraz w innych urządzeniach mających mikroprocesor. W ramach tego standardu liczbom z zakresu 0-127 przyporządkowuje on litery alfabetu łacińskiego języka angielskiego cyfry, znaki przestankowe oraz inne symbole i polecenia sterujące, na przykład:
```
• znak "c" jest kodowany jako liczba 99,
• znak "C" jest kodowany jako liczba 67,
• znak "!" jest kodowany jako liczba 13,
• znak " " jest kodowany jako liczba 32
```

### UNICODE:
Jest to komputerowy zestaw znaków, który w zamierzeniu twórców powinien obejmować wszystkie pisma używane na świecie. Jest on powszechnie wykorzystywanym standardem kodowania. Doczekał się wielu standardów i metod kodowania np. 

`UTF-32/UCS-4, UTF-16, UTF-8`