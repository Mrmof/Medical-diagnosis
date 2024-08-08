<?php 

class Appointment{
    public $connection;
    public function __construct()
    {
        $connect = new Config();
        $this->connection = $connect->connection();
    }

    public function fixappoinment($fullname, $phone, $appointmentDate, $time, $description, $user_id){
        if (empty($fullname)) {
            $_SESSION['appointment_error'] = 'Please input your fullname';
            echo "<script>window.history.back();</script>";
        }elseif(empty($phone)) {
            $_SESSION['appointment_error'] = 'Please input phone number';
            echo "<script>window.history.back();</script>";
        }elseif(empty($appointmentDate)) {
            $_SESSION['appointment_error'] = 'Please select a date';
            echo "<script>window.history.back();</script>";
        }elseif(empty($time)) {
            $_SESSION['appointment_error'] = 'Please select a time';
            echo "<script>window.history.back();</script>";
        }elseif(empty($description)) {
            $_SESSION['appointment_error'] = 'Please describe your current state of health';
            echo "<script>window.history.back();</script>";
        }else{
            $createdAt = new DateTime();
            $createdAt = $createdAt->format('Y-m-d');
            $prepared = "INSERT INTO `appointment`(`fullname`, `phone`, `date`, `time`, `doctor`, `status`, `description`, `createdAt`,`user_id`) VALUES ('$fullname','$phone','$appointmentDate','$time','','pending','$description','$createdAt', '$user_id')";
            $sql = $this->connection->query($prepared);
            if($sql == true){
                header('location: http://localhost/medical diagnosis/php/view/dashboard/check.php?success_modal=true');
            }else{
                echo "<script>window.history.back();</script>";
            }
        }
    }
    public function userappointment($user_id){
        $prepared = "SELECT * FROM `appointment` WHERE user_id = '$user_id' ORDER BY id DESC";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            $i = 1;
            foreach ($sql as $value) {

                echo '<tr>
                        <td>'.$i++.'</td>
                        <td>'.$value['fullname'].'</td>
                        <td>'.$value['date'].'</td>
                        <td>'.$value['time'].'</td>
                        <td>'.$value['doctor'].'</td>
                        <td>'.$value['status'].'</td>
                    </tr>';
            }
        }
    }
    public function countuserappointment($user_id){
        $prepared = "SELECT * FROM `appointment` WHERE user_id = '$user_id'";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            $count = $sql->num_rows;
            return $count;
        }
    }
    public function countappointment(){
        $prepared = "SELECT * FROM `appointment`";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            $count = $sql->num_rows;
            return $count;
        }else{
            return 0;
        }
    }
    public function countpendingappointment(){
        $prepared = "SELECT * FROM `appointment` WHERE status = 'pending'";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            $count = $sql->num_rows;
            return $count;
        }else{
            return 0;
        }
    }
    public function countapproveappointment(){
        $prepared = "SELECT * FROM `appointment` WHERE status = 'approved'";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            $count = $sql->num_rows;
            return $count;
        }else{
            return 0;
        }
    }
    public function countapprovedappointment($user_id){
        $prepared = "SELECT * FROM `appointment` WHERE user_id = '$user_id' && status = 'approved'";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            $count = $sql->num_rows;
            return $count;
        }else{
            return 0;
        }
    }
    public function viewappointment(){
        $prepared = "SELECT * FROM `appointment` ORDER BY id DESC";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            $i = 1;
            foreach ($sql as $value) {

                echo '<tr>
                        <td>'.$i++.'</td>
                        <td>'.$value['fullname'].'</td>
                        <td>'.$value['phone'].'</td>
                        <td>'.$value['date'].'</td>
                        <td>'.$value['time'].'</td>
                        <td>'.$value['status'].'</td>
                        <td>'.$value['description'].'</td>';
                        
                        if ($value['status'] == 'pending') {
                            echo '<td> 
                                        <a href="http://localhost/medical%20diagnosis/php/controller/approveappointment.php?id='.$value['id'].'" class="text-success">
                                            Approve
                                        </a>
                                </td>';
                        }
        
                echo   '</tr>';
            }
        }
    }
    public function approveappoinment($id){
        $prepared = "UPDATE `appointment` SET `status`='approved' WHERE id = '$id'";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            header('location: http://localhost/medical%20diagnosis/php/view/admin/appointment.php');
        }else{
            echo "<script>window.history.back();</script>";
        }
    }
   
    
    
    
}