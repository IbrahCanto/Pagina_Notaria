@if (Session::has('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Éxito',
        text: "{{ Session::get('success') }}",
    })
</script>
@endif