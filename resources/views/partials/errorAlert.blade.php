@if ($errors->any())
<script>   
Swal.fire({
  title: '¡Error!',
  html: "{!! implode('', $errors->all(':message <br><br>')) !!}",
  icon: 'error',
  width: 500,
  showConfirmButton: false,
  position: 'center',
  timer: 3000
});
</script>
@endif