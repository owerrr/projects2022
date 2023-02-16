# Testy systemowe i akceptacyjne

mają na celu sprawdzenie zgodności zintegrowanego już systemu z ustalonymi w poprzednich częściach wymaganiami. Testy te wykonywane są w sposób całościowy wykorzystując do tego technikę czarnej skrzynki.

**Testy systemowe** najlepiej wykonywać na odpowiednio przygotowanym środowisku. Powinno ono być jak najbardziej przybliżone do tego produkcyjnego. Na tym etapie chcemy wykryć jak najwięcej awarii wywołanych przez błędy środowiskowe.

<br/>

## TYPY OBIEKTÓW TESTÓW

- podręczniki systemowe użytkownika i operacyjne,
- konfiguracje systemu i dane konfiguracyjne.

<br/>

## TESTY SYSTEMOWE DZIELIMY NA:

- Testy funkcjonalne
    - polega na użyciu technik opartych na specyfikacji dla testowanego aspektu systemu, testujemy obiekt patrząc na niego "od zwenątrz".
- Testy niefunkcjonalne
    - wydajność,
    - szybkość działania,
    - bezpieczeństwo systemu,
    - współpraca aplikacji z innymi systemami.

<br/>

### **TYPY TESTÓW**

- instalacyjne,
- funkcjonalne,
- interfejsu,
- wydajnościowe,
- regresywne,
- biezpieczeństwa.

**testy systemowe** wykonuje się po tym, jak cały system jest w pełni zintegrowany, tworzący współną całość. Głównym celem tych testów jest sprawdzenie systemu pod względem założeń, które były wyszczególnione w specyfikacji. Testy przeprowadza się na środowisku jak najbardziej zbliżonym do produkcyjnego oraz sprawdza się je pod kątem spełnienia funkcjonalnych i niefunkcjonalnych wymagań.

<br/>

## TESTY AKCEPTACYJNE

ich głównym celem jest uzyskanie przez klienta/użytkownika ufności do systemu. W tym celu dokonują oni wlaidacji systemu lub modułu. Walidacja to działanie mające na celu potwierdzenie, że wszystkie procesy, procedury, czynności systemu działają w spob zgodny z wcześniejszymi założeniami. Wszystkie czynności wykonywane podczas walidacji powinny zostać udokumentowane.

**Testy akceptacyjne** charakteryzują się tym, że mogą występować w różnych momentach życia oprogramowania.

<br/>

### **SYLABUS ISTQB**
**Przykłady:**
- oprogramowanie podczas instalacji lub integracji może podlegać testom akceptacyjnym,
- podczas testów modułowych mogą być wykonywane akceptacyjne testy użyteczności modułu,
- przed testami systemowymi mogą być przeprowadzone testy akceptacyjne nowej funkcjonalności.

<br/>

### **PODSTAWA TESTÓW AKCEPTACYJNYCH**
- wymagania użytkownika,
- wymagania systemowe,
- przypadki użycia,
- procesy biznesowe,
- procesy z analizy ryzyka.

<br/>

### **TYPOWE OBIEKTY TESTÓW AKCEPTACYJNYCH**
- proces biznesowy na systemie w pełni zintegrowanym,
- procesy utrzymania obsługi,
- procedury pracy użytkowników,
- formularze,
- raporty,
- dane konfiguracyjne.

<br/>

### **TESTY AKCEPTACYJNE ZGODNOŚCI Z UMOWĄ I LEGISLACYJNEJ**

- Testy akceptacyjne zgodności z umową polegają na sprawdzeniu kryteriów akceptacji, które zostały zdefiniowane na etapie negocjacji umowy.
- Testy zgodności legislacyjnej sprawdzają, cy stworzone oprogramowanie jest zgodne z prawem, jego przepisami.

<br/>

## TESTY ALFA I BETA

- Testy alfa realizowane są u wykonwacy dangeo systemu i oprogramowania. Przeprowadzone zostają przez niezależny zespół testerów np. potencjalnych przyszłych użytkowników.
- Testy beta realizowane są poza firmą, organizacją, która tworzyła dany system.
