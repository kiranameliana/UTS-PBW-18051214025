<?php

include"user.php";

class member extends user{
    
    private $conn;
    private $table_name = "user";

    public function __construct($db){
        $this->conn = $db;
    }
    public $alamat, $telepon;
    public $image;
    
 
    // create product
    function create(){
 
        //write query
       // insert query
        $query = "INSERT INTO " . $this->table_name . "
            SET fname=:fname,lname=:lname, alamat=:alamat,status=:status, telepon=:telepon,
                email=:email, image=:image";
        $stmt = $this->conn->prepare($query);
 
        // posted values
        $this->fname=htmlspecialchars(strip_tags($this->fname));
        $this->lname=htmlspecialchars(strip_tags($this->lname));
        $this->alamat=htmlspecialchars(strip_tags($this->alamat));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->telepon=htmlspecialchars(strip_tags($this->telepon));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->image=htmlspecialchars(strip_tags($this->image));
 
        // to get time-stamp for 'created' field
        $this->timestamp = date('Y-m-d H:i:s');
 
        // bind values 
        $stmt->bindParam(":fname", $this->fname);
        $stmt->bindParam(":lname", $this->lname);
        $stmt->bindParam(":alamat", $this->alamat);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":telepon", $this->telepon);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":image", $this->image);
 
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }
    function readAll($from_record_num, $records_per_page){
 
    $query = "SELECT
                id, fname, lname, alamat, telepon, email
            FROM
                " . $this->table_name . "
            ORDER BY
                fname ASC
            LIMIT
                {$from_record_num}, {$records_per_page}";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    return $stmt;
}
// used for paging products
    public function countAll(){
 
    $query = "SELECT id FROM " . $this->table_name . "";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    $num = $stmt->rowCount();
 
    return $num;
    }
   function readOne(){
 
        $query = "SELECT fname, lname, alamat, email, telepon
            FROM " . $this->table_name . "
            WHERE id = ?
            LIMIT 0,1";
     
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
     
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->fname = $row['fname'];
        $this->lname = $row['lname'];
        $this->alamat = $row['alamat'];
        $this->email = $row['email'];
        $this->telepon = $row['telepon'];
    }
    function update(){
 
    $query = "UPDATE
                " . $this->table_name . "
            SET
                fname = :fname,
                lname = :lname,
                alamat = :alamat,
                email  = :email,
                telepon  = :telepon,
            WHERE
                id = :id";
 
    $stmt = $this->conn->prepare($query);
 
    // posted values
    $this->fname=htmlspecialchars(strip_tags($this->fname));
    $this->lname=htmlspecialchars(strip_tags($this->lname));
    $this->alamat=htmlspecialchars(strip_tags($this->alamat));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->telepon=htmlspecialchars(strip_tags($this->telepon));
    $this->id=htmlspecialchars(strip_tags($this->id));

 
    // bind parameters
    $stmt->bindParam(':fname', $this->fname);
    $stmt->bindParam(':lname', $this->lname);
    $stmt->bindParam(':alamat', $this->alamat);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':telepon', $this->telepon);


    $stmt->bindParam(':id', $this->id);
 
    // execute the query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
// delete the product
function delete(){
 
    $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
     
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->id);
 
    if($result = $stmt->execute()){
        return true;
    }else{
        return false;
    }
}
// read products by search term
public function search($search_term, $from_record_num, $records_per_page){
 
    // select query
    $query = "SELECT
                 p.id, p.fname, p.lname, p.alamat, p.email, p.telepon
            FROM
                " . $this->table_name . " p
                
            WHERE
                p.fname LIKE ? OR p.lname LIKE ?
            ORDER BY
                p.fname ASC
            LIMIT
                ?, ?";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind variable values
    $search_term = "%{$search_term}%";
    $stmt->bindParam(1, $search_term);
    $stmt->bindParam(2, $search_term);
    $stmt->bindParam(3, $from_record_num, PDO::PARAM_INT);
    $stmt->bindParam(4, $records_per_page, PDO::PARAM_INT);
 
    // execute query
    $stmt->execute();
 
    // return values from database
    return $stmt;
}
 
public function countAll_BySearch($search_term){
 
    // select query
    $query = "SELECT
                COUNT(*) as total_rows
            FROM
                " . $this->table_name . " p 
            WHERE
                p.name LIKE ? OR p.description LIKE ?";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind variable values
    $search_term = "%{$search_term}%";
    $stmt->bindParam(1, $search_term);
    $stmt->bindParam(2, $search_term);
 
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    return $row['total_rows'];
}

// will upload image file to server
    // will upload image file to server
    function uploadPhoto()
    {
     
        $result_message="";
     
        // now, if image is not empty, try to upload the image
        if($this->image){
     
            // sha1_file() function is used to make a unique file name
            $target_directory = "uploads/";
            $target_file = $target_directory . $this->image;
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
     
            // error message is empty
            $file_upload_error_messages="";
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check!==false){
                    // submitted file is an image
                }else{
                    $file_upload_error_messages.="<div>Submitted file is not an image.</div>";
                }
                 
                // make sure certain file types are allowed
                $allowed_file_types=array("jpg", "jpeg", "png", "gif");
                if(!in_array($file_type, $allowed_file_types)){
                    $file_upload_error_messages.="<div>Only JPG, JPEG, PNG, GIF files are allowed.</div>";
                }
                 
                // make sure file does not exist
                if(file_exists($target_file)){
                    $file_upload_error_messages.="<div>Image already exists. Try to change file name.</div>";
                }
                 
                // make sure submitted file is not too large, can't be larger than 1 MB
                if($_FILES['image']['size'] > (1024000)){
                    $file_upload_error_messages.="<div>Image must be less than 1 MB in size.</div>";
                }
                 
                // make sure the 'uploads' folder exists
                // if not, create it
                if(!is_dir($target_directory)){
                    mkdir($target_directory, 0777, true);
                }
                // if $file_upload_error_messages is still empty
                if(empty($file_upload_error_messages)){
                    // it means there are no errors, so try to upload the file
                    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
                        // it means photo was uploaded
                    }else{
                        $result_message.="<div class='alert alert-danger'>";
                            $result_message.="<div>Unable to upload photo.</div>";
                            $result_message.="<div>Update the record to upload photo.</div>";
                        $result_message.="</div>";
                    }
                }
                 
                // if $file_upload_error_messages is NOT empty
                else{
                    // it means there are some errors, so show them to user
                    $result_message.="<div class='alert alert-danger'>";
                        $result_message.="{$file_upload_error_messages}";
                        $result_message.="<div>Update the record to upload photo.</div>";
                    $result_message.="</div>";
                }
                 
            }
     
            return $result_message;
    }


}

?> 