<div class="form-group row">
    <label class="col-form-label col-lg-2">Image</label>
    <div class="col-lg-10">
        <div class="uniform-uploader">
            <input type="file" name = "image" class="d-inline form-control-uniform" style="display:block;" data-fouc="">
            <span class="filename" style="user-select: none;">No file selected</span>
            <span class="action btn btn-light legitRipple d-block" style="user-select: none;">Choose File</span>
        </div>
        <p class="d-block" style="display:block;">{{$slot}}</p>
    </div>
</div>