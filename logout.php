<?php
    session_start();
    unset($_SESSION["user"]);
    echo "Ваша сессия завершена!!!";
