<nav class=" bg-white shadow-md px-4 py-3">
      <div class="flex justify-between item-center">
      <div class="text-2xl text-green-900 hover:text-blue-500 cursor-pointer">
            Quiz System
        </div>
        <div class=" space-x-4">
        <a class="text-green-900 hover:text-blue-500" href="{{ url('/') }}">Home</a>
            <a class="text-green-900 hover:text-blue-500" href="{{ url('categories-list') }}">Categories</a>
            @if(session('user'))
            <a class="text-green-900 hover:text-blue-500" href="{{ url('user-details') }}">Welcome ,{{session('user')->name}}</a>
            <a class="text-green-900 hover:text-blue-500" href="{{ url('user-logout') }}">Logout</a>
            @else
            <a class="text-green-900 hover:text-blue-500" href="{{ url('user-login') }}">Login</a>
            <a class="text-green-900 hover:text-blue-500" href="{{ url('user-signup') }}">Signup</a>
  @endif
        </div>
      </div>
    </nav>