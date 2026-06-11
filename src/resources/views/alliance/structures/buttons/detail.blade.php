<button data-toggle="modal" data-target="#fitting-detail" class="btn btn-sm btn-link"
   data-url="{{ route('seatcore::alliance.view.structures.show', ['alliance' => $row->corporation->alliance_id, 'structure_id' => $row->structure_id]) }}">
  <i class="fa fa-wrench"></i>
</button>
