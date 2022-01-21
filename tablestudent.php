<?php 
    //tableau nemurique
   //tableau 
   echo"<pre>";
   $payant=array(
       array (
           'Name'=>'username',
           'Email'=>'user@email.com',
           'Phone'=>7305477760,
           'Enroll number'=>1234567305477760,
           'Date of admission'=>'08-Dec, 2021',
           ),
       array (
        'Name'=>'username',
        'Email'=>'karthi@gmmail.com',
        'Phone'=>7305477760,
        'Enroll number'=>1234567305477760,
        'Date of admission'=>'08-Dec, 2021',
           ), 
       array (
        'Name'=>'username',
        'Email'=>'karthi@gmmail.com',
        'Phone'=>7305477760,
        'Enroll number'=>1234567305477760,
        'Date of admission'=>'08-Dec, 2021',
           ), 
       array (
        'Name'=>'username',
        'Email'=>'karthi@gmmail.com',
        'Phone'=>7305477760,
        'Enroll number'=>1234567305477760,
        'Date of admission'=>'08-Dec, 2021',
           ), 
       array (
        'Name'=>'username',
        'Email'=>'karthi@gmmail.com',
        'Phone'=>7305477760,
        'Enroll number'=>1234567305477760,
        'Date of admission'=>'08-Dec, 2021',
           ), 
       array (
        'Name'=>'username',
        'Email'=>'karthi@gmmail.com',
        'Phone'=>7305477760,
        'Enroll number'=>1234567305477760,
        'Date of admission'=>'08-Dec, 2021',
           ), 
       array (
        'Name'=>'username',
        'Email'=>'karthi@gmmail.com',
        'Phone'=>7305477760,
        'Enroll number'=>1234567305477760,
        'Date of admission'=>'08-Dec, 2021',
           ), 
       
       array (
        'Name'=>'username',
        'Email'=>'karthi@gmmail.com',
        'Phone'=>7305477760,
        'Enroll number'=>1234567305477760,
        'Date of admission'=>'08-Dec, 2021',
           ), 
       );
       echo"<pre>";
       print_r($payant);
    echo $payant[1]['tlf'];
  
   ?>
    <br>
   <table  border="1" width="100%" align="center">
       <tr style="background: gray;">
        <td>Name</td>
        <td>Email</td>
        <td> Phone</td>
        <td>Enroll number</td>
        <td>Date of admission</td>
       </tr>
       <tbody>
       <?php 
            foreach ($payant as $key => $p) {
       ?>
        <tr >
        <td><?php echo$p['Name'];?> </td>
        <td><?php echo$p['Email']; ?></td>
        <td><?php echo$p['Phone']; ?></td>
        <td><?php echo$p['Enroll number']; ?></td>
        <td><?php echo$p['Date of admission']; ?></td>
       </tr>
       <?php } ?>
       </tbody>

   </table>