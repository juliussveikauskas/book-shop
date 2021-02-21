<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reviewModalLabe">Report book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('user.books.report')}}">
                <div class="modal-body">

                    @csrf
                    <input type="hidden" name="book_id" value="{{$book->id}}">
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea required name="comment" class="form-control" id="comment" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Report</button>
                </div>
            </form>
        </div>
    </div>
</div>
