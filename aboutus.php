<?php include("conn.php")?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" href="resources/downtowntroylogo.jpg">
    <link rel="stylesheet" href="troy.css">
    <title>Downtown Troy</title>
</head>

<body>

    <?php include("navbarbase.php")?>

     <a id="MoreInfo"></a>
      <section class =about>
        <h2> About us </h2>
      </section>


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">     
       Our website includes many restaurants downtown and upcoming events catered to the Troy community and RPI students!
</div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
    We have four team members:
      Ridhee Shinde is currently an ITWS and Business Management Dual. Her favorite part about building this website was the styling
      and the cool submit form api!
        <br><br>
      Yash Choksey is an ITWS/CS dual. His major contributions included the dining/restaurant pages, as well as working on devops and managing files regarding the virtual machine.
        <br><br>
      Eric is an ITWS/ECSE student at RPI. He worked on the login system and account management.
        <br><br>
      Shirley is a CS/ITWS student. She worked on displaying events and adding events.

  </div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
    Email: downtowntroywebsys@gmail.com
    <br>
    Phone : 123-456-7890
  </div>
</div>

<a id="Addbusiness"></a>
<h2>Add your business</h2>

<form action="https://formsubmit.co/ef4af8b0432db22a37629a42b036758e  " method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput4">Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput4" name = "Name" placeholder="First and Last Name">

      <label for="exampleFormControlInput1">Phone Number</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name = "Phone Number" placeholder="999-999-9999">
    
      <label for="exampleFormControlInput5">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput5" name = "Email Address" placeholder="name@example.com">

      <label for="exampleFormControlInput6">Address</label>
      <input type="text" class="form-control" id="exampleFormControlInput6" name= "Address" placeholder="123 Address Street">

      <label for="exampleFormControlInput2">Restaurant Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput2" name = "Restaurant Name" placeholder="Restaurant Name">

      <label for="exampleFormControlInput3">Website</label>
      <input type="website" class="form-control" id="exampleFormControlInput3" name ="Website" placeholder="Website Link">

    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Price Level</label>
      <select class="form-control" id="exampleFormControlSelect1" name="Price">
        <option>$</option>
        <option>$$</option>
        <option>$$$</option>
        <option>$$$$</option>
        <option>$$$$$</option>
      </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Restaurant's Cuisine</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Restaurant's Cuisine" placeholder="Cuisine">
      </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Upload an Image</label>
        <input type="file" accept="image/*" class="form-control-file" name="Image File" id="exampleFormControlFile1">
      </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Restaurant Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name = "Restaurant Description"rows="3"></textarea>
    </div>
    <button type ="submit" class="btn btn-primary formsubmit">Submit</button>
  </form>

      

    
<?php include('foot.php'); ?>
