<div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
        </button>
        <span>
            <b> Success - </b> {{ session('success') }}</span>
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-warning">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
        </button>
        <span>
            <b> Warning - </b> {{ session('error') }}</span>
    </div>
    @endif
</div>
