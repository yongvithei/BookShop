<td class="text-center">
    <div class="btn-group">
    <button type="button" class="btn btn-sm btn-alt-secondary" onClick="viewFunc({{ $id }})" data-bs-toggle="tooltip" title="View">
            <i class="fa fa-eye"></i>
        </button>
        <a type="button" class="btn btn-sm btn-alt-secondary" onClick="editFunc({{ $id }})" data-bs-toggle="tooltip" title="Edit">
            <i class="fa fa-fw fa-pencil-alt"></i>
        </a>
        <button type="button" class="btn btn-sm btn-alt-secondary" onClick="deleteFunc({{ $id }})" data-bs-toggle="tooltip" title="Remove">
            <i class="fa fa-fw fa-times"></i>
        </button>
    </div>
</td>
