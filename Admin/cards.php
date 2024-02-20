<?php
$stmt = $conn->query("SELECT COUNT(*) FROM request");
$requestCount = $stmt->fetchColumn();

$stmz = $conn->query("SELECT COUNT(*) FROM teams");
$teamCount = $stmz->fetchColumn();

$stmk = $conn->query("SELECT COUNT(*) FROM blog");
$blogCount = $stmk->fetchColumn();

$stml = $conn->query("SELECT COUNT(*) FROM category");
$categoryCount = $stml->fetchColumn();

?>

<div class="row">
    <div class="col-lg-12 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?php echo $requestCount ?></h3>
                <p>Gelen Teklifler</p>
            </div>
            <div class="icon">
                <i class="ion ion-chatbox-working"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php echo $teamCount ?></h3>
                <p>Ekip Sayısı</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-stalker"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?php echo $blogCount ?></h3>
                <p>Blog Yazıları</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-bookmarks"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?php echo $categoryCount ?></h3>
                <p>Kategoriler</p>
            </div>
            <div class="icon">
                <i class="ion ion-bookmark"></i>
            </div>
        </div>
    </div>
</div>