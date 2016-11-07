<?php
  if (isset($_POST['login'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
      setcookie('admin', 'admin', time() + (86400), "/admin.php");
      $login = true;
    } else {
      $error = "Invalid credentials!!.";
    }
  }
  else if(isset($_POST['nevt'])) {
    $this->createEvent();
  }
  else if(isset($_POST['ndonr'])) {
    $this->createDonor();
  }
  else if(isset($_POST['eevt'])) {
    $this->editEvent();
  }
  else if(isset($_POST['edonr'])) {
    $this->editDonor();
  }

  if (!isset($_COOKIE['admin'])) {
    $login = false;
  }
  else {
    $login = true;
  }
?>
 <html>
    <head>
      <title>Admin</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <style>
              html, body {
                  width: 100%;
                  height: 100%;
                  font-family: "Helvetica Neue", Helvetica, sans-serif;
                  color: #444;
                  -webkit-font-smoothing: antialiased;
                  background: #f0f0f0;

              }

              #container {
                  position: fixed;
                  width: 340px;
                  height: 280px;
                  top: 50%;
                  left: 50%;
                  margin-top: -140px;
                  margin-left: -170px;
                  background: #fff;
                  border: 1px solid #ccc;
              }

              form {
                  margin: 0 auto;
                  margin-top: 20px;
              }

              label {
                  color: #555;
                  display: inline-block;
                  margin-left: 18px;
                  padding-top: 10px;
                  font-size: 14px;
              }


              input {
                  font-family: "Helvetica Neue", Helvetica, sans-serif;
                  font-size: 12px;
                  outline: none;
              }

              input[type=text],
              input[type=password] {
                  color: #777;
                  padding-left: 10px;
                  margin: 10px;
                  margin-top: 12px;
                  margin-left: 18px;
                  width: 290px;
                  height: 35px;
                  border: 1px solid #c7d0d2;
                  border-radius: 2px;
              }

              input[type=submit] {
                  float: right;
                  margin-right: 30px;
                  margin-top: 20px;
                  width: 80px;
                  height: 30px;
                  font-size: 14px;
                  font-weight: bold;
                  color: #fff;
                  background-color: #9ca0a2; /*IE fallback*/
                  border-radius: 1px;
                  border: 1px solid #9ca0a2;
                  cursor: pointer;
              }
              
              table {
                border-collapse: collapse;
              }
              
              table, th, td {
                  border: 1px solid black;
              }

          </style>
      </head>
      <body>
          <div class="modal fade" id="myModal" role="dialog"></div>
<?php if(!$login) { ?>
          <div id="container">
              <form method="post" action="admin.php">
                  <input type="text" name="login" value="login" hidden>
                   <label for="username">User name:</label>
                  <input type="text" id="username" name="username">
                  <label for="password">Password:</label>
                  <input type="password" id="password" name="password">
                  <div id="lower">
                      <input type="submit" value="Login">
                  </div>
                  <p style="color: red; text-transform: bold; text-align: center;"><?= $error ?></p>
              </form>
          </div>
<?php } else { 
  
   $data = getDonorsAndEvents();
  ?>
          <div id="">
          <h2>Events</h2>
          <table id="events">
              <tbody>
              <th>S No</th>
              <th>Description</th>
              <th>Image</th>
              <th>Action</th>
              <?php foreach ($data['events'] as $index => $evnt) { ?>
              <tr data-info='<?= json_encode($evnt)?>' id="<?= $evnt['Id']?>">
                  <td><?= $index+1 ?></td>
                  <td><?= $evnt['Desc'] ?></td>
                  <td><img src="<?= $evnt['Img'] ?>"</td>
                  <td><button class="edt">Edit</button> <button class="rmv">Remove</button></td>
                </tr>
              <?php } ?>
                <tr><td colspan="5" style="text-align: center"><button class="new">New</button></td></tr>
              </tbody>
          </table>
          
          <h2>Donors</h2>
          <table id="donors">
              <tbody>
              <th>S No</th>
              <th>Description</th>
              <th>Image</th>
              <th>Email</th>
              <th>Action</th>
              <?php foreach ($data['donors'] as $index => $donor) { ?>
              <tr id="<?= $donor['Id'] ?>">
                  <td><?= $index+1 ?></td>
                  <td><?= $donor['Desc'] ?></td>
                  <td><img src="<?= $donor['Img'] ?>"</td>
                  <td><?= $donor['Email'] ?></td>
                  <td><button class="edt">Edit</button> <button class="rmv">Remove</button></td>
                </tr>
              <?php } ?>
              <tr><td colspan="5" style="text-align: center"><button class="new">New</button></td></tr>
              </tbody>
          </table>
          </div>
<?php } ?>
      <script src="js/jquery.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="js/admin.js"></script>      
    </body>
  </html> 
  
  
  <?php
  
  function getDonorsAndEvents() {
    $db = (new PDO('mysql:host=localhost;dbname=sst_database', 'root', 'dambo'));
    
    $tmp = $db->query("SELECT * FROM donors WHERE Is_Actv = 1 ORDER BY Tm DESC");
    $d = $tmp->fetchAll(PDO::FETCH_ASSOC);
    
    $temp = $db->query("SELECT * FROM events WHERE Is_Actv = 1 ORDER BY Tm DESC");
    $e = $temp->fetchAll(PDO::FETCH_ASSOC);
    return array("events" => $e, "donors" => $d);
  }
  
  function createEvent() {
    $db = getDB();
    $time = time();
    $id = md5($time."NeWeVnT".  rand(21, 521));
    $desc = $_POST['dsc'];
    $img = $_POST['img'];
    $sts = $db->query("INSERT INTO events VALUES('.$id.', ".$db->quote($desc).", ".$db->quote($img).", 1 '.$time.')");
    if($sts) {
      return 1;
    }
    else {
      return 0;
    }
  }
  
  function editEvent() {
    $db = getDB();
    $id = $_POST['id'];
    $desc = $_POST['dsc'];
    $img = $_POST['img'];
    $sts = $db->query("UPDATE events SET Desc = ".$db->quote($desc).", Img = ".$db->quote($img)." WHERE Id = ".$db->quote($id));
    if($sts) {
      return 1;
    }
    else {
      return 0;
    }
  }
  
  function createDonor() {
    $db = getDB();
    
    $db = getDB();
    $time = time();
    $id = md5($time."NeWeVnT".  rand(21, 521));
    $desc = $_POST['dsc'];
    $img = $_POST['img'];
    $email = $_POST['eml'];
    $sts = $db->query("INSERT INTO donors VALUES('.$id.', ".$db->quote($desc).", ".$db->quote($img).", ".$db->quote($email).", 1 '.$time.')");
    if($sts) {
      return 1;
    }
    else {
      return 0;
    }
  }
  
  function editDonor() {
    $db = getDB();
    
    $db = getDB();
    $id = $_POST['id'];
    $desc = $_POST['dsc'];
    $img = $_POST['img'];
    $email = $_POST['eml'];
    $sts = $db->query("UPDATE donors SET Desc = ".$db->quote($desc).", Img = ".$db->quote($img).", Email = ".$db->quote($email)." WHERE Id = ".$db->quote($id));
    if($sts) {
      return 1;
    }
    else {
      return 0;
    }
  }
  
  function getDB() {
    $db = (new PDO('mysql:host=localhost;dbname=sst_database', 'root', 'dambo'));
  }
  ?>