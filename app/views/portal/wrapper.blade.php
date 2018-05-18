<div class="col-md-12" style="margin-bottom: 40px;background-color: #f1f1f1ff;text-align: center;">
    <div class="col-md-2">
        @include('portal.sidebar')
    </div>
    <div class="col-md-10">

        @include('portal.my-profile', ['profile' => $profile])
    </div>
</div>