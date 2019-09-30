<div class="news-block">
	<h2><strong>Trang chủ</strong></h2>
	<?php
		if ($list->num_rows > 0) {
			while($row = $list->fetch_assoc()) {
				echo "<a class='list-item' href='?id=" . $row["id"] . "'>";
				echo "<img src='public/images/" . $row["image"] . "' alt='News image'>";
				echo "<span>" . $row["title"]. "</span>";
				echo "</a>";
			}
		} else {
			echo "Không tìm thấy thông tin!";
		}
	?>
</div>
