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
```cpp
#include <iostream>

int main() {
	int a, b;
	std::cin >> a >> b;
	int sum = (a + b) * (b - a + 1) / 2;
	std::cout << sum;
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
```cpp
#include <iostream>

int main() {
    int n;
    std::cin >> n;
    int m = (n + 1) / 2;
    int sum = m * m;
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
```cpp
#include <iostream>

int main() {
    int a, b;
    std::cin >> a >> b;
    int i = a + (3 - a % 3) % 3;
    for (; i <= b; i += 3) {
        std::cout << i << " ";
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
```cpp
#include <iostream>
#include <climits>

int main() {
    int n;
    std::cin >> n;
    if (n < 0) {
        std::cout << "Invalid input: n must be a non-negative integer.";
        return 0;
    }
    int factorial = 1;
    for (int i = 1; i <= n; i++) {
        if (factorial > INT_MAX / i) {
            std::cout << "Overflow error: the result is too large to be represented as an int.";
            return 0;
        }
        factorial *= i;
    }
    std::cout << factorial;
    return 0;
}
```
```cpp
#include <iostream>

int factorial(int n) {
    if (n == 0) {
        return 1;
    }
    return n * factorial(n - 1);
}

int main() {
    int n;
    std::cin >> n;
    std::cout << factorial(n);
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
```cpp
#include <iostream>
#include <cmath>

int main() {
    int n;
    std::cin >> n;
    for (int i = 1; i <= sqrt(n); i++) {
        if (n % i == 0) {
            std::cout << i << " ";
            if (i != n / i) {
                std::cout << n / i << " ";
            }
        }
    }
    return 0;
}
```
```cpp
#include <iostream>
#include <cmath>
#include <vector>
#include <algorithm>

int main() {
    int n;
    std::cin >> n;
    std::vector<int> divisors;
    for (int i = 1; i <= sqrt(n); i++) {
        if (n % i == 0) {
            divisors.push_back(i);
            if (i != n / i) {
                divisors.push_back(n / i);
            }
        }
    }
    std::sort(divisors.begin(), divisors.end());
    for (int divisor : divisors) {
        std::cout << divisor << " ";
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
```cpp
#include <iostream>

int main() {
    int n;
    std::cin >> n;
    n += (n % 2);
    while (n <= 100) {
        std::cout << n << " ";
        n += 2;
    }
    return 0;
}
```
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	for (; n <= 100; n++) {
		if (n % 2 == 0) {
			std::cout << n << " ";
		}
	}
	return 0;
}
```
```cpp
#include <iostream>

int main() {
    int n;
    std::cin >> n;
    n += (n % 2);
    for (; n <= 100; n += 2) {
        std::cout << n << " ";
    }
    return 0;
}
```

10. Chương trình nhập từ bàn phím số nguyên n và hiển thị ra màn hình số các ước số của n.
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	int i = 1;
	int count = 0;
	while (i <= n) {
		if (n % i == 0) {
			count++;
		}
		i++;
	}
	std::cout << count;
	return 0;
}
```
```cpp
#include <iostream>

int main() {
	int n;
	std::cin >> n;
	int count = 0;
	for (int i = 1; i <= n; i++) {
		if (n % i == 0) {
			count++;
		}
	}
	std::cout << count;
	return 0;
}
```
```cpp
#include <iostream>
#include <cmath>

int main() {
    int n;
    std::cin >> n;
    int i = 1;
    int count = 0;
    while (i <= sqrt(n)) {
        if (n % i == 0) {
            count++;
            if (i != n / i) {
                count++;
            }
        }
        i++;
    }
    std::cout << count;
    return 0;
}
```
```cpp
#include <iostream>
#include <cmath>

int main() {
    int n;
    std::cin >> n;
    int count = 0;
    for (int i = 1; i <= sqrt(n); i++) {
        if (n % i == 0) {
            count++;
            if (i != n / i) {
                count++;
            }
        }
    }
    std::cout << count;
    return 0;
}
```

11. Chương trình nhập từ bàn phím hai số nguyên dương a và b. Sau đó hiển thị ra màn hình kết quả của a^b.
```cpp
#include <iostream>

int main() {
	int a, b;
	std::cin >> a >> b;
	int answer = 1;
	while (b > 0) {
		answer *= a;
		b--;
	}
	std::cout << answer;
	return 0;
}
```
```cpp
#include <iostream>

int main() {
    int a, b;
    std::cin >> a >> b;
    int answer = 1;
    while (b > 0) {
        if (b % 2 == 1) {
            answer *= a;
        }
        a *= a;
        b /= 2;
    }
    std::cout << answer;
    return 0;
}
```
```cpp
#include <iostream>

int main() {
	int a, b;
	std::cin >> a >> b;
	int answer = 1;
	for (; b > 0; b--) {
		answer *= a;
	}
	std::cout << answer;
	return 0;
}
```
```cpp
#include <iostream>

int main() {
    int a, b;
    std::cin >> a >> b;
    int answer = 1;
    for (; b > 0; b /= 2) {
        if (b % 2 == 1) {
            answer *= a;
        }
        a *= a;
    }
    std::cout << answer;
    return 0;
}
```

12. Chương trình nhập từ bàn phím hai số nguyên a và b. Sau đó hiển thị ra màn hình các số từ a tới b mà chia hết cho cả 3 và 5.
```cpp
#include <iostream>

int main() {
	int a, b;
	std::cin >> a >> b;
	while (a <= b) {
		if (a % 3 == 0 && a % 5 == 0) {
			std::cout << a << " ";
		}
		a++;
	}
	return 0;
}
```
```cpp
#include <iostream>

int main() {
    int a, b;
    std::cin >> a >> b;
    a += (15 - a % 15) % 15;
    while (a <= b) {
        std::cout << a << " ";
        a += 15;
    }
    return 0;
}
```
```cpp
#include <iostream>

int main() {
	int a, b;
	std::cin >> a >> b;
	for (; a <= b; a++) {
		if (a % 3 == 0 && a % 5 == 0) {
			std::cout << a << " ";
		}
	}
	return 0;
}
```
```cpp
#include <iostream>

int main() {
    int a, b;
    std::cin >> a >> b;
    a += (15 - a % 15) % 15;
    for (; a <= b; a += 15) {
        std::cout << a << " ";
    }
    return 0;
}
```

13. Chương trình hiển thị ra màn hình các số từ 1 tới 5 sử dụng vòng lặp do-while.
```cpp
#include <iostream>

int main() {
	int i = 1;
	do {
		std::cout << i << " ";
		i++;
	} while (i <= 5);
	return 0;
}
```

14. Chương trình hiển thị ra màn hình các số có số 0 ở cuối từ 1 tới 1000 (màn hình sẽ hiển thị lên các số 10, 20, 30, ..., 990, 1000).
```cpp
#include <iostream>

int main() {
	int i = 1;
	do {
		if (i % 10 == 0) {
			std::cout << i << " ";
		}
		i++;
	} while (i <= 1000);
	return 0;
}
```
```cpp
#include <iostream>

int main() {
    int i = 10;
    do {
        std::cout << i << " ";
        i += 10;
    } while (i <= 1000);
    return 0;
}
```
