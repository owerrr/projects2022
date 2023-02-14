# Analiza wymagań

jest to uzgodnienie wymagań klienta oraz ich analiza. Celem jest określenie zakresu prac, oszacowanie kosztów i czasu wykonania.

<br/>

## Wstępna analiza wymagań

- oszacować techniczne wymagania,
- określić aplikacje z którymi musimy zintegrować system,
- wymagania funkcjonalne
- przykładowe scenariusze użycia

<br/>

## Wymagania funkcjonalne

- **Analiza wymagań funkcjonalnych umożliwia** zidentyfikowanie i opisanie pożądanego zachowania systemu. Zgodnie z jedną z definicji, wymaganie funkcjonalne to "stwierdzenie, jakie usługi ma oferować system, jak ma reagować na określone dane wejściowe oraz jak ma się zachowywać w określonych sytuacjach. W niektórych przypadkach również określają, czego system nie powinien robić"

- **Dobra dokumentacja** wymagań nie powinna nadmiernie ograniczać projektu aplikacji, to znaczy narzucać konkretnego rozwiązania architektonicznego. Analityk powinien w taki sposób opisywać system, by prezentować dostępne funkcje i możliwości aplikacji bez zbędnego wnikania w szczegóły techniczne.

- **Podczas opisywania wymagań funkcjonalnych** należy posługiwać się prostymi sformułowaniami

**PRZYKŁAD**

Jakie działanie wykonuje system?<br/>
Cyklicznie wysyłana jest poczta do wskazanych użytkowników
- dane wejściowe &#8594; działanie &#8594; dane wyjściowe 
- Ogólne - Lista w języku naturalnym
- Szczegółowa specyfikacja - dokładna lista, UML

<br/>

## Przypadek użycia
- Przypadek użycia poiwnien przedstawiać podsatwowy przebieg operacji<br/>
tzw. szczęśliwą ścieżkę wydarzeń <sub><sup>basic flow, happy flow</sup></sub>

**PRZYKŁAD**
- System prosi użytkownika o zalogowanie
- użytkownik podaje swój numer identyfikacyjny i hasło,
- system stwierdza poprawność danych,
- użytkownik zostaje zalogowany do systemu

<br/>

## Ścieżki alternatywne

Są to sytuacje, gdy nie zachodzi ścieżka optymalna.<br/>
Dla punktu 3. może zajść np:

- System odrzuca podane dane
- Powrót do kroku 1

<br/>

## Wymagania niefunkcjonalne
- Ograniczenia w jakich system ma pracować, np. standardy jakie spełnia,
- Jaki ten system powinien być,
- Co jest interfejsem,
- Czy jest przeznaczona dla pojedynczego użytkownika,
- Na jakim systemie operacyjnym działa,
- Jakie mam wymagania.

**PRZYKŁADY** 
- wydajność,
- skalowalność,
- otwartość, możliwość rozbudowy,
- odporność na awarie,
- bezpieczeństwo

<br/>

## Metoda FURPS

- **FUNCTIONALITY**<br/>
Funkcjonalność w rozumieniu zestawu funkcji uwzględniająca również bezpieczeństwo, możliwości systemu
- **Usability**<br/>
użyteczność jako zestaw wizualnych aspektów oprogramowania, estetyka, dokumentacja
- **Reliability**<br/>
Niezawodność, będąca mierzona np. częstością występowania błędów
- **Performance**<br/>
Wydajność aplikacji określona również jako czas odpowiedzi lub użycie zasobów
- **Supportability**<br/>
Przenośność, rozszerzalność, nie dająca się łatwo przetłumaczyć, wspieralność uwzględniająca zdolność aplikacji do instalacji na różnych platformach, łatwość testowania [...]