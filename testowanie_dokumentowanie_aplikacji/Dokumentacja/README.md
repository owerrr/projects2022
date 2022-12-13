# Dokumentacja

Dokumentacja wytworzona podczas **procesu testowego** jest niezbędna do *ewentualnego* odtworzenia danego etapu testów, czy przekazania wiedzy nowym członkom zespołu.

Stanowi środek komunikacji, nie zawsze cały zespół projektowy przebywa w jednej siedzibie.

Dokumentacja powinna być tworzona według wzorców przyjętych i **obowiązujących w danej organizacji**.

### Plan testów

Jest on tworzony na **etapie planowania procesu testowego**.

Dokument jest aktywny przez cały czas trwania projektu. Powinien być każdorazowo modyfikowany i uzupełniany o nowe informacje.

**wszystkie** osoby zaangażowane w projekt **muszą** mieć dostęp do dokumentu.

plan testów
```
- Cel dokumentów,
- Przedmiot i zakres testowania,
- Terminologia
```

### Rodzaje testów

#### Smoke testy
To podzbiór wszystkich zdefiniowanych przypadków testowych, które pokrywają główne funkcjonalności modułu lub systemu. Mają na celu potwierdzenie, że działają kluczowe funkcjonalności programu, bez zagłębiania się w szczegóły.

#### Testy eksploracyjne
Są dokonywane bez wykorzystania przypadków testowych. Mają jasno zdefiniowany obszar weryfikacyjny oraz trwają przez określony czas. *(1-4h)*. Uzupełniają testy oparte na scenariuszach, ale **nie moga ich zastępować**.

#### Raport o postępie testów
Jest to dokument zawierający podsumowania aktywności testowych i osiągniętych wyników, tworzony regularnie, by zaraportować postep prac testowych w stosunku do założeń, a także przedstawiający ryzyka i alternatywy wymagające podjęcia decyzji zarządczych.

### Obowiązki, odpowiedzialność i uprawnienia

Zawiera opis ról wraz z zakresem obowiązków przydzielonych do osób, które biorą udział w tworzeniu specyfikacji funkcjonalnej zmiany informatycznej.

| Id   | imie nazwisko | rola     | odpowiedzialny |
| :--- | :------------ | :------- | :------------- |
| `id` | `string`      | `string` | `string`       |

### Opis postępowania

#### Informacje wstępne

- Dokumenty powiązane
    * Id, Dokument(symbol, nazwa), Data ostatniej modyfikacji, wersja dokumentu
- Założenia i ograniczenia
    * Należy wymienic,  jakie typy testów bedą przeprowadzone np. weryfikacji, gotowości kodu, konfiguracji oprogramowania, migracji danych, regresji, akceptacyjne.
- \*Rodzaje przeprowadzanych testów
- Dokumentacja realizowanaych testów
    * Potwierdzenia wyników testów zostaną umieszczone w narzędziu TestLink w postaci zrzutów ekranów ilustrujących poszczególne kroki scenariusza uzupełnionych tam, gdzie to możliwe.
<sub><sup>* - niewymagane</sup></sub>

#### Ryzyka

należy opisać potencjalne ryzyka:

- Projektowe,
    * Niedostępność środowiska, opóźnienie realizacji testów.
- Produktowe,
    * Złej jakości kod, nieaktualna dokumentacja, luki.
- Bezpieczeństwo informacji,
    * wyciek danych osobowych, możliwość wejścia do panelu klienta bez podania loginu i hasła.

#### Wymagania dotyczące danych środowiska i narzędzi testowych

- Wymagania dotyczące dancyh testowych,
- Wymagania dotycząec środowiska testowego,
- Wymagania dotyczące narzędzi testowych.

#### Harmonogram testów

| Nazwa zadania | Data rozp. | Data zakoń. | Odpowiedzialny |
| :------------ | :--------- | :---------- | :--------------|
| `string`      | `date`     | `date`      | `string`       |

#### Raportowanie i komunikacja

- Produkty dostarczane w wyniku testów (Nazwa produktu [raport], osoba odpowiedzialna),
- Plan raportowania i komunikacji,
- Zespół projektowy.

#### Załączniki

| Id   | dokument | odnośnik | data modyfikacji | wersja   |
| :--- | :------- | :------- | :--------------- | :------- |
| `id` | `string` | `string` | `date`           | `string` |
