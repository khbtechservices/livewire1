@push('styles')
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
@endpush

<div
    wire:ignore
    x-data
    x-init = "

        FilePond.setOptions({
            server: {
                process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload( '{{ $attributes['id'] }}', file, load, progress )
                },
                revert: (filename, load, error) => {
                    @this.removeUpload('{{ $attributes['id'] }}', filename, load)
                },
            },
        });
        FilePond.create( $refs.input );

    "
>

    <input type="file" x-ref="input">

</div>
