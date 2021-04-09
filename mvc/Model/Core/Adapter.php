<?php

class Model_Core_Adapter
{
    private $config = [
        'host' => 'localhost:3307',
        'username' => 'root',
        'password' => '',
        'database' => 'phpproject'
    ];


    private $connect = null;

     public function __construct()
    {
        $this->connection();
        return $this;
    }

    public function connection()
    {
        $connect = new mysqli($this->config['host'],
        $this->config['username'],
        $this->config['password'],
        $this->config['database']);
        $this->setConnect($connect);

        if (!$this->getConnect()) {
            return false;
        }
        return $this;
    }

    public function getConnect()
    {
        return $this->connect;
    }

    public function setConnect(mysqli $connect)
    {
        $this->connect = $connect;
        return $this;

    }

    public function isConnected()
    {
        if (!$this->getConnect()) {
            return false;
        }
        return true;
    }

    public function insert($query)
    {
        if (!$this->isConnected()) 
        {
            $this->connection;
        }
        $result = $this->getConnect()->query($query);
        if ($result)
         {
            return true;
        }
        return false;
    }
    
    public function update($query)
    {
        if (!$this->isConnected()) 
        {
            $this->connection();
        }
        $result = $this->getConnect()->query($query);
        if ($query) {
            return true;
        }
        return false;
    }
    
    public function delete($query)
    {
        if (!$this->isConnected()) 
        {
            $this->connection();
        }
        $result = $this->getConnect()->query($query);
        if ($query) 
        {
            return true;
        }
        return false;
    }

    public function fetchRow($query)
    {
        if (!$this->isConnected()) 
        {
            $this->connection();
        }
        $result = $this->getConnect()->query($query);
        
        if($result && $this->getConnect()->affected_rows == 1)
        {
            return $result = $result->fetch_assoc();
            
         }
        return false;
    }
    
    public function fetchPairs($query)
    {
        if (!$this->isConnected()) 
        {
            $this->connection();
        }
        $result = $this->getConnect()->query($query);
        $rows = $result->fetch_all();
        if(!$rows)
        {
            return $rows;
        }
        $columns = array_column($rows, '0');
        $values = array_column($rows, '1'); 
      
        return array_combine($columns, $values);
    }

    public function fetchAll($query)
    {

        if (!$this->isConnected()) 
        {

            $this->connection();
        }
         $result = $this->getConnect()->query($query);
             if ($result) 
                {   

                    return $result = $result->fetch_all(MYSQLI_ASSOC);
                }
                return false;
    }
    
}

?>