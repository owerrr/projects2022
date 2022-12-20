### Zadanie 2

```cpp
#include <iostream>
#include <vector>

std::vector<int> Zad2(std::vector<int> input) {
    std::vector<int> temp = {};
    for (int n : input) {
        if (n > 9 && n < 100) temp.push_back(n);
    }
    return temp;
}

int main(){
    std::vector<int> source = { 1, 4, 10, 15, 25, 5, 9, 27, 103, 99, 235, 7211, 111111, 2, 917 };
    std::vector<int> source_filter = Zad2(source);
    std::cout << "liczby dwucyfrowe:\n";
    for (int i = 0; i < source_filter.size(); i++) {
        std::cout << source_filter[i];
        if (i != source_filter.size() - 1) std::cout << ", ";
    }

    return 0;
}
```

### Zadanie 3

```cpp
#include <iostream>

void Zad3(int input) {
    if (input < 1) return;
    for (int i = 1; i < input; i++) {
        std::cout << i;
        if (i != input - 1) std::cout << ", ";
    }
}

int main(){
    int num_filter = 0;
    std::cout << "Podaj liczbe naturalna, wieksza od 0: "; std::cin >> num_filter;
    std::cout << "liczby naturalne mniejsze od "<< num_filter <<":\n";
    Zad3(num_filter);

    return 0;
}
```

### Zadanie 4

```cpp
#include <iostream>

void Zad4(int input) {
    int number = 3;
    for (int i = 0; i < input+1; i++) {
        if (i == 0) {
            std::cout << "3^0 = 1\n";
        }
        else {
            std::cout << "3^" << i << " = " << number << std::endl;
            number = 3*number;
        }
    }
}

int main(){
    num_filter = 0;
    std::cout << "Podaj liczbe naturalna, wieksza od 0: "; std::cin >> num_filter;
    std::cout << "wyswietlam " << num_filter << " poteg liczby 3:\n";
    Zad4(num_filter);

    return 0;
}
```

### Zadanie 5

```cpp
#include <iostream>
#include <vector>

int Zad5(std::vector<int> input) {
    int sum = 0;
        if (input.size() == 0) return sum;
        for (int n : input) {
            sum += n;
        }
    return sum;
}

int main(){
    source = {};
    int number_input = 1;
    std::cout << "(0 aby zakonczyc)";
    while (number_input != 0) {
        std::cout << "Podaj liczbe: "; std::cin >> number_input;
        source.push_back(number_input);
    }
    int sum_source = Zad5(source);
    std::cout << "Suma wpisanych liczb wynosi: " << sum_source << std::endl;

    return 0;
}
```
