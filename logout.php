<?php

session_start();

session_unset();

session_destroy();

header('Location: ../Est-rouge_PHP_Intern_SimpleCRUDApp/index.php');
