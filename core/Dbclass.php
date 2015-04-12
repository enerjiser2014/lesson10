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

    protected  function addRecord($sql)
    {
        return mysql_query($sql);
    }

    protected  function getRecords($sql)
    {
        $res = mysql_query($sql);
        $ret = [];
        while (false !== ($row = mysql_fetch_array($res))) {
            $ret[] = $row;
        }
        return $ret;
    }

    protected  function getRecord($sql)
    {
        $this->getRecords($sql)[0];
    }
}

?>
