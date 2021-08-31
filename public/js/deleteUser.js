/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/deleteUser.js ***!
  \************************************/
var btns = $('.delete');
console.log(btns);
$('.delete').click(function () {
  var _this = this;

  Swal.fire({
    title: 'Are you sure?',
    text: 'You will not be able to recover this imaginary file!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, keep it'
  }).then(function (result) {
    if (result.isConfirmed) {
      $.ajax({
        method: "DELETE",
        url: deleteUrl + $(_this).data("id"),
        // data: {
        //   id : 
        // },
        success: function success(result) {
          Swal.fire('Deleted!', 'Your  file has been deleted.', 'success');
          window.location.reload();
        }
      }); // For more information about handling dismissals please visit
      // https://sweetalert2.github.io/#handling-dismissals
    }
  });
});
/******/ })()
;