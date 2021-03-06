<?php require VIEW_PATH . '/partial/header.php';  ?>
    <body>

    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                <?php require VIEW_PATH . '/partial/main-header.php';  ?>
                <div class="inner-block">
                    <h1>Sửa danh mục</h1>

                    <form name="category" method="post" action="<?php echo SITE_URL . '?controller=categoryarticle&action=store'?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
                        <div class="form-group">
                            <label for="title">Tiêu đề:</label>
                            <input type="text" name="title" value="<?php echo $category['category_name'] ?>" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="title">Ảnh đại diện:</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label for="content">Nội dung:</label>
                            <p>
                                <textarea name="category_name" style="width: 80%"><?php echo $category['category_name'] ?></textarea>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="status">Trạng thái:</label>
                            <select name="status">
                                <option value="0" <?php echo ($category['status'] == 0) ? 'selected' : ''; ?>>Ẩn</option>
                                <option value="1" <?php echo ($category['status'] == 1) ? 'selected' : ''; ?>>Hiện</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>
                <?php require VIEW_PATH . '/partial/copyright.php';  ?>
            </div>
        </div>
        <?php require VIEW_PATH . '/partial/sidebar.php';  ?>

    </div>
    <!--slide bar menu end here-->
    <?php require VIEW_PATH . '/partial/footer.php';  ?>
    </body>
    </html>

<?php
echo '<pre>';
print_r($category);
echo '</pre>';
?>