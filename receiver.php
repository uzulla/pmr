<?php
file_put_contents("log", json_encode(
    [
        'timestamp'=> date("Y-m-d H:i:s"),
        'payload'=>$_POST['payload']
    ]
).PHP_EOL, FILE_APPEND);
