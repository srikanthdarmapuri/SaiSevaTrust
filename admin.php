<?php
  if (isset($_POST['login'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
      setcookie('admin', 'admin', time() + (86400), "/admin.php");
      $login = true;
    } else {
      $error = "Invalid credentials!!.";
    }
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
          <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"></h4>
                      </div>
                      <div class="modal-body">
                          <textarea></textarea>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                      </div>
                  </div>

              </div>
          </div>
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
              <th>Image</th>
              <th>Description</th>
              <th>Action</th>
              <?php foreach ($data['events'] as $index => $evnt) { ?>
              <tr id="<?= $evnt['Id']?>">
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
              <th>Image</th>
              <th>Description</th>
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
              <tr><td colspan="5" style="text-align: center"><button>New</button></td></tr>
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
  ?>