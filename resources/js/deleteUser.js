
    let btns = $('.delete');
    console.log(btns);
      $('.delete').click(function(){
        Swal.fire({
          title: 'Are you sure?',
          text: 'You will not be able to recover this imaginary file!',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, keep it'
        }).then((result) => {
          if (result.isConfirmed) {
                    $.ajax({
                      method:"DELETE",
                      url: deleteUrl + $(this).data("id"),
                      // data: {
                      //   id : 
                      // },
                      success: function( result ) {
                        Swal.fire(
                        'Deleted!',
                        'Your  file has been deleted.',
                        'success'
                      )
                       window.location.reload();
                      }
                    });

          // For more information about handling dismissals please visit
          // https://sweetalert2.github.io/#handling-dismissals
          }
        })

      })