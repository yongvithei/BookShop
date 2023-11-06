<td class="text-center">
    <div class="btn-group">
        <button type="button" class="btn btn-sm btn-alt-secondary" onClick="previewInvoice({{ $order_id }})" data-bs-toggle="tooltip" title="Preview">
            <i class="fa fa-print"></i>
        </button>
        <button type="button" class="btn btn-sm btn-alt-secondary" onClick="downloadInvoice({{ $order_id }})" data-bs-toggle="tooltip" title="Download">
            <i class="fa fa-download"></i>
        </button>
    </div>
</td>