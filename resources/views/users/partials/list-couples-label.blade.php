    {!! link_to_route('users.list', $sunah->name, [$sunah->id], ['title' => $sunah->name.' ('.$sunah->gender.')']) !!}
    @if (!$sunah->wifes->isEmpty())
        x
        @foreach($sunah->wifes as $wife)
            {{ $wife->profileLink() }}
        @endforeach
    @endif
    @if (!$sunah->husbands->isEmpty())
        x
        @foreach($sunah->husbands as $husband)
            {{ $husband->profileLink() }}
        @endforeach
    @endif
