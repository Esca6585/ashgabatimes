<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Tag') }}</th>
                <th>{{ __('View') }}</th>
                <th>{{ __('Img') }}</th>
                <th>{{ __('Category') }} ID</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $new)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $new->title }}</td>
                <td>#{{ $new->tag }}</td>
                <td>{{ $new->view }}</td>
                <td><img src="{{ asset($new->image) }}" alt="{{ $new->image }}" width="150px"></td>
                <td>
                    <a href="{{ route(Request::segment(2) . '.show', [ $new->category->id ] ) }}" class="text-warning">
                        {{ $new->category->name }}
                    </a>
                </td>
                <td>@include('admin-panel.news.news-action')</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $news->links('layouts.admin.pagination') }}
        </div>
    </div>
</div>
