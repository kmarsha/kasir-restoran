<script>
    @if (Session::has('success'))
      var msg = "{{ session('success') }}";
      Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: msg,
          timer: 3000,
          showConfirmButton: false,
      })
    @endif
    @if (Session::has('error'))
      var msg = "{{ session('error') }}";
      Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: msg,
          timer: 3000,
          showConfirmButton: false,
      })
    @endif
    @if (Session::has('warning'))
      var msg = "{{ session('warning') }}";
      Swal.fire({
          icon: 'warning',
          title: 'Warning!',
          text: msg,
          timer: 3000,
          showConfirmButton: false,
      })
    @endif
</script>