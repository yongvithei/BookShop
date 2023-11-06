<td class="text-center">
    <div class="btn-group">
        <button type="button" class="btn btn-sm btn-alt-secondary" onClick="downloadInvoice({{ $order_id }})" data-bs-toggle="tooltip" title="Edit">
            <i class="fa fa-print"></i>
        </button>
        <button type="button" class="btn btn-sm btn-alt-secondary" onClick="previewInvoice({{ $order_id }})" data-bs-toggle="tooltip" title="Remove">
            <i class="fa fa-download"></i>
        </button>
    </div>
</td>