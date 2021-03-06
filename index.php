<?php
if (isset($_GET['id'])) {
?>
    <!DOCTYPE html>
    <html lang="en" class="h-100">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <title>InfoTag</title>
    </head>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #84fab0;
            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
            background-attachment: fixed;
        }
    </style>
    <script>
        function onclick_function(URL) {
            window.open(URL);
        }
    </script>

    <body class="container gradient-custom h-100">
        <div class="d-block d-md-none">
            <br>
            <div class="row align-items-center rounded-circle">
                <div class="col-5">
                    <img src="img/ava.jpg" class="rounded-circle shadow-4" style="width: 150px;" alt="Avatar" />
                </div>
                <div class="col-7 ">
                    <p style="font-size: larger; font-weight: bold;">InfoTag: <br> Tag by your way</p>
                </div>
            </div>
            <div>
                <p class="col-7" style="font-size: larger;">Nguyễn Duy Thanh <br>Contact me</p>
            </div>
            <hr>
            <table class="table" style="height: 75%;">
                <tr onclick="onclick_function('https://www.facebook.com/thanh.tahnha/')">
                    <td align="center">
                        <i class="bi-facebook" style="font-size: 2em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Facebook</h1>
                    </td>
                </tr>
                <tr onclick="onclick_function('https://www.instagram.com/dthanh.nek/')" )>
                    <td align="center">
                        <i class="bi-instagram" style="font-size: 2em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Instagram</h1>
                    </td>
                </tr>
                <tr onclick="onclick_function('https://www.linkedin.com/in/thanh-nguyen-0a479a1b1/')">
                    <td align="center">
                        <i class="bi-linkedin" style="font-size: 2em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Linkedin</h1>
                    </td>
                </tr>
                <tr onclick="onclick_function('https://github.com/Snoobdog10x')">
                    <td align="center">
                        <i class="bi-github" style="font-size: 2em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Github</h1>
                    </td>
                </tr>
                <tr onclick=" window.location = 'mailto:duythanh1565@gmail.com'">
                    <td align="center">
                        <i class="bi-envelope" style="font-size: 2em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Gmail</h1>
                    </td>
                </tr>
                <!-- <tr onclick=" onclick_function('../aboutme')">
                <td align="center">
                    <i class="bi-file-person" style="font-size: 2em;"></i>
                </td>
                <td style="vertical-align: middle;">
                    <h1>Detail about me</h1>
                </td>
            </tr> -->
            </table>
        </div>
        <div class="d-none d-md-block">
            <br>
            <div class="row align-items-center">
                <div class="col-3 align-items-center">
                    <img src="img/ava.jpg" class="rounded-circle shadow-4" style="width: 150px;" alt="Avatar" />
                </div>
                <div class="col-8">
                    <h1>InfoTag Tag by your way</h1>
                    <h3>Nguyễn Duy Thanh</h3>
                </div>
                <br>
                <h3>Contact me</h3>
            </div>
            <hr>
            <table class="table table-hover">
                <tr onclick="onclick_function('https://www.facebook.com/thanh.tahnha/')">
                    <td align="center" style="vertical-align: middle;">
                        <i class="bi-facebook" style="font-size: 3em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Facebook</h1>
                    </td>
                </tr>
                <tr onclick="onclick_function('https://www.instagram.com/dthanh.nek/')" )>
                    <td align="center" style="vertical-align: middle;">
                        <i class="bi-instagram" style="font-size: 3em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Instagram</h1>
                    </td>
                </tr>
                <tr onclick="onclick_function('https://www.linkedin.com/in/thanh-nguyen-0a479a1b1/')">
                    <td align="center" style="vertical-align: middle;">
                        <i class="bi-linkedin" style="font-size: 3em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Linkedin</h1>
                    </td>
                </tr>
                <tr onclick="onclick_function('https://github.com/Snoobdog10x')">
                    <td align="center" style="vertical-align: middle;">
                        <i class="bi-github" style="font-size: 3em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Github</h1>
                    </td>
                </tr>
                <tr onclick=" window.location = 'mailto:duythanh1565@gmail.com'">
                    <td align="center" style="vertical-align: middle;">
                        <i class="bi-envelope" style="font-size: 3em;"></i>
                    </td>
                    <td style="vertical-align: middle;">
                        <h1>Gmail</h1>
                    </td>
                </tr>
                <!-- <tr onclick=" onclick_function('../aboutme')">
                <td align="center">
                    <i class="bi-file-person" style="font-size: 2em;"></i>
                </td>
                <td style="vertical-align: middle;">
                    <h1>Detail about me</h1>
                </td>
            </tr> -->
            </table>
        </div>
    </body>

    <!-- End of .container -->

    </html>
<?php
} else {
}
?>