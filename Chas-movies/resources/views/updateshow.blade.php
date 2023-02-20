@if (Auth::user()->role == 0)
<h1>Update Show</h1>
                    <form method="POST" action="{{ url('/editmovie/')}}">
                        @csrf
                        @method('UPDATE')
                        <input type="text" name="name" value="{{ $data->title}}">
                        <input type="text" name="name" value="{{ $data->genre}}">
                        <input type="text" name="name" value="{{ $data->director}}">
                        <input type="text" name="name" value="{{ $data->maincast}}">
                        <input type="text" name="name" value="{{ $data->seasons}}">
                        <input type="text" name="name" value="{{ $data->episodes}}">
                        <input type="text" name="name" value="{{ $data->imgurl}}">
                        <button class="w-1/10 inline-block text-sm font-medium text-gray-900 bg-gray-800 hover:bg-gray-700 absolute top-0 right-0 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">Update</button>
                    </form>
                    @endif







                    @if (Auth::user()->role == 0)
<h1>updatemovie</h1>
                    <form method="POST" action="/editmovie">
                        @csrf
                        <input type="hidden" name="name" value="{{ $data->id}}">
                        <input type="text" name="name" value="{{ $data->title}}">
                        <input type="text" name="name" value="{{ $data->genre}}">
                        <input type="text" name="name" value="{{ $data->director}}">
                        <input type="text" name="name" value="{{ $data->maincast}}">
                        <input type="text" name="name" value="{{ $data->imgurl}}">
                        <button class="w-1/10 inline-block text-sm font-medium text-gray-900 bg-gray-800 hover:bg-gray-700 absolute top-0 right-0 px-2 py-2 rounded-lg scale-200 lg:scale-90 sm:scale-60" type="submit">Update</button>
                    </form>