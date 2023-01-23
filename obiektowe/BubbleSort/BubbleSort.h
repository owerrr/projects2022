#pragma once
#include <iostream>
#include <vector>

/****************************************************************
* Klasa:	BubbleSort											*
*																*
* Opis:		Klasa sortuj�ca vector liczb sta�ych				*
*																*
* Pola:		source -- tablica liczb,							*
*																*
*			sorted -- zmienna przechowuj�ca, czy				*
*			tablica zosta�a poprawnie posorotwana				*
*																*
* Metody:	BubbleSort (bez argument�w) -- konstruktor,			*
*			pobiera dan� ilo�� liczb z klawiatury u�ytkownika,	*
*			a nast�pnie automatycznie wy�wietla je przed		*
*			sortowaniem, sortuje, a nast�pnie po sortowaniu		*
*																*
*			BubbleSort (z argumentami) -- konstruktor,			*
*			dane do sortowania pobiera z argumentu				*
*																*
*			Sort -- funkcja sortuj�ca tablice					*
*																*
*			Show -- funkcja wypisuj�ca liczby,					*
*			kt�re znajduj� si� w tablicy						*
*																*
* Autor:													*
****************************************************************/

class BubbleSort
{
private:
	std::vector<int> source;
	bool sorted = false;
public:
	BubbleSort();
	BubbleSort(std::vector<int>);
	void Sort();
	void Show();
};

