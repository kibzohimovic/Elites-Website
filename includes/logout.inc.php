<?php

session_start();
session_unset();
session_destroy();
header("Location: ../other template site.html.php");