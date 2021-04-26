<?php

function redirect($redirect = null)
{
    if (is_null($redirect)) {
        return header('Location:/');
    }
    return header("Location:$redirect");
}
