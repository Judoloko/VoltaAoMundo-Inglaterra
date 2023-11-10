<?php
require_once "Classes/Feedback.php";
$id = $_POST['id'];
$status = $_POST['status_comentario'];
$feedback = new Feedback($id);
if ($status != 'respondido') {
  $feedback->alterarStatus("respondido");
} else {
  $feedback->alterarStatus("não respondido");
}
?>