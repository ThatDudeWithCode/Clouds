<?php


namespace App\Admin\Classes\User;


class User
{
    /**
     * @var array|null
     */
    private $user;
    private $con;

    /**
     * User constructor.
     * @param $con
     * @param $user
     */
    public function __construct($con, $user)
    {
        $this->con = $con;
        $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$user'");
        $this->user = mysqli_fetch_array($user_details_query);
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->user['username'];
    }

    /**
     * @return mixed
     */
    public function getNumPosts()
    {
        $username = $this->user['username'];
        $query = mysqli_query($this->con, "SELECT num_posts FROM users WHERE username='$username'");
        $row = mysqli_fetch_array($query);
        return $row['num_posts'];
    }

    /**
     * @return string
     */
    public function getFirstAndLastName()
    {
        $username = $this->user['username'];
        $query = mysqli_query($this->con, "SELECT first_name, last_name FROM users WHERE username='$username'");
        $row = mysqli_fetch_array($query);
        return $row['first_name'] . " " . $row['last_name'];
    }

    public function isClosed()
    {
        $username = $this->user['username'];
        $query = mysqli_query($this->con, "SELECT user_closed FROM users WHERE username='$username'");
        $row = mysqli_fetch_array($query);

        if($row['user_closed'] == 'yes')
        {
            return true;
        } else
        {
            return false;
        }
    }
}