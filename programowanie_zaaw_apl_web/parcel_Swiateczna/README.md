# Parcel - Kalendarz adwentowy

Strona świąteczna oparta na kalendarzu adwentowym z wykorzystaniem bibliotek `typescript` oraz `parcel`.

Przy użyciu plików cookies generowane, a następnie zapisywane w nich są żarty o Chucku Norrisie z [API]: https://api.chucknorris.io/.

Aby wygenerować nowe żarty oraz zrestartować cały kalendarz adwentowy, należy wyczyścić wszystkie ciasteczka na uruchomionej stronie.

<sub><sup>**Do edycji stylizacja strony**</sup></sub>

## Instalacja

Projekt wymaga zainstalowania biblioteki parcel oraz typescript.

```bash
    npm install typescript --save-dev
    npm install parcel --save-dev
```

Po zainstalowaniu należy utworzyć foldery `src` oraz `dist`, do folderu `src` wklejamy pliki `background.png`, `index.html`, `index.ts`.

## Użytkowanie

Po zainstalowaniu bibliotek należy wygenerować package.json.

```bash
    npm init
```

Aby uruchomić program należy wpisać:

```
    npx parcel
```

oraz uruchomić stronę z wyświetlonym w terminalu portem.