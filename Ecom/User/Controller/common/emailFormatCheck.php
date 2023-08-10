<?php
function isValidEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        list($user, $domain) = explode('@', $email);
        if ($domain === 'gmail.com') {
            return true;
        }
    } else {
        return false;
    }
}
?>