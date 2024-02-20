<div class="col-lg-4">
    <div class="sidebar">
        <div class="sidebar-item categories">
            <h3 class="sidebar-title">Kategoriler</h3>
            <ul class="mt-3">
                <?php $category = $conn->query("SELECT * from category")->fetchAll();
                foreach ($category as $item) {
                    ?>
                    <li><a href="category.php?Id=<?php echo $item['Id'] ?>"><?php echo $item['Title']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="sidebar-item recent-posts">
            <h3 class="sidebar-title">Son Yazılar</h3>
            <div class="mt-3">
                <?php
                $selectedQuery = $conn->prepare("SELECT * from blog ORDER BY blog.Date DESC LIMIT 5");
                $selectedQuery->execute();
                $selectedRows = $selectedQuery->fetchAll(PDO::FETCH_ASSOC);
                foreach ($selectedRows as $selectedRow) {
                    $phpDate = date("d-m-Y", strtotime($selectedRow['Date']));
                    ?>
                    <div class="post-item mt-3">
                        <img src="<?php echo $selectedRow['ImageUrl']; ?>" alt="">
                        <div>
                            <h4><a href="blogdetails.php?Id=<?php echo $selectedRow['Id']; ?>"><?php echo $selectedRow['Title']; ?></a></h4>
                            <time datetime="2020-01-01"><?php echo $phpDate; ?></time>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>