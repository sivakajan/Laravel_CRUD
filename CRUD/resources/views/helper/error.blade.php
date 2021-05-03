<div>
    @if ($errors->any())
        <div class="alert alert-danger mt-1">
                <br>
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
        </div>
    @endif
</div>