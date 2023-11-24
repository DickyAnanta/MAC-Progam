<!DOCTYPE html>
<html lang="en">
<?php
$rootDir = dirname(FCPATH);
$router = service('router');
$module = class_basename($router->controllerName());
$method = $router->methodName();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/assets/img/logo.png">
    <title>
        <?php
        if (!empty($page['title'])) {
            echo $page['title'];
        } else {
            echo 'MAC - ' . ucfirst($module) . ' ' . ucfirst($method);
        }
        ?>
    </title>

    <?php include 'section/cssload.php' ?>
</head>

<body class="hold-transition layout-top-nav">
    <div id="alert-data" title="<?= @$alert["title"]; ?>" type="<?= @$alert["type"]; ?>" message="<?= @$alert["message"]; ?>" cobtn="<?= @$alert["cobtn"]; ?>" redirect="<?= @$alert["redirect"]; ?>" redirect-to="<?= @$alert["redirect_to"]; ?>"></div>
    <div class="wrapper">
        <!-- Navbar -->
        <?php include 'section/navbar.php'; ?>
        <!-- /.navbar -->
    </div>
    <tbody>
        <div class="content-wrapper" style="padding-top: 1px; background: white;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php
                        if (file_exists(str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/Views//' . $method . '.php')) {
                            include str_replace("\\", "/", $rootDir) . "/App/Modules/" . $module . '/Views//' . $method . '.php';
                        } else {
                            echo '<p><i>View ' . $method . ' cannot exists!</i></p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </tbody>

    <?php include 'section/footer.php'; ?>



</body>

</html>