<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($title) ? $title : "Police Crime Diary"; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css') ?>">
    <style>
    body {
        background: #cfcfcf;
        padding: 0px;
        margin: 0px;
        font-family: 'nunito', san-serif;
        font-size: 16px;
    }


    input,
    button {
        font-family: 'nunito', san-serif;
        font-weight: 700;
    }

    .main-div {
        width: 30%;
        margin: 0px auto;
        margin-top: 100px;
        padding: 20px;
        background: #fff;
        border: 1px solid transparent;
    }

    .main-div input {
        display: block;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #fff;
        padding: 15px;
        outline: none;
        width: 100%;
        margin-bottom: 20px;

    }


    .main-div button {
        background: #663b95;
        color: #fff;
        border: 0px;
        border-radius: 5px;
        padding: 15px;
        display: block;
        width: 100%;
        transition: 0.3s;
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
    }

    .main-div button:hover {
        background: #fff;
        color: #5d8ffc;
        border: 1px solic #5d8ffc;
        cursor: pointer;
    }


    .main-div input:focus {
        border: 1px solid #777;
    }

    .button {
        background: #663b95;
        color: #fff;
        border: 0px;
        border-radius: 5px;
        padding: 15px;
        display: block;
        width: 90%;
        transition: 0.3s;
        -webkit-transition: 0.3s;
        -moz-transition: 0.3s;
        font-family: 'nunito', san-serif;
        font-weight: 700;

    }

    .supbtn {
        color: #fff;
    }

    button:hover {
        background: #fff;
        color: #5d8ffc;
        border: 1px solic #5d8ffc;
        cursor: pointer;
    }

    a {
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    label {
        font-family: roboto;
        color: #663b95;
        text-align: center;
    }

    .btn {
        border-radius: 5px;
        padding: 10px;
        background: #663b95;
        color: white;
        margin-top: 40px;
    }

    label {
        font-weight: bold;

    }

    footer {
        text-align: center;
        color: white;
        line-height: 50px;
    }


    .text {
        text-align: center;
    }

    .footer {
        color: #663b95;
        height: 60px;
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="content">
        <div class="main-div">
            <h3>POLICE CRIME DIARY</h3>
            <input type="text" placeholder="Police_Id" />
            <input type="password" placeholder="Password" />

            <button type="submit" class="btn">Login</button><br>
            <!--<button  type="submit" class="btn">Sign up for account</button><br>-->
            <footer class="footer">
                <div class="footer-content">
                    <strong>Copyright &copy; <?= Date('Y') ?>.</strong>
                    Police Crime Diary.
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url('assets/js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?> "></script>
    <script src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
</body>

</html>