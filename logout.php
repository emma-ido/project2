<?php

if(session_status() == 2) {
    session_abort();
}

header("Location: index.html");
?>