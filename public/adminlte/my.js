CKEDITOR.replace('editor1');

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