<?php

class Database{
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databaseName = 'dbquanlybanhang';
    private $charset = 'utf8';

    private $conn;

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        if(!$this->conn){
            $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->databaseName);
            if (mysqli_connect_error()) {
                echo 'Failed: '. mysqli_connect_error();
                die();
            }
            mysqli_set_charset($this->conn,$this->charset);
        }
    }
 
    public function disConnect(){
        if($this->conn)
            mysqli_close($this->conn);
    }

    public function error(){
        if($this->conn)
            return mysqli_error($this->conn);
        else
            return false;
    }

    public function insert($table = '', $data = []){
        $keys = '';
        $values= '';
        foreach ($data as $key => $value) {
            $keys .= ',' . $key;
            $values .= ',"' . mysqli_real_escape_string($this->conn,$value).'"';
        }
        $sql = 'INSERT INTO ' .$table . '(' . trim($keys,',') . ') VALUES (' . trim($values,',') . ')';
        return mysqli_query($this->conn,$sql);
    }
 
    public function update($table = '',$data = [], $id =[]){
        $content = '';
        if(is_integer($id))
            $where = 'id = '.$id;
        else if(is_array($id) && count($id)==1){
            $listKey = array_keys($id);
            $where = $listKey[0].'='.$id[$listKey[0]];
        }else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        foreach ($data as $key => $value) {
            $content .= ','. $key . '="' . mysqli_real_escape_string($this->conn,$value).'"';
        }
        $sql = 'UPDATE ' .$table .' SET '.trim($content,',') . ' WHERE ' . $where ;
        return mysqli_query($this->conn,$sql);
    }
 
    public function delete($table= '', $id = []) {
        $content = '';
        if(is_integer($id))
            $where = 'id = '.$id;
        else if(is_array($id) && count($id)==1){
            $listKey = array_keys($id);
            $where = $listKey[0].'='.$id[$listKey[0]];
        }
        else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'DELETE FROM ' . $table . ' WHERE '. $where;
        return mysqli_query($this->conn,$sql);
    }

    public function getObject($table = ''){
        $sql = 'SELECT * FROM '. $table;
        $data = null;
        if($result = mysqli_query($this->conn,$sql)){
            while($row = mysqli_fetch_object($result)){
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }
    /**
     * getObject lấy hết dữ liệu trong bảng trả về mảng dữ liệu
     * string $table tên bảng muốn lấy dữ liệu
     * array
     */
    public function getArray($table = '') {
        $sql = 'SELECT * FROM '. $table;
        $data = null;
        if($result = mysqli_query($this->conn,$sql)){
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        else
            return false;
    }
    /**
     * getRowObject lấy một dòng dữ liệu trong bảng trả về mảng dữ liệu
     * string $table tên bảng muốn lấy dữ liệu, array|int $id điều kiện
     * object
     */
    public function getRowObject($table = '', $id = []) {
        if(is_integer($id))
            $where = 'id = '.$id;
        else if(is_array($id) && count($id)==1){
            $listKey = array_keys($id);
            $where = $listKey[0].'='.$id[$listKey[0]];
        }
        else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'SELECT * FROM '. $table . ' WHERE '. $where;
        
        if($result = mysqli_query($this->conn,$sql)){
            $data = mysqli_fetch_object($result);
            mysqli_free_result($result);
            return $data;
        }
        else
            return false;
    }
    /**
     * getRowArray lấy một dòng dữ liệu trong bảng trả về mảng dữ liệu
     * string $table tên bảng muốn lấy dữ liệu, array|int $id điều kiện
     * array
     */
    public function getRowArray($table = '', $id = []) {
        if(is_integer($id))
            $where = 'id = '.$id;
        else if(is_array($id) && count($id)==1){
            $listKey = array_keys($id);
            $where = $listKey[0].'='.$id[$listKey[0]];
        }
        else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'SELECT * FROM '. $table . ' WHERE '. $where;
        
        if($result = mysqli_query($this->conn,$sql)){
            $data = mysqli_fetch_array($result);
            mysqli_free_result($result);
            return $data;
        }
        else
            return false;
    }
    /**
     * query thực hiện query
     * string $sql
     * boolean|array
     */
    public function query($sql ='', $return = true){

        if($result = mysqli_query($this->conn,$sql)){
            if($return === true){
                while ($row = mysqli_fetch_array($result)) {
                    $data[] = $row;
                }
                mysqli_free_result($result);
                return $data;
            }else
                return true;
        }else
            return false;
    }
 
    public function __destruct()
    {
        $this->disConnect();
    }
}
    $db= new Database();
    $db->error();
    $db->update($table, $data, $id);
    $db->delete($table, $id);
    $db->getObject($table);

    //insert
    $data= [
    'ID' => '2',
    'Firstname'   => 'nguyen',
    'Lastname'    => 'a',
    'Email' => 'nguyenvana@gmail'
    ];
    $db = new Database();
    if($db->insert('user', $data)){
        echo 'Thêm thành công';
    }else {
        echo "Lỗi: " .$db->error();
    }

    //update
    $data= [
    'ID' => '2',
    'Firstname'   => 'nguyen',
    'Lastname'    => 'a',
    'Email' => 'nguyenvana@gmail'
    ];
    $id = 1;
    $db = new Database();
    if($db->update('user', $data, $id)){
        echo 'Sửa thành công';
    }else {
        echo "Lỗi: " .$db->error();
    }

    //delete
    $id = 1;
    $db = new Database();
    if($db->delete('tbl_news', $id)){
        echo 'Xóa thành công';
    }else {
        echo "Lỗi: " .$db->error();
    }

    //lấy dữ liệu tr3 về mảng
    $db = new Database();
    $data = $db->getObject('tbl_news');
    foreach ($data as $value) {
        echo '____________________________________________ <br/>';
        echo 'ID: ' . $value->id . '<br>';
        echo 'Slug: ' . $value->slug . '<br>';
        echo 'Title: ' .  $value->title . '<br>';
        echo 'Content: ' . $value->content . '<br>';
    }



