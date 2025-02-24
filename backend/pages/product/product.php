<div class="row">
    <div class="col-sm-4 col-3">
        <h4 class="page-title">Products</h4>
    </div>
    <div class="col-sm-8 col-9 text-right m-b-20">
        <a href="index.php?product=add-product" class="btn btn-primary btn-rounded float-right"><i
                class="fa fa-plus"></i> Add Product</a>
    </div>
</div>
<div class="row doctor-grid">
    <?php
    $sql = "select * FROM PRODUCT;";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar">
                            <img alt="" src="assets/img/product_img/<?php echo $row['Product_photo'] ?>">
                        </a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="index.php?product=edit-product&p_id=<?= $row['ProductId'] ?>"><i class="fa fa-pencil m-r-5"></i>
                                Edit</a>
                            <a href="pages/product/del_product.php?id=<?= $row[0] ?>" onclick="return confirm('Are you sure to delete it?')" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis">
                        <a href="index.php?product=profile">
                            <?php echo $row['Product_Name'] ?>
                        </a>
                    </h4>
                    <div class="doc-prof">
                        <?php echo $row['Product_price'] ?>
                    </div>
                    <div class="user-country">
                        <?php echo $row['Description'] ?>
                    </div>
                </div>
            </div>

            <?php
        }
    } else {
        echo '
            <div class="col-md-12 col-sm-12  col-lg-12">
                <div class="profile-widget">
                    <span style="color:#e74c3c;">Data not found!</span>
                </div>
            </div>';
    }
    ?>

</div>
<div class="row">
    <div class="col-sm-12">
        <div class="see-all">
            <a class="see-all-btn" href="javascript:void(0);">Load More</a>
        </div>
    </div>
</div>