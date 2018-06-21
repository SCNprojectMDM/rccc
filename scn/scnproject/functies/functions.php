<?php
function isLoggedIn()
{
    if(isset($_SESSION['username']) && isset($_SESSION['username']))
        return true;

    return false;
}

function isNotLoggedIn()
{
if(!isset($_SESSION['user_id']) && !isset($_SESSION['username']))
        return true;

    return false; 
}
function isAdmin() {

    if(isset($_SESSION['rank'])) {

        $rank = $_SESSION['rank']; 

        if($rank === 'Administrator')
            return true;
    }

    return false;
}
