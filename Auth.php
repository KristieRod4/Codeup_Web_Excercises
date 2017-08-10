<?php
require_once 'Log.php';
require_once '../Input.php';

/**
 * A utility class for handling common authorization tasks
 */
class Auth
{
    /** @var string a hash of the string 'password' */
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
    public static $username = 'guest';

    /**
     * Attempt to log in
     *
     * A login attempt is successful if the passed username matches the static
     * username property and the passed password is verified against the hash in
     * the static password property
     *
     * On a successful attempt, will set the 'LOGGED_IN_USER' key in the session
     *
     * Will log all attempts using an instance of the Log class
     *
     * @param string $username the username to check
     * @param string $password the password to check
     */
    public static function attempt($username, $password)
    {
        // TODO: check if the passed username matches the static username
        //       property
        // TODO: use the `password_verify` function to check if the passed
        //       password matches the static password property
        // TODO: create an instance of the Log class to log a message of whether
        //       or not the login attempt was successful or not
        // TODO: if the username and password match, set the 'LOGGED_IN_USER'
        //       key in the session to the passed username
        //password_verify($password, self::$password)
            $log = new Log()

        if(($username == self::$username) && (password_verify($password, self::$password))
        {
            $_SESSION['LOGGED_IN_USER'] = $username;
            $log->info("$username has sucessfully logged in!");
            return true;

        } else {
            $log->error("$username failed to login!");
            return false;
        }
    }

    /**
     * Check whether the user is logged in or not
     *
     * @return bool whether or not the user is logged in
     */
    //'LOGGED_IN_USER' will be the $key we pass through
    public static function check($key)
    {
        // TODO: return a boolean value based on whether or not the
        //       'LOGGED_IN_USER' key is present in the session

        return isset($_SESSION['logged_in_user']);
        

    }

    /**
     * Get the currently logged in user
     *
     * @return string|null
     */
    public static function user($key, $default = 0)
    {
        // TODO: return the value associated with the 'LOGGED_IN_USER' key in
        //       the session, or null if it is not set

        if(isset($_SESSION['logged_in_user']) {
                return $_REQUEST[$key];
        } else {
            return $default;
        }
    }

    /**
     * Log the user out of the applicaiton by recreating the session
     */
    public static function logout()
    {
        // TODO: destroy and re-create the session
    }
}
