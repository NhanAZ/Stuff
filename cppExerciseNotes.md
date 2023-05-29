1. Bạn hãy viết chương trình nhập vào từ bàn phím số nguyên n và hiển thị ra các số từ 1 tới n.
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
