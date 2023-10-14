<td class="text-center">
    <div class="btn-group">
        <button type="button" class="btn btn-sm btn-alt-secondary" onClick="approveFunc({{ $id }})"
            data-bs-toggle="tooltip" title="Approve">
            <i class="far fa-circle-check"></i>
        </button>
        <button type="button" class="btn btn-sm btn-alt-secondary" onClick="deleteFunc({{ $id }})"
            data-bs-toggle="tooltip" title="Remove">
            <i class="fa fa-fw fa-times"></i>
        </button>
    </div>
</td>