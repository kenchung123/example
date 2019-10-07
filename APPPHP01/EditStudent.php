<?php
include_once("header.php");
include_once("nav.php");
?>
<form action="/action_page.php">
    <label for="fname">Từ năm</label>
    <input type="text"  name="tunam" placeholder="Từ năm..">

    <label for="lname">Đến năm</label>
    <input type="text"  name="dennam" placeholder="Đến năm..">

    <label for="lname">Cấp</label>
    <input type="text"  name="cap" placeholder="Cấp..">
    
    <label for="lname">Nơi học</label>
    <input type="text"  name="noihoc" placeholder="Nơi học..">
   
  
    <input type="submit" value="Save">
    <input type="submit" value="Cancel">
  </form>