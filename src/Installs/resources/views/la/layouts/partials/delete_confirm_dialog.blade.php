<div class="modal fade" id="ConfirmModal" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">{{trans('view.delete_confirm_title')}} : <span id="item_delete_id"> </span></h4>
			</div>
			<div class="modal-body">
				<div class="box-body">
				<input type="hidden" id="hidden_id"/>
					<h4 class="modal-title" id="myModalLabel">{{trans('view.delete_confirm')}}</h4>
				</div>
			</div>			
			<div class="modal-footer">
				<a class="btn btn-default" data-dismiss="modal">{{trans('view.close')}}</a>
				<button type="button" id="delete-btn" class="btn btn-success" href="#" >{{trans('view.delete')}}</button>
			</div>
		</div>
	</div>
</div>

