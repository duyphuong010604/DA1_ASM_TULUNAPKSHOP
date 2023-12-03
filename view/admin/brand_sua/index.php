<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

           

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lí thương hiệu /
                            Danh sách thương hiệu </span>/ Sửa thương hiệu</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Chỉnh sửa thương hiệu</h5>
                                    <small class="text-muted float-end">Nhập vào ô bên dưới</small>
                                </div>
                                <div class="card-body">
                                    <?
                                    $branId = $_GET['brandId'];
                                    $brandEdit = $brand->getById($branId);
                                    extract($brandEdit);
                                    $editBrand = "routerAdmin.php?act=brand_sua&brandId=" . $brandId;
                                    $deleteBrand = "routerAdmin.php?act=brand_xoa&brandId=" . $brandId;
                                    ?>
                                    <form action="<? $editBrand ?>" method="post" enctype="multipart/form-data">

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">ID thương hiệu</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="loaisp" class="input-group-text"><i class='bx bx-pyramid'></i></span>
                                                    <input type="text" class="form-control" id="brandId" required readonly name="brandId" value="<?= $brandId ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="name">Tên thương hiệu</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="loaisp" class="input-group-text"><i class='bx bxl-product-hunt'></i></span>
                                                    <input type="text" class="form-control" id="name" name="name" readonly placeholder="Tên thương hiệu" value='<?= $name ?>' />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="origin">Xuất xứ của thương
                                                hiệu</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="loaisp" class="input-group-text"><i class='bx bxs-plane-alt'></i></span>
                                                    <input type="text" class="form-control" id="origin" value="<?= $origin ?>" name="origin" placeholder="Xuất xứ thương hiệu" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="image">Logo thương hiệu</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="loaisp" class="input-group-text"><i class='bx bx-image-alt'></i></span>
                                                    <input type="file" class="form-control" id="image" name="image" />
                                                </div>
                                                <div class="image mt-3 d-flex align-items-center">
                                                    <img src="<?= $UPLOAD_IMG_URL ?>/brands/<?= $image ?>" alt="" height="80px">
                                                    <p class="ps-2">Ảnh hiện tại</p>
                                                </div>
                                                <?php if (isset($errors["image"]))
                                                    echo "<br><span style='color: red;'>" . $errors["image"] . "</span><br>"; ?>
                                            </div>
                                        </div>
                                        <input type="hidden" name="imageOld" value="<?= $image ?>" />


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="status">Trạng
                                                thái</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="status" class="input-group-text"><i class='bx bx-list-ul'></i></span>
                                                    <select name="status" id="status" class="form-control form-select ">
                                                        <option selected disabled>Chọn</option>
                                                        <option class="form-control" value=1 <? if ($status == 1)
                                                                                                    echo "selected" ?>>Hiển thị
                                                        </option>
                                                        <option class="form-control" value=9 <? if ($status == 9)
                                                                                                    echo "selected" ?>>Ẩn</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="luu">Lưu</button>
                                                <?
                                                if (isset($Note['message']))
                                                    echo "<br><span style='color: red;'>" . $Note['message'] . "</span><br>"; ?>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->

                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->

</div>