<?php

    $expires = new DateTime('+1 day');

     setcookie('username', 'ricosuave', $expires->getTimestamp(), '/', null, null, true );

    echo $_COOKIE['username'];





?>