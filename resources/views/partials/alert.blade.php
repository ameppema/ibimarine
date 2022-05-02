@if ($errors->any())
<script>   
Swal.fire({
  title: 'Error!',
  html: "{!! implode('', $errors->all(':message <br><br>')) !!}",
  icon: 'error',
  width: 500,
  showConfirmButton: false,
  toast: true,
  position: 'top',
  timer: 3000
});
</script>
@endif

@if (session()->has('success'))
<script>   
  Swal.fire({
    title: 'Exito!',
    text: "{{session()->get('success')}}",
    icon: 'success',
    showConfirmButton: false,
    toast: true,
    position: 'top',
    timer: 2000
  });
  </script>
@endif
