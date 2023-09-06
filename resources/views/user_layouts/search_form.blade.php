<form action="{{ url('/search') }}" method="post">
 @csrf
 <input type="text" name="search" class="input-text input-text--border-radius input-text--style-1" id="main-search"
  placeholder="Search">
</form>