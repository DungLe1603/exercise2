<div class="news-block">
	<h2><strong>Chỉnh sửa tin tức</strong></h2>
	<div class="form-block">
		<form action="index.php?ac=update&id=<?php echo $detail['id'];?>" method="post" enctype="multipart/form-data">
			<div class="flex">
				<div class="news-info">
					<div class="form-group">
						<label class="form-label">Tiêu đề</label>
						<input type="text" name="title" class="form-control" required value="<?php echo $detail['title'];?>">
					</div>
					<div class="form-group">
						<label class="form-label">Nội dung</label>
						<textarea class="form-control" name="description" rows="10" required><?php echo $detail['description'];?></textarea>
					</div>
				</div>
				<div class="news-image">
					<div class="form-group">
						<label class="form-label">Hình ảnh</label>
						<img class="form-img" id="view-img" src="public/images/<?php echo $detail['image'];?>" alt="News image">
						<input class="form-control" type="file" name="image" accept="image/x-png,image/gif,image/jpeg" onchange="preview(this);">
					</div>
				</div>
			</div>
			<div class="form-action">
				<button type="submit" class="btn btn-submit">Lưu</button>
				<button type="button" class="btn btn-back"><a href="index.php">Trở về</a></button>
				<button type="reset" class="btn btn-reset">Hủy</button>
			</div>
		</form>
	</div>
</div>
<script>
	function preview(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				document.getElementById("view-img").src = e.target.result;
			}
			reader.readAsDataURL(input.files[0]);
		}
    }
</script>
