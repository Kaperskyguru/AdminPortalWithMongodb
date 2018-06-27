<?php
declare(strict_types=1);
class Database
{
    private $dbhost = DB_HOST;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASS;

    private $dbh;
    private $stmt;
    private $error;
    private $manager;

    public function __construct($table_name = null)
    {
        $dbName = DB_NAME;
        try{
          $this->manager = new MongoDB\Client('mongodb://'.$this->dbuser.':'.$this->dbpass.'@'.$this->dbhost.':27017');
          if ($table_name != null) {
              $this->dbh = $this->manager->$dbName->$table_name;
          } else {
              $this->dbh = $this->manager->$dbName;
          }
        }catch(MongoDB\Exception $e){
          echo $e->getMessage();
        }
    }

    public function createCollection(string $collectionName, array $options = null):bool
    {
        try {
            if ($options != null) {
                $result = $this->dbh->createCollection($collectionName, $options);
            }else {
                $result = $this->dbh->createCollection($collectionName);
            }
            if ($result != null) {
                return true;
            }
        } catch(MongoDB\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function selectCollection(string $collectionName, array $options = null): object
    {
        try {
            if ($options != null) {
                $result = $this->dbh->selectCollection($collectionName, $options);
            }else {
                $result = $this->dbh->selectCollection($collectionName);
            }
            if ($result != null) {
                return $result;
            }
        } catch(MongoDB\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function insertSingle(array $document, array $options = null):object
    {
        try{
            if ($options != null){
                $insertedData = $this->dbh->insertOne($document, $options);
            } else {
                $insertedData = $this->dbh->insertOne($document);
            }
            return $insertedData;
        } catch (MongoDB\Exception $e) {
            echo $e->getMessage();
        }
        return null;
    }

    public function insertMany(array $documents, $options = null):object
    {
        try {
            if ($options != null) {
                $insertedData = $this->dbh->insertMany($documents, $options);
            } else {
                $insertedData = $this->dbh->insertMany($documents);
            }
            return $insertedData;
        } catch (MongoDB\Exception $e) {
            echo $e->getMessage();
        }
        return null;
    }

    public function selectOne(array $filter, array $options = null):object
    {
        try {
            if ($options != null){
                $data = $this->dbh->findOne($filter, $options);
            } else {
                $data = $this->dbh->findOne($filter);
            }
            if ($data != null) {
                return $data;
            }
        } catch (MongoDB\Exception $e) {
            echo $e->getMessage();
        }
        return null;
    }

    public function selectAll($filter = null, $options = null): object
    {
        try {
            if ($options != null && $filter != null){
                $data = $this->dbh->find($filter, $options);
            } elseif ($filter != null) {
                $data = $this->dbh->find($filter);
            } else {
                $data = $this->dbh->find();
            }
            if ($data != null) {
                return $data;
            }
        } catch (MongoDB\Exception $e) {
            echo $e->getMessage();
        }
        return null;
    }

    public function updateOne(array $filter, array $update, array $options = null):object
    {
        try {
            if ($options != null){
                //$update = ['$set' => $update];
                $data = $this->dbh->updateOne($filter, $update, $options);
            } else {
                //$update = ['$set' => $update];
                $data = $this->dbh->updateOne($filter, $update);
            }
            if ($data != null) {
                return $data;
            }
        } catch (MongoDB\Exception $e) {
            echo $e->getMessage();
        }
        return null;
    }

    public function updateMany(array $filter, array $update, array $options = null):object
    {
        try {
            if ($options != null){
                //$update = ['$set' => $update];
                $data = $this->dbh->updateMany($filter, $update, $options);
            } else {
                //$update = ['$set' => $update];
                $data = $this->dbh->updateMany($filter, $update);
            }
            if ($data != null) {
                return $data;
            }
        } catch (MongoDB\Exception $e) {
            echo $e->getMessage();
        }
        return null;
    }

    public function count()
    {
        return $this->dbh->count();
    }
}
