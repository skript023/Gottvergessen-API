<!-- Modal -->
@foreach ($data as $datum)
    <div class="modal fade" id="{{ $tag.$datum->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">@yield('modal-header')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-5">
                <p class="text-dark">
                    @yield('modal-message')
                </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{$url.$datum->id}}"  type="button" class="btn btn-success">Ok</a>
                </div>
            </div>
        </div>
    </div>
@endforeach