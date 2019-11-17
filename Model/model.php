<?php
    function m_view(){
        include "connection.php";
        $query = mysqli_query($databse, "SELECT * FROM student");
        $result = [];
        if ($query && mysqli_num_rows($query)){
            foreach($query as $row){
                $result[] = $row;
            }
        }
        return $result;
    }

    function m_add($data){
        $name = $_POST['user'];
        $class = $_POST['class'];
        $score = $_POST['score'];
        $sex = $_POST['sex'];

        include "connection.php";
        $query = "INSERT INTO student(name, class, mark, sex)
                  VALUES('$name', '$class', '$score', '$sex')";
        $result = mysqli_query($databse, $query);
        return $result;
    }
?>