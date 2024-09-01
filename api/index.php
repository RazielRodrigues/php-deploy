<?php

declare(strict_types=1);

$key = openssl_pkey_new();

var_dump($key);

echo 'Raziel Rodrigues';

?>

<html>

<button onclick="navigator.vibrate(30000)">Vibrate</button>
<button onclick="navigator.vibrate([200, 100, 200])">Vibrate Long</button>


<script>
    if ("vibrate" in navigator) {
        alert("Vibration API is supported");
    } else {
        alert("Vibration API is not supported");
    }
</script>

</html>