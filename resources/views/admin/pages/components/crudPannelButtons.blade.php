 
    <!-- <a type="button" class='badge badge-pill badge-success' data-toggle="modal" data-value={{ $data->id }} id="btndetailModel"
        data-target="#detailModel">
         View
    </a>
  -->


 
    <a class='badge badge-pill badge-primary' data-value={{ $data->id }} href={{ route($model . '.edit', $data->id) }}>
        Edit
    </a>
 

 
    <a class='badge badge-pill badge-danger delete delete-confirm' data-id="{{ $data->id }}" data-value="{{ ucfirst($model) }}"
        data-action="{{ $model . '/' . $data->id }}">
        Delete
    </a>
 

<script>
    $('.delete-confirm').on('click', function(event) {
        event.preventDefault();
        var current_object = $(this);

        swal({

            title: "Are you sure?",

            text: "You will not be able to recover this imaginary file!",

            type: "error",

            showCancelButton: true,



            cancelButtonClass: '#DD6B55',

            confirmButtonColor: '#dc3545',

            confirmButtonText: 'Delete!',

        }).then((result) => {

            if (result) {

                var action = current_object.attr('data-action');

                var token = jQuery('meta[name="csrf-token"]').attr('content');
                var model = current_object.attr('data-value');
                var id = current_object.attr('data-id');

                $.ajax({
                    type: 'POST',
                    url: action,
                    data: {
                        _method: 'DELETE',
                        _token: token,
                        id: id
                    },
                    success: function() {
                        swal({
                            title: "Deleted!",
                            text: "Your resource has been deleted.",
                            type: "success",
                            timer: 1500
                        });
                      location.reload();
                    },
                    error: function(data) {

                        swal({
                            title: "Not Deleted!",
                            text: "Some error occours try again",
                            type: "error",
                            timer: 1500
                        });
                    }
                });


            }


        }).catch((err) => {
            swal({
                title: "Not Deleted!",
                text: "Your resource has not deleted.",
                type: "warning",
                timer: 1500
            });
        });

    });

</script>
