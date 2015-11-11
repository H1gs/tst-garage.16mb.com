<!DOCTYPE html>

<html>

<head>
    <title>Магазин стикеров</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

</head>

<body>
    <!--   ШАПКА-->
    <div class="row" id="header">
        <div class="col-md-3">
            <a href="#"><img src="/images/logo.png" alt="" class="img-responsive img-logo"></a>
        </div>
    </div>
    <!--    ТЕЛО-->
    <div class="row" id="content-body">
        <!--       Меню-->
        <div class="col-md-3">
            <ul class="main-menu">
                <li class="li-center"><a href="/cans.php">Балончики</a></li>
                <hr class="hr-menu">
                <li class="li-center"><a href="/index.php">Маркеры</a></li>
                <hr class="hr-menu">
                <li class="li-center"><a href="/index.php">Аксесуары</a></li>
                <hr class="hr-menu">
                <li class="li-center"><a href="/index.php">Литература</a></li>
                <hr class="hr-menu">
                <li class="li-center"><a href="/index.php">Контакты</a></li>
                <hr class="hr-menu">
            </ul>

        </div>
        <!--        ! КОНТЕНТ-->
        <div class="col-md-9" id="content">
            <?php echo $content; ?>
        </div>
    </div>
    <!--    ФУТЕР-->
    <div class="row" id="footer"></div>

    <!--    JavaScript echo $content-->
    <script>
        $(document).ready(function () {
            $('a').click(function () {
                var url = $(this).attr('href');

                $.ajax({
                    url: url + '?ajax=1',
                    success: function (data) {
                        $('#content').html(data);
                    }
                });

                if (url != window.location) {
                    window.history.pushState(null, null, url);
                }

                return false;
            });

            $(window).bind('popstate', function () {
                $.ajax({
                    url: location.pathname + '?ajax=1',
                    success: function (data) {
                        $('#content').html(data);
                    }
                });
            });
        });
    </script>

    <!--    Библиотеки Js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>