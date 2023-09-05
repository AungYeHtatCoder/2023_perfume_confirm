<form action="{{ url('/search') }}" method="post">
 @csrf
 <input type="text" name="search" class="input-text input-text--border-radius input-text--style-1" id="main-search"
  placeholder="Search">
</form>

<div id="product-list">

</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<script>
// $(document).ready(function() {
//  $('#main-search').on('keyup', function() {
//   let query = $(this).val();
//   $.ajax({
//    url: '/search',
//    type: 'POST',
//    data: {
//     query: query
//    },
//    success: function(html) {
//     $('#product-list').html(html);
//    }
//   });
//  });
// });
</script>