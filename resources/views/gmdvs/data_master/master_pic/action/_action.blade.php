<div style="text-align: center; ">
    <div class="btn-group">
    <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-search"></i>
    </button>
        <div class="dropdown-menu">
            <a href="#" style="color: black;" data-toggle="tooltip" row-id="{{ $model->id }}" data-placement="top"  title="View" class="dropdown-item view-pic"> <i class="ti-eye"></i> View</a>
            <a href="#" style="color: black;" data-toggle="tooltip" row-id="{{ $model->id }}" data-placement="top" title="Edit" class="dropdown-item edit-pic"> <i class="ti-pencil-alt"></i> Edit</a>
            <a href="#" style="color: black;" data-toggle="tooltip" row-id="{{ $model->id }}" data-placement="top" title="Void" class="dropdown-item voided-pic"> <i class="ti-trash"></i> Void</a>
        </div>
    </div>
</div>
