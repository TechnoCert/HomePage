<?php
$page_type = isset($_GET['type']) ? $_GET['type'] : 'default';

// サービス詳細ページのタイトルとコンテンツ
$title = '';
$description = '';
$content = '';

if ($page_type === 'modeling') {
    $title = 'システムビジネスモデリング';
    $description = 'システムビジネスモデリングのサービス詳細ページです。';
    $content = 'ここにシステムビジネスモデリングの詳細内容を記述します。';
} elseif ($page_type === 'management') {
    $title = 'プロジェクトマネジメント';
    $description = 'プロジェクトマネジメントのサービス詳細ページです。';
    $content = 'ここにプロジェクトマネジメントの詳細内容を記述します。';
} else {
    // 予期せぬアクセスの場合の処理
    $title = 'サービス';
    $description = 'サービス一覧ページです。';
    $content = 'サービスを選択してください。';
}
?>
<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php echo htmlspecialchars($description); ?>" />
        <meta name="author" content="" />
        <title>TechnoCert | <?php echo htmlspecialchars($title); ?></title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">TechnoCert</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="service.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfPlGtRKPOYGJSmRDpXtc25RXeIW9rnEneUAW8gvloQKHblJQ/viewform?usp=sf_link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-12">
                    <h1 class="font-weight-light"><?php echo htmlspecialchars($title); ?></h1>
                    <p><?php echo nl2br(htmlspecialchars($content)); ?></p>
                </div>
            </div>
        </div>
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; TechnoCert 2021</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
        </body>
</html>