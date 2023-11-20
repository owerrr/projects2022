# Typy danych
Typ danych określa rodzaj *pojemnika* do ktorego możey włożyć *określone zasoby* i je w nim *przetrzymywać*.


- [Zmienne](#Typy%20danych)
    - [Ważne pojęcia](#Ważne%20pojęcia)
    - [String czy string](#String%20czy%20string)

#### Typy danych dzielimy na:
- typy proste,
- typy złożone

### Ważne pojęcia:

- **typowanie statyczne**<br/>nadawanie typów zmiennym w czasie kompilacji programu, czyli mówiąc obrazkowo, pojemnik określa typ danych i to dane trzeba pod względem typu dopasować do pojemnika.

- **typowanie dynamiczne**<br/>przypisywanie typów do wartości, które są przechowywane w zmiennych podczas działania programu, co oznacza, że typ danej przypisanej do danego pojemnika narzuca temu drugiemu, jakim rodzajem będzie.

### Dobierając odpowiedni typ danych należy zwrócić uwagę na:
- możliwośc wprowadzenia właściwych danych,
- umiejętność wprowadzenia poprawnych wyników,
- zajmowanie jak najmniej miejsca w pamięci komputera przez dane.

### Do zmiennych często przypisuje się elementy
- obiekty,
- właściwości,
- obliczenia matematyczne

### String czy string

- **string** pisany małą literą jest *typem prostym*
- **String** pisany dużą litera jest *typem złożonym*

### `Javascript`

w języku javascript zmienne są pozbawione typów, ponieważ to wartości mają typy, a nie zmienne.

### `C++`

- **typy proste**<br/>
  - porządkowe <sub><sup>znakowy, całkowity, logiczny, wyliczeniowy</sup></sub>,
  - rzeczywiste
- **typy pochodne**
  - tablice,
  - struktury,
  - unie
- **typy wskaźnikowe**
- **typy obiektowe**

### Podział języków

**STATYCZNIE**    | **DYNAMICZNIE**
-------------     | -------------
C                 | PHP
C++               | Javascript
Java              | Python
Kotlin            | Lua
 <br/>            | Ruby

 ### ZADANIA

 1. Typ danych określa rodzaj pojemnika do ktorego możey włożyć określone zasoby i je w nim przetrzymywać.

 2. - znakowy (char), 
    - tekstowy (string)
 3. - **statyczne**<br/>typy zmiennych są nadawane przed uruchomieniem programu.
    - **dynamiczne**<br/>typy zmiennych są nadawne w trakcie uruchomionego programu.
4.  - **statycznie** - C++
    - **dynamicznie** - Javascript

<br/><br/>

# Najważniejsze złożone typy danych
- typ wskaźnikowy,<br/>typ zmiennej odpowiedzialnej za przechowanie adresu do innej zmiennej <sub><sup>innego miejsca w pamięci w obrębie aplikacji</sup></sub>
<br/>Oznacza wskaźnik na zmienna danego typu.

- typ wyliczeniowy,<br/>rodzaj typu danych zawierający liste wartości reprezentowanych za pomocą literałów wyliczeniowych jakie może przyjmowac zmienna. Może przyjmować jedną z zadanych symbolicznych wartości.

- typ referencyjny,<br/>jest to odmiana wskaźnika, zwykle oznacza wartość, która zawiera informacje o położeniu innej wartości w pamięci, lub nośniku danych. Zarządzanie referencjami jest realizowane wyłącznie przez kompilator, lub interpreter.

- typ obiektowy,<br/>określa dwa podstawowe elementy: **pola** <sup><sub>właściwości</sub></sup> i **metody** <sub><sup>zachowania</sub></sup></sup>
```java
public class Main{
  int x = 0;
  int y = 1;
  int isNan = false;
}
```

- typ tablicowy,<br/>jest to ciąg zmiennych w zależności od języka programowania tego samego, lub różnego typu, Indeksowanych liczbą naturalną, z okreslonego przedziału, lub innym unikalnym kluczem mogącym być zarówno liczbą i ciągiem znaków.
```java
int[] newArray = {1,2,3,4};
```

- typ strukturalny,<br/>jest rozumiany jako zespół połączonych w całość zmiennych określających jako pola struktury charakterystyczny dla języka C

- typ pusty,<br/>występuje w oznaczeniu funkcji niezwracających żadnych wartości
```java
private static void function(){
  return;
}
```

**Zmienna typu znakowego**<br/>
```java
char c = 'c';
```

**Zmienna typu tekstowego**<br/>
```java
String s = "sadasd";
```

**Zmienna typu liczbowego zmiennoprzecinkowego**<br/>
```java
double d = 11.11;
```

**Zmienna typu liczbowego całkowitego**<br/>
```java
int i = 10;
```

**Zmienna typu logicznego** <sub><sup>(true,false)</sup></sub><br/>
```java
boolean f = false;
boolean t = true;
```

## Literał

to ustalona wartośc (liczbowa, tekstowa[...]) wpisana przez programistę bezpośrednio w okreśłonym miejscu kodu programu. Większość języków programowania ma formy zapisu dla podstawowych wartości takich jak:
- łańcuchy znaków,
- znak,
- liczby całkowite,
- liczby zmiennoprzecinkowe,
- wartości logiczne

Literały są zwykle używane do inicjalizacji zmiennych np.
```java
1, -2, 3, 4, -5; //liczby dodatnie i ujemne
1.211; //liczba dziesiętna, kropka jest separatorem
```

Przeciwieństwem literałów są stałe i zmienne - określane jako identyfikatory

## ASCII a UNICODE

**American standard Code for Information Interchange** to siedmiobitowy system kodowania znaków, który jest używany w komputerach, sieciach komputerowych i w innych urządzeniach mających mikroprocesor. W ramach tego standardu liczbom z zakresu 0-127 przyporządkowuje on litery alfabetu łacińskiego języka angielskiego. Cyfry, znaki przestankowe oraz inne sybmole i polecenia sterujące. Na prykład znak

**UNICODE** jest to komputerowy zestaw znaków, który w zamierzeniu twórców powinien obejmować wszystkie pisma używane na świecie. Jest on powszechnie wykorzystywanym standardem kodowania. Doczekał się wielu standardów i metod kodowania (<sub><sup> np.UTF-32/UCS-4/ UTF-16/UTF-8</sup></sub>)