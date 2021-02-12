<?php

class Test extends Conn
{
    public function getUser()
    {
        $query = "SELECT * FROM pengguna";
        $data = $this->connect()->query($query);

        foreach ($data as $data) {
            echo $data['username'];
        }

    }
    public function getUserSMT($search)
    {
        $search = "%$search%";
        $query = "SELECT * FROM pengguna where username like ?";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$search]);

        $names = $stmt->fetchAll();

        foreach ($names as $key) {
            echo $key['username'];
        }

    }
}
