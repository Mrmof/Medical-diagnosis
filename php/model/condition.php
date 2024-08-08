<?php 

class Condition{
    public $connection;
    public function __construct()
    {
        $connect = new Config();
        $this->connection = $connect->connection();
    }

    public function condition($conditionName, $temperature, $diagnosis, $symptoms, $medicalHistory, $socialHistory, $treatment){
        if (empty($conditionName)) {
            $_SESSION['condition_error'] = 'Please input conditions';
            echo "<script>window.history.back();</script>";
        }elseif(empty($temperature)) {
            $_SESSION['condition_error'] = 'Please input temperature';
            echo "<script>window.history.back();</script>";
        }elseif(empty($diagnosis)) {
            $_SESSION['condition_error'] = 'Please input diagnosis';
            echo "<script>window.history.back();</script>";
        }elseif(empty($symptoms)) {
            $_SESSION['condition_error'] = 'Please input symptoms';
            echo "<script>window.history.back();</script>";
        }elseif(empty($medicalHistory)) {
            $_SESSION['condition_error'] = 'Please input medical history';
            echo "<script>window.history.back();</script>";
        }elseif(empty($socialHistory)) {
            $_SESSION['condition_error'] = 'Please input social history';
            echo "<script>window.history.back();</script>";
        }elseif(empty($treatment)) {
            $_SESSION['condition_error'] = 'Please input treatment';
            echo "<script>window.history.back();</script>";
        }else{
            $createdAt = new DateTime();
            $createdAt = $createdAt->format('Y-m-d');
            $prepared = "INSERT INTO `coditions`(`conditionName`, `temperature`, `diagnosis`, `symptoms`, `medicalHistory`, `socialHistory`, `createdAt`, `treatment`) VALUES ('$conditionName','$temperature','$diagnosis','$symptoms','$medicalHistory','$socialHistory','$createdAt','$treatment')";
            $sql = $this->connection->query($prepared);
            if($sql == true){
                header('location: http://localhost/medical diagnosis/php/view/admin/create.php');
            }else{
                echo "<script>window.history.back();</script>";
            }
        }
    }
    public function editcondition($conditionName, $temperature, $diagnosis, $symptoms, $medicalHistory, $socialHistory, $treatment, $id){

            $prepared = "UPDATE `coditions` SET `conditionName`='$conditionName',`temperature`='$temperature',`diagnosis`='$diagnosis',`symptoms`='$symptoms',`medicalHistory`='$medicalHistory',`socialHistory`='$socialHistory',`treatment`='$treatment' WHERE id = '$id'";
            $sql = $this->connection->query($prepared);
            if($sql == true){
                header('location: http://localhost/medical diagnosis/php/view/admin/edit.php?id='.$id.'');
            }else{
                echo "<script>window.history.back();</script>";
            }
    }
    public function viewcondition(){
            $prepared = "SELECT * FROM `coditions` ORDER BY id DESC";
            $sql = $this->connection->query($prepared);
            if ($sql->num_rows > 0) {
                $i = 1;
                foreach ($sql as $value) {

                    echo '<tr>
                            <td>'.$i++.'</td>
                            <td>'.$value['diagnosis'].'</td>
                            <td>'.$value['symptoms'].'</td>
                            <td>'.$value['temperature'].'</td>
                            <td>'.$value['treatment'].'</td>
                            <td>'.$value['medicalHistory'].'</td>
                            <td>
                                <div class="actions">
                                    <a href="edit.php?id='.$value['id'].'" class="viewRow">
                                        <i class="bi bi-list text-green"></i>
                                    </a>
                                    <a href="" onclick="collectid('.$value['id'].')" data-bs-target="#delete" data-bs-toggle="modal">
                                        <i class="bi bi-trash text-red"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>';
                }
            }
    }
    public function deletecondition($condition_id){
        $prepared = "DELETE FROM `coditions` WHERE id = '$condition_id'";
        $sql = $this->connection->query($prepared);
        if($sql == true){
            header('location: http://localhost/medical diagnosis/php/view/admin/conditions.php');
        }else{
            echo "<script>window.history.back();</script>";
        }
    }

    public function viewindividualcondition($id){
        $prepared = "SELECT * FROM `coditions` WHERE id = '$id'";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            $value = $sql->fetch_assoc();
        echo '<div class="">
        <form action="<?= WEB_URL ?>/php/controller/editcondition.php" method="post"
            enctype="multipart/form-data">
            <div class="" id="scrollable" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="scrollableLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="content-wrapper-scroll">

                                <!-- Content wrapper start -->
                                <div class="content-wrapper" style="height:auto">
                                    <!-- Row start -->
                                    <div class="row">
                                        <div class="col-sm-4 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-0">
                                                        <label
                                                            class="form-label">Condition
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control"
                                                            name="conditionName"
                                                            placeholder="Enter name of Condition" value='.$value['conditionName'].'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-0">
                                                        <label
                                                            class="form-label">Temperature</label>
                                                        <input type="text"
                                                            class="form-control"
                                                            name="temperature"
                                                            placeholder="Enter Temperature" value='.$value['temperature'].'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-0">
                                                        <label
                                                            class="form-label">Diagnosis</label>
                                                        <input type="text"
                                                            class="form-control"
                                                            name="diagnosis"
                                                            placeholder="Enter diagnosis" value='.$value['diagnosis'].'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-0">
                                                        <label
                                                            class="form-label">Symptoms</label>
                                                        <textarea name="symptoms"
                                                            id=""
                                                            class="form-control">'.$value['medicalHistory'].'</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-0">
                                                        <label
                                                            class="form-label">Medical
                                                            History</label>
                                                        <textarea
                                                            name="medicalHistory"
                                                            id=""
                                                            class="form-control">'.$value['medicalHistory'].'</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-0">
                                                        <label
                                                            class="form-label">Social
                                                            History</label>
                                                        <textarea
                                                            name="socialHistory"
                                                            id=""
                                                            class="form-control">'.$value['socialHistory'].'</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-0">
                                                        <label
                                                            class="form-label">Treatment</label>
                                                        <textarea name="treatment"
                                                            id=""
                                                            class="form-control">'.$value['treatment'].'</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"
                                class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>';}
    }
    public function countcondition(){
        $prepared = "SELECT * FROM `coditions`";
        $sql = $this->connection->query($prepared);
        if ($sql->num_rows > 0) {
            $count = $sql->num_rows;
            return $count;
        }
    }
    
