<?php
require_once 'components/navbar.php';
// require_once 'utils/styles.php';

$usn=$_POST['usn'];


include_once 'connection.php';

$q = $conn->query("SELECT * FROM registered r,staff_coordinator s ,event_info ef ,student_coordinator st,events e where e.event_id= ef.event_id and e.event_id= s.event_id and e.event_id= st.event_id and r.usn= '$usn' and r.event_id=e.event_id");
$result = $q->fetch_all();
// var_dump($result);
?>

<style>

    table, tr, td, th{
        border: 1px solid black;
    }
    td, th{
        padding: 10px;
    }
</style>

<div class = "content">
            <div class = "container">
            <h1> Registered Events</h1>
             <?php
if (count($result) > 0) {
    // var_dump($result);
?> 
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            
                            <th>Event_name</th>             
                           <th>Student Co-ordinator</th>
                            <th>Staff Co-ordinator</th>
                           
                            <th>Date</th>
                        
                            <th>Time</th>
                            <th>location </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($i = 0; $i < count($result); $i++){
                        
                            echo '<tr>';
                            echo '<td>' . $result[$i][16] . '</td>';                    
                            echo '<td>' . $result[$i][12] . '</td>';
                            echo '<td>' . $result[$i][4] . '</td>';
                           
                            echo '<td>'.$result[$i][8].'</td>';
                            echo '<td>'.$result[$i][9].'</td>';
                            echo '<td>'.$result[$i][10].'</td>';
                            
                         
                            echo '</tr>';  
                    }
                      
                        ?>
                    </tbody>
                </table>
                    <?php }
                    else{
                    echo 'Not Yet Rgistered any events';
                    
                    }?>
                
               
            </div>
        </div>
 