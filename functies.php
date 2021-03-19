<?php
    function query($statement){
        global $sth;
        global $pdo;
        $sth = $pdo->prepare($statement);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }
?>