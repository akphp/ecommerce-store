@if(session()->has('Add'))
{{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('Add') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> --}}

<script>
    window.onload = function() {
        notif({
            msg: "{{ session()->get('Add') }}",
            type: "success",
            clickToHide: true,
            autoHide: true,
            autoHideDelay: 5000,
            arrowShow: true,
            arrowSize: 5,
            showAnimation: 'slideDown',
            showDuration: 400,
            hideAnimation: 'slideUp',
            hideDuration: 200,
            gap: 2
        })
    }
</script>

@endif

@if(session()->has('delete'))
<script>
    window.onload = function() {
        notif({
            msg: "{{ session()->get('delete') }}",
            type: "error",
            clickToHide: true,
            autoHide: true,
            autoHideDelay: 2000,
            arrowShow: true,
            arrowSize: 5,
            showAnimation: 'slideDown',
            showDuration: 400,
            hideAnimation: 'slideUp',
            hideDuration: 200,
            gap: 2
        })
    }
</script>

@endif

@if(session()->has('edit'))
{{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('edit') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> --}}

<script>
    window.onload = function() {
        notif({
            msg: "{{ session()->get('edit') }}",
            type: "success"
        })
    }
</script>
@endif