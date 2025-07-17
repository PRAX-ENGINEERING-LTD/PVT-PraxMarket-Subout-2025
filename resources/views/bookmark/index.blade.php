{{-- Assuming 'appLayouts.app' is the intended layout --}}
@extends('appLayouts.app')

@section('title', 'Coming Soon with Background Image')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('new-assets/img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Prax Engineering</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>
@section('main_content')

<script>
    var selectedTemplateId = 123;
</script>
<body>
  
    <main class="w-full">
        <!-- React components will be rendered into these divs -->
        <div id="bookmark" class="w-full"
                data-get-recommended-suppliers="{{ route('bookmark.getRecomendedSuppliers') }}"
                data-get-bookmarked-companies="{{ route('bookmark.getBookmarkedCompanies') }}"
                data-get-approved-suppliers="{{ route('bookmark.getApprovedSuppliers') }}"
                data-get-selected-suppliers="{{ route('bookmark.getSelectedSuppliers') }}"
                data-get-bookmark-ads="{{ route('bookmark.getBookmarkAds') }}"
                data-get-custom-apis="{{ route('bookmark.getAvailableCustomBookmarkApis') }}"
                data-add-new-bookmark-folder="{{ route('bookmark.addNewBookmarkFolder') }}"
                data-delete-bookmark-folder="{{ route('bookmark.deleteBookmarkFolder') }}">
        </div>

    
    </main>
</body>
@endsection
</html>


