<span class="label">
    {!! link_to_route('users.tree-couples', $sunah->name, [$sunah->id], ['title' => $sunah->name.' ('.$sunah->gender.')']) !!}
    @if ($sunah->wifes->isEmpty() == false)
        <ul class="list-unstyled" style="margin-bottom: 0">
            <li style="color: #3097d1">x</li>
            @foreach($sunah->wifes as $wife)
                <li>{{ $wife->profileLink() }}</li>
            @endforeach
        </ul>
    @endif
    @if ($sunah->husbands->isEmpty() == false)
        <ul class="list-unstyled" style="margin-bottom: 0">
            <li style="color: #3097d1">x</li>
            @foreach($sunah->husbands as $husband)
                <li>{{ $husband->profileLink() }}</li>
            @endforeach
        </ul>
    @endif
</span>