<?php
include './db/db.php';

function getData()
{
  $connec = getStart();
  $data = mysqli_query($connec, 'SELECT * FROM rooms');
  $rooms = mysqli_fetch_all($data, MYSQLI_ASSOC);
  mysqli_free_result($data);
  mysqli_close($connec);

  return $rooms;
};

?>