    public function diagnosis($temperature, $symptoms, $medicalHistory, $socialHistory) {
        // Determine the temperature range based on input
        if (empty($temperature)) {
            $_SESSION['diagnosis'] = 'Please input your current temperature';
            echo "<script>window.history.back();</script>";
        }elseif (empty($symptoms)) {
            $_SESSION['diagnosis'] = 'Please input observed symptoms';
            echo "<script>window.history.back();</script>";
        }elseif (empty($medicalHistory)) {
            $_SESSION['diagnosis'] = 'Please input your medical history';
            echo "<script>window.history.back();</script>";
        }elseif (empty($socialHistory)) {
            $_SESSION['diagnosis'] = 'Please input your social history';
            echo "<script>window.history.back();</script>";
        }else{
            if ($temperature == 'normal') {
                $temp_range = 37;
            } elseif ($temperature == 'hot') {
                $temp_range = 40;
            } else {
                $temp_range = 45;
            }
            // Convert input symptoms, medical history, and social history to arrays
            $symptomsArray = array_map('trim', explode(',', strtolower($symptoms)));
            $medicalHistoryArray = array_map('trim', explode(',', strtolower($medicalHistory)));
            $socialHistoryArray = array_map('trim', explode(',', strtolower($socialHistory)));
            // Prepare and execute the SQL query
            $prepared = "SELECT * FROM `coditions`"; // Correct table name
            $sql = $this->connection->query($prepared);
        
            if ($sql->num_rows > 0) {
                $matchingConditions = [];
        
                foreach ($sql as $value) {
                    // Parse the temperature range from the database
                    $spliter = explode(' ', $value['temperature']);
                    $min_temp = floatval($spliter[0]);
                    $max_temp = floatval($spliter[2]);

                    // Check if the temperature range matches
                    if ($temp_range <= $max_temp) {
                        // Convert stored symptoms, medical history, and social history to arrays
                        $storedSymptoms = array_map('trim', explode(',', strtolower($value['symptoms'])));
                        $storedMedicalHistory = array_map('trim', explode(',', strtolower($value['medicalHistory'])));
                        $storedSocialHistory = array_map('trim', explode(',', strtolower($value['socialHistory'])));
        
                        
        
                        // Check if any input symptom matches stored symptoms
                        $symptomMatch = false;
                        foreach ($symptomsArray as $inputSymptom) {
                            if (in_array($inputSymptom, $storedSymptoms)) {
                                $symptomMatch = true;
                                break;
                            }
                        }
        
                        // If symptoms match, check medical history
                        if ($symptomMatch) {
                            $medicalHistoryMatch = false;
                            foreach ($medicalHistoryArray as $inputMedicalHistory) {
                                if (in_array($inputMedicalHistory, $storedMedicalHistory)) {
                                    $medicalHistoryMatch = true;
                                    
                                    break;
                                }
                            }
        
                            // If medical history matches, check social history
                            if ($medicalHistoryMatch) {
                                $socialHistoryMatch = false;
                                foreach ($socialHistoryArray as $inputSocialHistory) {
                                    if (in_array($inputSocialHistory, $storedSocialHistory)) {
                                        $socialHistoryMatch = true;
                                        
                                        break;
                                    }
                                }
        
                                // If all conditions match, add to matching conditions
                                if ($socialHistoryMatch) {
                                    echo "Match found for condition: " . $value['conditionName'] . "<br>";
                                    $matchingConditions[] = $value;
                                    
                                    break; // Stop checking other conditions if match is found
                                }
                            }
                        }
                    }
                }
        
                // Check if there are any matching conditions
                if (!empty($matchingConditions)) {
                    // Output the first matching condition name (or handle as needed)
                    
                    $_SESSION['medicalCondition']= $matchingConditions[0];
                    header('location: http://localhost/medical diagnosis/php/view/dashboard/result.php');
                } else {
                    $_SESSION['medicalCondition'] = "No medical conditions found";
                    header('location: http://localhost/medical diagnosis/php/view/dashboard/result.php');
                }
            } else {
                echo "No records found in the database.<br>";
            }
        }
    
    
    }
    
    
    
}