<?php
function getYoutubeId($url) {
    // handle link youtu.be
    if (preg_match('/youtu\.be\/([^?]+)/', $url, $matches)) {
        return $matches[1];
    }

    // handle link youtube.com/watch?v=
    if (preg_match('/v=([^&]+)/', $url, $matches)) {
        return $matches[1];
    }

    return $url; // fallback
}
