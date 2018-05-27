<div class="row" style="margin-bottom: -40px;background-color: #f1f1f1ff;text-align: center;position: relative;">
    <div class="col-md-2">
        @include('portal.sidebar')
    </div>
    <div class="col-md-10">
        @include($view, ['data' => $data])
    </div>
</div>