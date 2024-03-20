<input type="text" id="search" placeholder="Search">
<button onclick="searchRecipes()">Click here</button>
<div id="search-results"></div>

{{-- <div id="search-results">
@vite('resources/js/recipes/search.jsx') </div> --}}

<script>
    async function searchRecipes() { 
        const searchInput = document.getElementById('search');
        const searchResults = document.getElementById('search-results');

        searchResults.innerHTML = '';
        let value = searchInput.value;

        if (value && value != '') {
            const response = await fetch('/api/recipe/search?search=' + value)
            const data = await response.json()

            data.forEach(recipe => {
                searchResults.innerHTML += `<br></br><p><strong>${recipe.title}</p> <p> <img src="${recipe.image}" /> </p> <p> ${recipe.description}</p> <p>${recipe.instruction}</p>`
            });
        }
    }
</script>