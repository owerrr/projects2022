# Ryzyka w procesie testowym, rejestr ryzyk, raport błędów, raport testów

### Potencjalne ryzyka

- **projektowe**<br/>niedostępność środowiska, opóźnienie realizacji testów wynikające z nieterminowej realizacji działań zaplanowanych w harmonogramie, na przykład **niedostarczone na czas aplikacje, złej jakości dane testowe, niedostępność wynikająca z urlopów/zwolnień**.

- **produktowe**<br/>złej jakości kod, nieaktualna dokumentacja, luki analityczne, zmieniające się wymagania i tym podobne.

- **bezpieczeństwo informacji**<br/>wyciek danych osobowych, możliwość wejścia do panelu klienta bez podania loginu i hasła, brak autoryzacji dostępu do danych wrażliwych.

### Rejestr ryzyk

Jest to dokument wytwarzany we wczesnym stadium projektu. Zazwyczaj dostarczają go osoby odpowiedzialne za zarzadzanie projektem *(kierownicy)*.

Rejestr ma głównie na celu zwrócenie uwagi wszystkich zaangażowanych osób na czynniki, które mogą być zagrożeniem dla terminowej realizacji projektu dla jakości wytwarzanego produktu.

Dokument pozwala przygotować się na potencjalne ryzyka oraz wczesnie na nie reagować.

### Raport błędów

Jest narzędziem o charakterze informacyjnym, pomaga ocenić jakośc wytwarzanego rozwiązania i czas naprawy przez zespół programistów.

Raport powinien zawierac: 
- błąd,
- nazwe aplikacji,
- status,
- priorytet, 
- date zgloszenia,
- osobe przypiusaną,
- planowaną date naprawy

### Raport testów

- cel dokumentów,
- przedmiot i zakres,
- terminologię,
- obowiązki, odpowiedzialność, uprawnienia
- opis postępowania:
  - dokumenty powiązane z raportem końcowym testów,
  - podsumowanie wyników testów,
  - szczegółowe wyniki testów,
- lista wytworzonych testów:
  - ilośc testów,
  - postęp wykonania,
  - raporty dzienne,
  - rejestr defektów
- Załączniki

### Zadania

- ![Alt text](image.png)

- Przypadek testowy a scenariusz testowy:
Przypadek testowy to zestaw czynności wykonywanych w celu zweryfikowania określonej funkcji lub funkcjonalności aplikacji. Scenariusz testowy to dowolna funkcjonalność aplikacji, którą można przetestować.

-  Powinien być zawsze aktualizowany w ramach zmieniających się warunkach projektowych

### Scenariusz testowy

jest możliwym i szybkim przepływem przez aplikacje do funkcji, którą chcemy zweryfikować. Nadaje się do weryfikacji nie tylko samej funkcji, ale i całej ścieżki, która umożliwia nam sprawdzenie funkcji.

**Przypadek testowy**  <br/>
będzie miał warunki początkowe tak zdefiniowane, by można było od razu uruchomić funkcję.

Scenariusz pokaże nam nie tylko jak weryfikować funkcję, ale również jakie kroki należy p rzejść, by osiągnąć nasz cel.

# zadanie 4

plan testów pozytywnych strona allegro.pl

*positive*

- **tworzenie nowego konta użytkownika** udane.
- akcja: **logowanie na konto użytkownika** udane.
- akcja: **wyszukanie dowolnego przedmiotu** udane.
- akcja: **przyciski akcji do koszyka, chatu, polubionych przedmiotów** działają, udane.
- akcja: **funkcjonalność wyboru kategorii** udane.
- akcja: **funkcjonalność odnośników w "stopce"** udane.
- akcja: **obsługiwanie języka, kraju dostawy, waluty na stronie** udane.
- akcja: **funkcjonalność wybierania wielu produktów jednocześnie** udane.
- akcja: **wyświetlanie ostatnio przeglądanych i polecanych produktów** udane.
- akcja: **funkcjonalność odnośnika na stronie głównej polecającego Allegro Smart** udane.
- akcja: **polecenie innych stron związanych z Allegro.pl na dole witryny internetowej** udane.  

*negative*
- akcja: **tworzenie nowego konta użytkownika** nieudane. za malo liter w hasle
- akcja: **logowanie na konto użytkownika** nieudane. bledne haslo
- akcja: **wyszukanie dowolnego przedmiotu** nieudane. niepoprawny przedmiot aukcyjny
- akcja: **funkcjonalność wyboru kategorii** nieudane. nie ma takiej kategorii
- akcja: **funkcjonalność wybierania wielu produktów jednocześnie** nieudane, niepoprawny przedmiot aukcyjny.