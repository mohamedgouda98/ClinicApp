$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.show_confirm_two').click(function (event) {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var parent = $(this).parent();

        Swal.fire({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: 'warning',
            padding: '3em',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes !'
        }).then((result) => {
            if (result.isConfirmed) {
                let temp = `#${name}-${id}`;
                $.ajax({
                    url: "delete",
                    type: 'DELETE',
                    data: {id: id}
                    , success: function (res) {
                        if (res == 1) {
                            $(temp).remove();
                            Swal.fire(
                                'Removed!',
                                `Record Has Been Removed !`,
                                'success'
                            )
                            parent.slideUp(300, function () {
                                parent.closest("tr").remove();
                            });
                        } else {
                            Swal.fire(
                                'Error!',
                                `Error : ${res} !`,
                                'error'
                            )
                        }
                    }, error: function (resp) {
                        Swal.fire(
                            'Error!',
                            `Look At Your Console There is An Error !`,
                            'error'
                        )
                        console.log(resp);
                    }
                });
            }
        });
    });
})
