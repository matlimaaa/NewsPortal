<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>News</th>
        </tr>
    </thead>
    <tbody>
        @foreach($news as $register)
            <tr>
                <td>{{ $register->title }}</td>
                <td>{{ $register->news }}</td>
            </tr>
        @endforeach
    </tbody>
</table>