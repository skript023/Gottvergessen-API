<div class="alert alert-light" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="alert-heading">{{ session()->get('header') }}</h4>
    <hr>
    <p class="mb-0">
        {{ session()->get('message') }}
    </p>
</div>
  
<script>
    $('.alert').show().delay(3000).faceOut(300);
</script>