
<div class="modal fade" id="exampleModalCenter{{$beer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Eliminazione Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         Sei sicuro di voler eliminare l'item ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>

            <form action="{{route('beers.destroy', compact('beer'))}}" method="post">
                <button type="submit" class="btn btn-primary">SI
                @csrf
                @method('DELETE')
                </button>
            </form>

        </div>
      </div>
    </div>
  </div>
