1. Chương trình nhập vào từ bàn phím số nguyên n và hiển thị ra các số từ 1 tới n.
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	for (int i = 1; i <= n; i++) {
		std::cout << i << " ";
	}
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
}
```
