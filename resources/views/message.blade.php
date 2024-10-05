@if (Session::has('success'))
    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('error'))
    <div id="error-alert" class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('info'))
    <div id="info-alert" class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ Session::get('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<script>
    setTimeout(function() {
        var successAlert = document.getElementById('success-alert');
        if (successAlert) {
            successAlert.remove();
        }
    }, 3000); // Remove success alert after 3 seconds

    setTimeout(function() {
        var errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
            errorAlert.remove();
        }
    }, 3000); // Remove error alert after 3 seconds

    setTimeout(function() {
        var infoAlert = document.getElementById('info-alert');
        if (infoAlert) {
            infoAlert.remove();
        }
    }, 3000); // Remove info alert after 3 seconds
</script>

<style>
    .fade {
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }
</style>
