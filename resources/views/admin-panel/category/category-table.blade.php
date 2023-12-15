<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Category') }} ID</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route(Request::segment(3) . '.show', [ $categoryType, $category->parent ? $category->parent->id : $category->id ] ) }}" class="{{ $category->parent ? 'text-warning' : 'text-primary' }}">
                        {{ $category->parent ? $category->parent->name : __('Parent Category') }}
                    </a>
                </td>
                <td>@include('admin-panel.category.category-action')</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $categories->links('layouts.admin.pagination') }}
        </div>
    </div>
</div>
