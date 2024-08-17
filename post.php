<?php
// Lấy danh sách bình luận
$sql = "SELECT * FROM comments WHERE post_id = $post_id";
$result = mysqli_query($conn, $sql);

// Hiển thị bình luận
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='comment'>";
    echo "<p>" . $row['content'] . "</p>";
    echo "<p>Vào lúc: " . $row['created_at'] . "</p>";
    echo "</div>";
}
