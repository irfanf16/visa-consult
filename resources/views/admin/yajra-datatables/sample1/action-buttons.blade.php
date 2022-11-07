<a href='{{ URL::to("/admin/categories/$id/edit") }}' class="btn btn-sm btn-soft-info"
    title="Go back to categories listing page">
    Edit
</a>
<form action='{{ URL::to("/admin/categories/$id") }}' method="post" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-soft-danger">
        Delete
    </button>
</form>
