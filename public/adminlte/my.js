$('.delete').click(function () {
   var res = confirm('Потвердите действие');
   if (!res) return false;
});

$('.nav-sidebar a').each(function () {
   var location = window.location.protocol + '//' + window.location.host + window.location.pathname;
   var link = this.href;
   if (link == location) {
      $(this).addClass('active');
   }
});

// CKEDITOR.replace('editor1');
$('#editor1').ckeditor();

$('#reset-filter').click(function () {
   $('#filter input[type=radio]').prop('checked', false);
   return false;
});

$(".select2").select2({
   placeholder: "Начните вводить наименование товара",
   cache: true,
   ajax: {
      url: adminpath + "/product/related-product",
      delay: 250,
      dataType: 'json',
      data: function (params) {
         return {
            q: params.term,
            page: params.page
         };
      },
      processResults: function (data, params) {
         return {
            results: data.items,
         };
      },
   },
});