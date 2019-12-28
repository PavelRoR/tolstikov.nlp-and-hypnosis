<?php

    $dates = array(strtotime('2020-01-14'),strtotime('2020-01-15'),strtotime('2020-01-16'),strtotime('2020-01-17'));
    $now = strtotime('now');

    If ($now < $dates[0]) {
        header('location: ');
    }
    elseIf (($now >= $dates[0])&&($now <$dates[1])) {
        header('location: ');
    }
    elseIf (($now >= $dates[1])&&($now <$dates[2])) {
        header('location: ');
    }
    elseIf (($now >= $dates[2])&&($now <$dates[3])) {
        header('location: ');
    }
    else {
        header('location: https://tolstikov.mastervision.su/nlp-and-hypnosis/course/');
    }
?>