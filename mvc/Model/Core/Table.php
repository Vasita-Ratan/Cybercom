<?php

class Model_Core_Table
{
    protected $tableName = null;
    protected $primaryKey = null;
    protected $data = null;
    protected $adapter = null;

    function __construct()
    {
        
    }
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
        return $this;
    }
    public function getTableName()
    {
        return $this->tableName;
    }
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;
        return $this;
    }
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    public function getData($key = null,$optional = null)
    {
    if (!$key) {
       return $this->data;
    }
    if (!array_key_exists($key, $this->data)) {
    return $optional;
    }
    return $this->data[$key];
    }

   public function __set($key, $value)//autometically assign the key and value dynamically becz magic method is use
    {
       $this->data[$key] = $value;//return the key value in array 
       return $this;
    }
    public function __get($key)
    {
        return $this->data[$key];
    }
    public function save(array $data = null)
    {
        if (!$data) 
        {
            $data = $this->getData();
        }
        
        $id = $this->getData($this->getPrimaryKey());
        if (!$id) 
        {
           $id = $this->insert($data);
        } else {
            $this->update($data);
        }
        $this->load($id);
        return $this;
    }
    public function insert(array $data = null)
    {
        if (!$data) 
        {
            $data = $this->getData();
        }
        $query = "INSERT INTO `{$this->getTableName()}` (";
        $query .= implode(",", array_keys($data)) . ') VALUES (';
        $query .= "'" . implode("','", array_values($data)) . "')";
        // echo "<pre>";
        // print_r($query);
        // die();
        return $this->getAdapter()->insert($query);

    }
    public function update(array $data = null,array $condition = null)
    {
        if (!$data) 
        {
            $data = $this->getData();
        }
        if (!$condition) 
        {
            $condition = [
                $this->getPrimaryKey() => $data[$this->getPrimaryKey()],
            ];
        }
        $query = "UPDATE `{$this->getTableName()}` SET ";
        foreach ($data as $key => $value) 
        {
            $query.= "`{$key}`"."='".$value."',";
        }
        $query = substr($query, 0, -1);
        $query .= " WHERE ";
        foreach ($condition as $key => $value) {
            $query .= "`{$key}`"."='".$value."' AND ";
        }
        $query = substr($query, 0, -5);
        return $this->getAdapter()->update($query);
    }
    public function delete($id)
    {
        $id = (int) $id;
        $query = "DELETE FROM `{$this->getTableName()}` WHERE `{$this->getPrimaryKey()}` = '{$id}'";
        return $this->getAdapter()->delete($query);
    }
    public function load($id,$coloumnName = null)
    {
        $id = (int) $id;
        if (!$coloumnName) 
        {
            $coloumnName = $this->getPrimaryKey();
        }
        $query = "SELECT * FROM `{$this->getTableName()}` WHERE `{$coloumnName}` = '{$id}'";
        return $this->fetchRow($query);
    }
    public function fetchRow($query)
    {
        $data = $this->getAdapter()->fetchRow($query);
        if (!$data)
         {
            return false;
        }
        $this->setData($data);
        return $this;
    }
    

    public function fetchAll()
    {
        $query = "SELECT * FROM `{$this->getTableName()}` ORDER BY `{$this->getPrimaryKey()}` DESC";
        $rows = $this->getAdapter()->fetchAll($query);
        if (!$rows) 
        {
            return false;
        }
        foreach ($rows as $key => &$value) {
            $row = new $this;
            $value = $row->setData($value);
        }
        return $rows;
    }


    public function getAdapter()
    {
        if(!$this->adapter)
        {
            $this->setAdapter();
        }
        return $this->adapter;
    }
    public function setAdapter()
    {
       if(!$this->adapter)
       {
           $this->adapter = Mage::getModel('Model_Core_Adapter');

       }
       return $this;
   }

}
?>