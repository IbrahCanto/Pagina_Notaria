@if (session()->has('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Su mensaje no ha sido enviado',
        text: "{{ Session::get('error') }}",
    })
</script>
@endif