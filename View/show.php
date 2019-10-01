<div class="news-block">
	<button class="btn-back"><a href="index.php">Trang chủ</a></button>
	<h2><strong>Tin tức chi tiết</strong></h2>
	<div class="news-item">
		<?php
			if (isset($detail)) {
				echo "<img src='public/images/" . $detail["image"] . "' alt='News image'>";
				echo "<div class='news-detail'>";
				echo "<h3>" . $detail['title'] . "</h3>";
				echo "<p>" . $detail['description'] . "</p>";
				echo "<p>" . date("d-m-Y", strtotime($detail['created_at'])) . "</p>";
				echo "</div>";
			} else {
				echo "Không tìm thấy thông tin!";
			}
		?>
	</div>
</div>
