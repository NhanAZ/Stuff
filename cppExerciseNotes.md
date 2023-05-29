1. Chương trình nhập vào từ bàn phím số nguyên n và hiển thị ra các số từ 1 tới n.
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	for (int i = 1; i <= n; i++) {
		std::cout << i << " ";
	}
	return 0;
}
```

2. Chương trình nhập vào từ bàn phím số nguyên n và hiển thị ra các số từ 1 tới n.
```cpp
#include <iostream>

int main() {
	int a, b;
	std::cin >> a >> b;
	for (int i = a; i <= b; i++) {
		std::cout << i << " ";
	}
	return 0;
}
```

3. Chương trình nhập vào từ bàn phím số nguyên n và thực hiện hiển thị các số từ n về -5.
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	for (int i = n; i >= -5; i--) {
		std::cout << i << " ";
	}
	return 0;
}
```

4. Chương trình nhập vào từ bàn phím số nguyên a và b. Sau đó hiển thị ra màn hình tổng các số từ a tới b.
```cpp
#include <iostream>

int main() {
	int a, b;
	std::cin >> a >> b;
	for (int i = a; i <= b; i++) {
		std::cout << i << " ";
	}
	return 0;
}
```

5. Chương trình nhập vào từ bàn phím số nguyên n và thực hiện hiển thị ra tổng các số lẻ từ 0 tới n.
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	int sum = 0;
	for (int i = 0; i <= n; i++) {
		if (i % 2 == 1) {
			sum += i;
		}
	}
	std::cout << sum;
	return 0;
}
```

6. Chương trình nhập vào từ bàn phím số nguyên a và b. Sau đó hiển thị ra màn hình các số chia hết cho 3 từ a tới b.
```cpp
#include <iostream>

int main() {
	int a, b;
	std::cin >> a >> b;
	for (int i = a; i <= b; i++) {
		if (i % 3 == 0) {
			std::cout << i << " ";
		}
	}
	return 0;
}
```

7. Chương trình nhập từ bàn phím số nguyên n và hiển thị ra màn hình n! (n giai thừa).
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	int factorial = 1;
	for (int i = 1; i <= n; i++) {
		factorial *= i;
	}
	std::cout << factorial;
	return 0;
}
```

8. Chương trình nhập từ bàn phím một số nguyên n và hiển thị ra màn hình các ước của n với n > 0.
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	for (int i = 1; i <= n; i++) {
		if (n % i == 0) {
			std::cout << i << " ";
		}
	}
	return 0;
}
```

9. Chương trình nhập vào bàn phím số nguyên n và hiển thị ra các số chẵn từ n tới 100.
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	while (n <= 100) {
		if (n % 2 == 0) {
			std::cout << n << " ";
		}
		n++;
	}
	return 0;
}
```
