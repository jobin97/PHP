<?php 
       $title = 'View Record' ;
       require_once 'includes/header.php' ;
       require_once 'db/conn.php';

       $result= $crud->getAttendees();
  ?>
<table class="table">
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Email Address</th>
        <th>Contact</th>
        <th>Specialty</th>
        <th>Action</th>
        
</tr>
<?php while($r=$result->fetch(PDO::FETCH_ASSOC)){?>
<tr>
<td><?php echo $r['attendee']?></td>
        <td><?php echo $r['firstname']?></td>
        <td><?php echo $r['lastname']?></td>
        <td><?php echo $r['dateofbirth']?></td>
        <td><?php echo $r['email_id']?></td>
        <td><?php echo $r['contact']?></td>
        <td><?php echo $r['name']?></td>
        <td><a href="view.php" class="btn btn-primary">View</a></td>
</tr>
    <?php }?>
</table>
<br>
      <br>
      <br>
   <?php require_once 'includes/footer.php' ?>