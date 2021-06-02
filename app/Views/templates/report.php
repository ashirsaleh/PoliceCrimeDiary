<!DOCTYPE HTML>
<html>

<head>

    <title><?php echo isset($title) ? $title : "Police Crime Diary"; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css') ?>">

    <style type="text/css">
    /*css for body form */
    body {
        background: #fff;
        padding: 0px;
        margin: 0px;
        font-family: 'nunito', san-serif;
        font-size: 16px;
    }

    /*css for submit button*/
    button:hover {
        background: #fff;
        color: #5d8ffc;
        border: 1px solic #5d8ffc;
        cursor: pointer;
    }

    /*css for report class*/
    html {
        /* The viewer implements a custom pinch zoom. */
        touch-action: pan-x pan-y;
    }

    .report {
        background-color: rgb(212, 212, 212);
        color: var(--primary-text-color);
        line-height: 154%;
        margin: 12px;
    }

    .main {
        width: auto;
        height: 90%;
        margin-left: 20%;
        margin-right: 20%;
        padding-left: 2%;
        padding-right: 2%;
        margin-top: 3%;
        margin-bottom: 3%;
        background-color: white;
        border-style: solid;
        border-width: 2px;
        border-left-width: 10px;
        border-right-width: 10px;
        border-color: black;
        box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0), 0 2px 4px 0 rgba(0, 0, 0, 0.1);

    }

    h1 {
        text-align: center;
        margin: 30px;
        font-size: 55px;
    }

    /*style for text color*/
    aa {
        text-decoration: none;
    }

    ;

    /*css for hadding tag */
    h1,
    label {
        font-family: roboto;
        color: #663b95;
        text-align: center;
    }

    /*css for button*/
    .btn {
        border-radius: 18px;
        padding: 15px;
        background: #663b95;
        color: white;
        margin-top: 40px;
    }

    label {
        font-weight: bold;

    }

    .text {
        text-align: center;
    }

    img {
        height: 100px;
        margin-left: 12px;
        align-content: left;
    }
    </style>

</head>

<body class="report">
    <div class="main">
        <hr noshade style="color:solidblack" size=5 style="top: 10px;">
        <form action="report.php" method="POST" enctype="multipart/form-data">
            <img src="assets/images/police.png">
            <h1>POLICE REPORT.</h1>
            <hr noshade style="color:black" size=5><br>

            <label for="Registration Number"><b>Case No:</b></label>
            <input type="text" placeholder="" required="">


            <label for="date"><b>Date:</b></label>
            <input type="Date" name="date" required=""><br><br>
            <label for="Programme"><b>Reporting Officer:</b></label>
            <input type="text" name="reportingOfficer" required="">


            <label for="name"> <b>Prepared By:</b> </label>
            <input type="text" placeholder="" name="name" required><br><br>
            <label for="incident"><b>Incident: </b></label><br>
            <textarea name="incident" cols="80" maxlength="1000"></textarea><br><br>

            <hr noshade style="color:black" size=5>

            <label for="incident"><b>Detail of Event: </b></label><br>
            <textarea name="incident" cols="89" rows="5" maxlength="2000"></textarea><br><br>

            <label for="incident"><b>Area Taken: </b></label><br>
            <textarea name="incident" cols="89" rows="5" maxlength="2000"></textarea><br><br>

            <label for="incident"><b>Summary: </b></label><br>
            <textarea name="incident" cols="89" rows="5" maxlength="2000"></textarea><br>

            <button type="submit" class="btn">Submit</button><br>


            <hr noshade style="color:black" size=5>
            <br>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <strong>Copyright &copy; <?= Date('Y') ?>.</strong>
            Police Crime Diary.
        </div>
    </footer>
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