<td class="text-center">
    <div class="btn-group">
        <button type="button" class="btn btn-sm btn-alt-secondary" onClick="viewFunc({{ $id }})" data-bs-toggle="modal" data-bs-target="#modal_order">
            <i class="fa fa-eye"></i>
        </button>
        <button type="button" class="btn btn-sm btn-alt-secondary" onClick="downloadInvoice({{ $id }})"
            data-bs-toggle="tooltip" title="Invoice">
            <i class="fa fa-file-invoice"></i>
        </button>
    </div>
</td>
