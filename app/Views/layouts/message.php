<?php if (session()->has("success")) : ?>
    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
        <?=session("success")?>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php elseif (session()->has("warning")) : ?>
    <div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" role="alert">
        <?=session("warning")?>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>