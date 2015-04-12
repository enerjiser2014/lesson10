<?php

class Dbclass
{
    public function __construct($dbhost, $dbname, $dbuser, $dbpassword)
    {
        $this->connect($dbhost, $dbname, $dbuser, $dbpassword);
    }

    protected  function connect($dbhost, $dbname, $dbuser, $dbpassword)
    {
        mysql_connect($dbhost, $dbuser, $dbpassword);
        mysql_select_db($dbname);
    }

    public  function sqlExec($sql)
    {
        return mysql_query($sql);
    }

    public   function getRecords($sql)
    {
        $res = mysql_query($sql);
        $ret = [];
        while (false !== ($row = mysql_fetch_array($res))) {
            $ret[] = $row;
        }
        return $ret;
    }

    public   function getRecord($sql)
    {
        $this->getRecords($sql)[0];
    }
}

?>
