@extends('recipe.main')

@section('react-app')

  <div id="root"></div>
  @viteReactRefresh
 @vite('resources/js/Recipes.jsx')
@endsection