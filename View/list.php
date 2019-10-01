<div class="news-block">
	<h2><strong>Trang chủ</strong></h2>
	<br>
	<button class="btn btn-submit"><a href="index.php?ac=add">Thêm tin tức</a></button>
	<?php
		if ($list->num_rows > 0) {
			while($row = $list->fetch_assoc()) {
	?>
			<div class="flex block-item">
				<div class="info">
					<a class='list-item' href='index.php?ac=show&id=<?php echo $row["id"]; ?>'>
						<img src='public/images/<?php echo $row["image"]; ?>' alt='News image'>
						<span><?php echo $row["title"]; ?></span>
					</a>
				</div>
				<div class="action">
					<button class="btn-act btn-edit">
						<a href="index.php?ac=edit&id=<?php echo $row['id']; ?>">Sửa</a>
					</button>
					<button class="btn-act btn-delete">
						<a href="index.php?ac=delete&id=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có muốn xóa tin tức này?');">Xóa</a>
					</button>
				</div>
			</div>
	<?php
			}
		} else {
			echo "Không tìm thấy thông tin!";
		}
	?>
</div>
