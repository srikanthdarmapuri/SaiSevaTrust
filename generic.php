<?php

function getDonorsAndEvents() {
  $db = (new PDO('mysql:host=localhost;dbname=sst_database', 'root', 'dambo'));

  $tmp = $db->query("SELECT * FROM donors WHERE Is_Actv = 1 ORDER BY Tm DESC LIMIT 0, 10");
  $d = $tmp->fetchAll(PDO::FETCH_ASSOC);

  $temp = $db->query("SELECT * FROM events WHERE Is_Actv = 1 ORDER BY Tm DESC LIMIT 0, 10");
  $e = $temp->fetchAll(PDO::FETCH_ASSOC);
  return array("events" => $e, "donors" => $d);
}

