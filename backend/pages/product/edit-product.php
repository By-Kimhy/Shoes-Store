<?php
	$id=$_GET['p_id'];
	$sql = "select * FROM PRODUCT where ProductId=$id";
	$res = mysqli_query($conn,$sql);
	if($res->num_rows>0){
		$row =mysqli_fetch_array($res);
		$d_code = $row['Product_Code'];
		$Product_Name = $row['Product_Name'];
		$Product_Type = $row['Product_Type'];
		$Product_Brand = $row['Product_Brand'];
		$Product_price = $row['Product_price'];
		$description = $row['Description'];
		$OldImg = $row['Product_photo'];
		
	}
?>

<style>
	.validate_data {
		color: red;
	}
</style>

<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<h4 class="page-title">កែប្រែផលិតផល-Update Product</h4>
	</div>

	<!-- <div class="col-lg-8 offset-lg-2">
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Info!</strong> All Star (<span class="text-danger">*</span>) is require.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div> -->

	<?php
		$d_nm_msg = "<div class='validate_data'>សូមបញ្ចូលឈ្មោះផលិតផល! </div>";
		$d_type_msg = "<div class='validate_data'>សូមបញ្ចូលប្រភេទផលិតផល! </div>";
		$d_brand_msg = "<div class='validate_data'>សូមបញ្ចូលម៉ាកផលិតផល! </div>";
		$d_price_msg = "<div class='validate_data'>សូមបញ្ចូលតំលៃផលិតផល! </div>";
		$d_photo_msg = "<div class='validate_data'>សូមបញ្ចូលរួបភាពផលិតផល! </div>";
	
		$err1 = $err2 = $err3 = $err4 = $err5 = "";


		if (isset($_POST['btnUpdate'])) {
			$Product_Name = $_POST['Product_Name'];
			$Product_Type = $_POST['Product_Type'];
			$Product_Brand = $_POST['Product_Brand'];
			$description = $_POST['Description'];
			$Product_price = $_POST['Product_price'];

			$file_name = $_FILES['Product_photo']['name'];
			$file_size = $_FILES['Product_photo']['size'];#(1024k*1024k=1048576m)
			$file_tmp = $_FILES['Product_photo']['tmp_name'];
			$file_type = $_FILES['Product_photo']['type'];

			#The explode() function breaks a string into an array.
			$fileNameBstr = explode(".", $file_name);
			#The strtolower() function converts a string to lowercase.
			#The end() function get the last element in the array.
			$file_ext = strtolower(end($fileNameBstr));
			// echo $file_ext . ' => ';

			#change filename
			$newFileName = md5(time() . $file_name) . '.' . $file_ext;
			$extensions = array("jpeg", "jpg", "png", "wmv");

			if (trim($Product_Name) == "") {
				$err1 = $d_nm_msg;
			}
			if ($Product_Type == "") {
				$err2 = $d_type_msg;
			}
			if ($Product_Brand == "") {
				$err3 = $d_brand_msg;
			}
			if ($Product_price == "") {
				$err4 = $d_price_msg;
			}

			if ($file_name == "") {
				$err5 = $d_photo_msg;
			} else {
				if (in_array($file_ext, $extensions) === false) {
					$err5 = "<div class='validate_data'>extension not allowed, please choose a JPEG or PNG file.</div>";
				} else {
					if ($file_size > 2097152) {
						$err5 = "<div class='validate_data'>File size must be excately 2 MB</div>";
					} else {
						//if($file_exits("assets\img\product_img/".$OldImg)){
						//	unlink("assets\img\product_img/".$OldImg);
						//}


						// insert data
						if($Product_Name !='' && 
						$Product_Type !='' && 
						$Product_Brand !='' && 
						$Product_price !='' && 
						$file_name !='' )
						{
							move_uploaded_file($file_tmp, "assets\img\product_img/".$newFileName);
							$sql = "
									update product SET
										Product_code = '$d_code',
										Product_Name = '$Product_Name',
										Product_Type= '$Product_Type',
										Product_Brand= '$Product_Brand',
										Product_price= '$Product_price',
										Description= '$description',
										Product_photo= '$newFileName'
										WHERE ProductId=$id;
								";
								if(mysqli_query($conn,$sql)){
									echo '
										<div class="col-lg-8 offset-lg-2">
											<div class="alert alert-success alert-success fade show" role="alert">
												<strong>Success!</strong> Update success!
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										</div>
									';
								}else{
									echo "Error Insert to db.$sql".mysqli_error($conn);
								}
						}
					}
				}
			}
		}
	?>
</div>
<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Product Code <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="Product_code" value="<?= $d_code ?>"
							readonly="readonly">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>Product Name <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="Product_Name" value="<?= $Product_Name ?>">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>Product Type <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="Product_Type" value="<?= $Product_Type ?>">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>Product Brand <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="Product_Brand" value="<?= $Product_Brand ?>">
					</div>
				</div>

				<div class="col-sm-6">
					<div class="form-group">
						<label>Product Price <span class="text-danger">*</span></label>
						<input class="form-control" type="text" name="Product_price" value=<?= $Product_price ?>>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>Product</label>
						<div class="profile-upload">
							<div class="upload-img">
								<img alt="" src="assets/img/user.jpg">
							</div>
							<div class="upload-input">
								<input type="file" class="form-control" name="Product_photo" value="<?= $OldImg ?>">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" rows="3" cols="30" name="Description"><?= $description ?></textarea>
			</div>
			<div class="m-t-20 text-center">
				<button type="summit" name="btnUpdate" class="btn btn-primary submit-btn">Update Product</button>
			</div>
		</form>
	</div>
</div>