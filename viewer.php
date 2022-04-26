<pre>
<?php
try {
    $f = new SplFileObject('log');

    $limit = 100;

    while(!$f->eof() && $limit--){
        $line = json_decode($f->fgets(), true);
        if(!$line) continue;
        echo sprintf(
                "%s\n%s<hr>",
                $line['timestamp'],
                $line['payload']
        );
    }

}catch(\RuntimeException $e){
    // nope
}

?>
</pre>
<script>
    setTimeout(function(){location.reload();}, 1000);
</script>
