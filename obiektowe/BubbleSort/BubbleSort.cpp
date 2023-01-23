#include "BubbleSort.h"

BubbleSort::BubbleSort() {
	std::vector<int> temp = {};
	int answ, count;
	std::cout << "Ile chcesz podac liczb: ";
	std::cin >> count;
	std::cout << "Podaj kolejno " << count << "liczb.\n"
				 "*UWAGA* podanie cyfry wylaczy program!\n";

	for (int i = 0; i < count; i++) {
		std::cout << i+1 << ": "; std::cin >> answ;
		temp.push_back(answ);
	}

	this->source = temp;

	std::cout << "Nieposortowana tablica:\n";
	this->Show();
	this->Sort();
	std::cout << "Posortowana tablica:\n";
	this->Show();
}

BubbleSort::BubbleSort(std::vector<int> source) {
	this->source = source;
}

void BubbleSort::Sort() {
	if (!this->sorted) {
		while (!this->sorted) {
			this->sorted = true;
			for (int i = 0; i < this->source.size() - 1; i++) {
				if (this->source[i] > this->source[i + 1]) {
					this->source[i] += this->source[i + 1];
					this->source[i + 1] = this->source[i] - this->source[i + 1];
					this->source[i] -= this->source[i + 1];
					this->sorted = false;
				}
			}
		}
		std::cout << "*Pomyslnie posortowano tablice!\n";
	}
	else {
		std::cout << "*Tablica jest juz posortowana!\n";
	}
}

void BubbleSort::Show() {
	for (int i = 0; i < source.size(); i++) {
		std::cout << source[i];
		if (i < (source.size() - 1)) std::cout << ",";
		else std::cout << std::endl;
	}
}