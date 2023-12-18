<?php
class Classhandle {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function addData($nama, $ttl, $usia, $jk, $asal) {
        $connection = $this->data->getConnection();

        $nama = $connection->real_escape_string($nama);
        $ttl = $connection->real_escape_string($ttl);
        $usia = $connection->real_escape_string($usia);
        $jk = $connection->real_escape_string($jk);
        $asal = $connection->real_escape_string($asal);

        $existingData = $connection->query("SELECT * FROM data WHERE nama = '$nama'");
        
        if ($existingData->num_rows == 0) {
            $query = "INSERT INTO data (nama, ttl, usia, jk, asal) VALUES (?, ?, ?, ?, ?)";
            
            $stmt = $connection->prepare($query);
            $stmt->bind_param("ssiss", $nama, $ttl, $usia, $jk, $asal);
            
            if ($stmt->execute()) {
                // Query executed successfully
            } else {
                // Handle error
            }

            $stmt->close();
        }
    }

    public function getData() {
        $connection = $this->data->getConnection();
        $result = $connection->query("SELECT * FROM data");

        $info = array();
        while ($row = $result->fetch_assoc()) {
            $info[] = $row;
        }
        return $info;
    }

    public function removeData($nama) {
        $connection = $this->data->getConnection();
        $nama = $connection->real_escape_string($nama);

        $query = "DELETE FROM data WHERE nama = ?";
        
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $nama);
        
        if ($stmt->execute()) {
            // Query executed successfully
        } else {
            // Handle error
        }

        $stmt->close();
    }

    public function registerUser($username, $hashedPassword) {
        $connection = $this->data->getConnection();
        $username = $connection->real_escape_string($username);

        $query = "INSERT INTO akun (username, password) VALUES (?, ?)";
        
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ss", $username, $hashedPassword);
        
        if ($stmt->execute()) {
            // Query executed successfully
        } else {
            // Handle error
        }

        $stmt->close();
    }

    public function validateUser($username, $password) {
        $connection = $this->data->getConnection();
        $username = $connection->real_escape_string($username);
        $password = $connection->real_escape_string($password);

        $query = "SELECT * FROM akun WHERE username = '$username'";
        $result = $connection->query($query);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return password_verify($password, $row['password']);
        } else {
            return false;
        }
    }
}
?>