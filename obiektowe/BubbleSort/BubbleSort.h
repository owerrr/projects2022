#pragma once
#include <iostream>
#include <vector>

/****************************************************************
* Klasa:	BubbleSort											*
*																*
* Opis:		Klasa sortuj¹ca vector liczb sta³ych				*
*																*
* Pola:		source -- tablica liczb,							*
*																*
*			sorted -- zmienna przechowuj¹ca, czy				*
*			tablica zosta³a poprawnie posorotwana				*
*																*
* Metody:	BubbleSort (bez argumentów) -- konstruktor,			*
*			pobiera dan¹ iloœæ liczb z klawiatury u¿ytkownika,	*
*			a nastêpnie automatycznie wyœwietla je przed		*
*			sortowaniem, sortuje, a nastêpnie po sortowaniu		*
*																*
*			BubbleSort (z argumentami) -- konstruktor,			*
*			dane do sortowania pobiera z argumentu				*
*																*
*			Sort -- funkcja sortuj¹ca tablice					*
*																*
*			Show -- funkcja wypisuj¹ca liczby,					*
*			które znajduj¹ siê w tablicy						*
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

