<?php
    session_start();
    include 'includes/db_connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .qrcode-text-btn {
            display: inline-block;
            height: 1em;
            width: 1em;
            background: url(qr_icon.svg) 50% 50% no-repeat;
            cursor: pointer;
        }

        .qrcode-text-btn > input[type=file] {
            position: absolute;
            overflow: hidden;
            width: 1px;
            height: 1px;
            opacity: 0;
        }

        .qrcode-text {
            padding-right: 1.7em;
            margin-right: 0;
            vertical-align: middle;
        }

        .qrcode-text + .qrcode-text-btn {
            width: 1.7em;
            margin-left: -1.7em;
            vertical-align: middle;
        }
    </style>

    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
</head>
<body>
    <a href="backend/log_out.php">Log Out</a>
    <input type=text class=qrcode-text>
    <label class=qrcode-text-btn>
        <input type=file accept="image/*" capture=environment onchange="openQRCamera(this);" tabindex=-1>
    </label>

        <script>
            function openQRCamera(node) {
            var reader = new FileReader();
            reader.onload = function() {
                node.value = "";
                qrcode.callback = function(res) {
                if(res instanceof Error) {
                    alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
                } else {
                    node.parentNode.previousElementSibling.value = res;
                }
                };
                qrcode.decode(reader.result);
            };
            reader.readAsDataURL(node.files[0]);
            }
        </script>

</body>
</html>