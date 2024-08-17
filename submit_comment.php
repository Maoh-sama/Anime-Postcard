<?php
// Kết nối đến cơ sở dữ liệu
include 'connect_db.php';

// Lấy dữ liệu từ form
$content = $_POST['comment'];
$postId = $_POST['post_id'];

// Chèn dữ liệu vào bảng comments
$sql = "INSERT INTO comments (content, post_id) VALUES ('$content', $postId)";
if (mysqli_query($conn, $sql)) {
    echo "Bình luận đã được gửi thành công!";
} else {
    echo "Lỗi khi gửi bình luận: " . mysqli_error($conn);
}
