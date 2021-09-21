<?PHP
header("location: ./client/admin_login.php");
?>

<!-- FIXME -->
<script>
    function myFunction() {
  var txt;
  if (confirm("Are you sure ")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  txt = document.querySelector("#deleteAlter").setAttribute("href","")
}
</script>

href="../process/deleteMember.php?id=<?=$row['id']?>