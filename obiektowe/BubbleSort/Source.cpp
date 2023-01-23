//libs
#include <iostream>
#include <string>
#include <vector>

//classes
#include "BubbleSort.h"

int main() {

	//rêczna
	std::vector<int> example_1 = { 5, 1, 2, 7, 3, 2, 8, 1, 3, 13 };

	BubbleSort result_1 = BubbleSort(example_1);
	std::cout << "Nieposortowana tablica:\n";
	result_1.Show();

	result_1.Sort();

	std::cout << "Posortowana tablica:\n";
	result_1.Show();

	//automatyczna
	BubbleSort result_2 = BubbleSort();

	return 0;
}