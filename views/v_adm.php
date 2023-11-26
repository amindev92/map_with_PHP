<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Map Panel</title>
    <link href="favicon.png" rel="shortcut icon" type="image/png">

    <link rel="stylesheet" href="assets/css/styles.css<?= "?v=" . rand(99, 9999999) ?>" />
    <style>
        body {
            background: #f2f2f2;
        }

        a {
            text-decoration: none;
        }

        h1 {
            text-align: center;
        }

        .main-panel {
            width: 1000px;
            margin: 30px auto;
        }

        .box {
            background: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0px 3px 3px #EEE;
            margin-bottom: 20px;
        }

        table.tabe-locations {
            width: 100%;
            border-collapse: collapse;
        }

        .statusToggle {
            background: #eee;
            color: #686868;
            border: 0;
            padding: 3px 12px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 400;
            font-family: iransans;
            display: inline-block;
            margin: 0 3px;
        }

        .statusToggle.active {
            background: #0c8f10;
            color: #ffffff;
        }

        .statusToggle:hover,
        button.preview:hover {
            opacity: 0.7;
        }

        button.preview {
            padding: 0 10px;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        tr {
            line-height: 36px;
        }

        tr:nth-child(2n) {
            background: #f7f7f7;
        }

        td {
            padding: 0 5px;
        }

        .modal-overlay {
            position: fixed;
            z-index: 999;
            background: rgba(0, 0, 0, 0.7);
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            padding: 2rem;
        }

        iframe#mapWivdow {
            position: absolute;
            width: 100%;
            height: 70%;
            left: 50px;
            top: 40px;
            z-index: 100;
        }

        .modal-overlay .modal .close{
            position: absolute;
            top: 0;
            left: 50px;
            font-size: 40px;
            z-index: 99999;
            cursor: pointer;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="main-panel">
        <h1>Admin Panel</h1>
        <div class="box">
            <a class="statusToggle" href="<?= BASE_URL ?>" target="_blank">🏠</a>
            <a class="statusToggle active" href="?status=1">Active</a>
            <a class="statusToggle" href="?status=0">Inactive</a>
            <a class="statusToggle" href="?logout=1" style="float:left" target="_blank">Exit</a>
        </div>
        <div class="box">
            <table class="tabe-locations">
                <thead>
                    <tr>
                        <th style="width:40%">Place</th>
                        <th style="width:15%" class="text-center">Date Registered</th>
                        <th style="width:10%" class="text-center">lat</th>
                        <th style="width:10%" class="text-center">lng</th>
                        <th style="width:25%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <tr>
                            <td>Place Name</td>
                            <td class="text-center">Date</td>
                            <td class="text-center">Lat</td>
                            <td class="text-center">Lng</td>
                            <td>
                                <button class="statusToggle active" data-loc='111'>Active</button>
                                <button class="statusToggle" data-loc='111'>Inactive</button>
                                <button class="preview" data-loc='111'>👁️‍🗨️</button>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>

    </div>

    <div class="modal-overlay" style="display: none;">
        <div class="modal">

            <span class="close">x</span>
            <div class="modal-content">
                <iframe id='mapWivdow' src="#" frameborder="0"></iframe>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.preview').click(function() {
                $('.modal-overlay').fadeIn();
                $('#mapWivdow').attr('src', '<?= BASE_URL ?>');
            });
            $('.modal-overlay .close').click(function() {
                $('.modal-overlay').fadeOut();
            });
        });
    </script>
</body>

</html>